<?php
$faqs = [
    [
        'question' => 'What services does your agency offer?',
        'answer'   => 'We provide end-to-end software development: discovery &amp; product strategy, UI/UX design, frontend &amp; backend development, API integrations, cloud architecture, QA &amp; testing, DevOps, and analytics. We also offer legacy migrations, performance optimisation, and advisory services to help you scale.',
    ],
    [
        'question' => 'How long does a typical project take?',
        'answer'   => 'Timelines vary by scope. Small projects or landing apps typically take 4–6 weeks. Medium projects (multiple screens, integrations) usually run 2–4 months. Large enterprise systems can take 6 months or more. We provide a detailed sprint-based timeline during the planning phase and give regular progress updates.',
    ],
    [
        'question' => 'Do you offer custom designs, or do you use templates?',
        'answer'   => 'We craft custom designs tailored to your brand and users. For faster MVPs or when budgets are tight we can adapt vetted component libraries or templates — always customised and optimised for accessibility, responsiveness, and performance.',
    ],
    [
        'question' => "What's the cost of a project?",
        'answer'   => 'Cost depends on features, integrations, compliance needs and timelines. We offer fixed-price quotes for well-defined scopes and time-and-materials for evolving projects. After an initial discovery call we deliver a transparent proposal with milestones, deliverables and a cost breakdown — no hidden fees.',
    ],
    [
        'question' => 'Do you provide ongoing support after project completion?',
        'answer'   => "Yes — we offer flexible post-launch plans: hourly support, monthly maintenance retainers, SLA-backed incident response, security patching, performance monitoring and regular feature improvements. We'll recommend the package that best fits your product stage and risk profile.",
    ],
];

$section_number = '07';
$badge_label    = 'FAQs';
$heading        = 'Frequently asked questions';
$subheading     = 'Discover how we tailor our solutions to meet unique needs, delivering impactful strategies, personalized branding, and exceptional customer experiences.';
?>

<section class="faq py-5 py-lg-11 py-xl-12">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-11">

      <div class="row gap-7 gap-xl-0">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">
              <?php echo htmlspecialchars($section_number); ?>
            </span>
            <hr class="border-line bg-white">
            <span class="badge text-bg-dark"><?php echo htmlspecialchars($badge_label); ?></span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-9">
              <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0"><?php echo htmlspecialchars($heading); ?></h2>
                <p class="fs-5 mb-0 text-opacity-70"><?php echo htmlspecialchars($subheading); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-end">
        <div class="col-xl-8">
          <div class="accordion accordion-flush" id="faqAccordion" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

            <?php foreach ($faqs as $index => $faq) :
              $heading_id  = 'faq-heading-' . $index;
              $collapse_id = 'faq-collapse-' . $index;
              $is_last     = ($index === count($faqs) - 1);
            ?>
              <div class="accordion-item<?php echo $is_last ? ' border-bottom' : ''; ?>">
                <h2 class="accordion-header" id="<?php echo $heading_id; ?>">
                  <button
                    class="accordion-button collapsed fs-8 fw-bold"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#<?php echo $collapse_id; ?>"
                    aria-expanded="false"
                    aria-controls="<?php echo $collapse_id; ?>"
                  >
                    <?php echo htmlspecialchars($faq['question']); ?>
                  </button>
                </h2>
                <div
                  id="<?php echo $collapse_id; ?>"
                  class="accordion-collapse collapse"
                  aria-labelledby="<?php echo $heading_id; ?>"
                  data-bs-parent="#faqAccordion"
                >
                  <div class="accordion-body pt-0 fs-5 text-dark">
                    <?php echo $faq['answer']; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>