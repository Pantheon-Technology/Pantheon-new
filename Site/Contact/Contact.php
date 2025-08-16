<?php
// create a token if missing
if (empty($_SESSION['form_token'])) {
    $_SESSION['form_token'] = bin2hex(random_bytes(32));
}
$form_token = $_SESSION['form_token'];
?>
<!-- Services Section (Contact) -->
<section class="get-in-touch py-5 py-lg-11 py-xl-12 bg-light-gray">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-10">
      <div class="row gap-7 gap-xl-0">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
            data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">10</span>
            <hr class="border-line bg-white">
            <span class="badge text-bg-dark">Contact us</span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-8">
              <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0">Get in touch</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-between gap-7 gap-xl-0">
        <div class="col-xl-3">
          <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Let’s collaborate
            and create something amazing! Tell us about your project.</p>
        </div>

        <div class="col-xl-8">
          <form class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"
                method="post" action="/Contact/sendEmail.php" novalidate>
            <div>
              <input type="text" name="name" class="form-control border-bottom border-dark" id="formName"
                placeholder="Name" required>
            </div>

            <div>
              <input type="email" name="email" class="form-control border-bottom border-dark" id="formEmail"
                placeholder="Email" aria-describedby="emailHelp" required>
            </div>

            <div>
              <textarea name="message" class="form-control border-bottom border-dark" id="formMessage"
                placeholder="Tell us about your project" rows="3" required></textarea>
            </div>

            <!-- Honeypot field (hidden to humans, visible to bots) -->
            <div style="display:none;">
              <label for="website">If you're human leave this blank</label>
              <input type="text" name="website" id="website" value="">
            </div>

            <!-- CSRF token -->
            <input type="hidden" name="form_token" value="<?php echo htmlspecialchars($form_token); ?>">

            <button type="submit" class="btn w-100 justify-content-center">
              <span class="btn-text">Submit message</span>
              <iconify-icon icon="lucide:arrow-up-right"
                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($_GET['success'])): ?>
<script>
    alert("Thank you for your email! We'll be in touch soon.");
</script>
<?php endif; ?>
</section>