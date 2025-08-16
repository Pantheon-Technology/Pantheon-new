<?php
session_start();

require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// CSRF token check
$token = $_POST['form_token'] ?? '';
if (empty($token) || !hash_equals($_SESSION['form_token'] ?? '', $token)) {
    http_response_code(400);
    exit('Invalid form token');
}

// Honeypot check
if (!empty($_POST['website'] ?? '')) {
    header('Location: /');
    exit;
}

// Collect + validate inputs
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit('Please complete the form correctly.');
}

// Sanitize inputs
$safe_name    = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE);
$safe_email   = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE);
$safe_message = htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE);

// SMTP config
$smtpHost = 'smtp.ionos.co.uk';
$smtpPort = 587;
$smtpUser = 'welcome@pantheontechnology.co.uk';
$smtpPass = 'Mylesoh123';

$recipient = 'welcome@pantheontechnology.co.uk';

try {
    // --- Main email to Pantheon ---
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $smtpPort;

    $mail->setFrom($smtpUser, 'Pantheon Website');
    $mail->addAddress($recipient);
    $mail->addReplyTo($safe_email, $safe_name);
    $mail->isHTML(true);
    $mail->Subject = 'New website enquiry from ' . $safe_name;
    $mail->Body    = "
        <h3>New contact form submission</h3>
        <p><strong>Name:</strong> {$safe_name}</p>
        <p><strong>Email:</strong> {$safe_email}</p>
        <p><strong>Message:</strong><br/>" . nl2br($safe_message) . "</p>
        <hr>
        <p>Sent from your website contact form.</p>
    ";
    $mail->send();

    // --- Auto-reply to the user ---
    $reply = new PHPMailer(true);
    $reply->isSMTP();
    $reply->Host       = $smtpHost;
    $reply->SMTPAuth   = true;
    $reply->Username   = $smtpUser;
    $reply->Password   = $smtpPass;
    $reply->SMTPSecure = 'tls';
    $reply->Port       = $smtpPort;

    $reply->setFrom($smtpUser, 'Pantheon Technology');
    $reply->addAddress($safe_email, $safe_name);
    $reply->isHTML(true);
    $reply->Subject = 'Thank you for contacting Pantheon Technology';
    $reply->Body    = "
        <p>Hi {$safe_name},</p>
        <p>Thank you for getting in touch! We’ve received your message and will get back to you shortly.</p>
        <p>Best regards,<br>Pantheon Technology Team</p>
    ";
    $reply->send();

    // Clear token and redirect
    unset($_SESSION['form_token']);
    header('Location: /?success=1');
    exit;

} catch (Exception $e) {
    error_log('Contact form mailer error: ' . $e->getMessage());
    http_response_code(500);
    exit('Mailer error — message not sent.');
}
