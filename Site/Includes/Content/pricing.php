<?php
$section_number = '06';
$badge_label    = 'Website Pricing';
$heading        = 'Website Pricelist';
$subheading     = 'All options come with our hosting and maintenance service as standard, choose from our options below or get in touch for more info!';

$plans = [
    [
        'name'        => 'Startup',
        'price'       => '£30',
        'price_was'   => null,
        'period'      => '/month',
        'setup'       => '£100 setup',
        'description' => 'Ideal for startups and small businesses taking their first steps online.',
        'popular'     => false,
        'features'    => [
            'Custom design for up to 5 pages',
            'Foundational SEO services',
            'Google Analytics setup',
            'Standard contact form integration',
        ],
        'aos_delay'   => '100',
    ],
    [
        'name'        => 'Scale up',
        'price'       => '£60',
        'price_was'   => '£80',
        'period'      => '/month',
        'setup'       => '£250 setup',
        'description' => 'Perfect for growing brands needing more customization and flexibility.',
        'popular'     => true,
        'features'    => [
            'Custom design for up to 10 pages',
            'SEO+ service, reviewed monthly',
            'Up to 2 integrations with third party softwares',
            'Website maintenance included',
        ],
        'aos_delay'   => '200',
    ],
    [
        'name'        => 'Enterprise',
        'price'       => 'AOR',
        'price_was'   => null,
        'period'      => '/month',
        'setup'       => 'Setup fee available on request',
        'description' => 'Best suited for established businesses wanting a fully tailored experience.',
        'popular'     => false,
        'features'    => [
            'Bespoke Web Application',
            'E-commerce functionality (if needed)',
            'Support for multiple third party integrations',
            'Regular site maintenance',
        ],
        'aos_delay'   => '300',
    ],
];

$partners = [
    ['src' => '../assets/images/portfolio/Athena-background.png', 'alt' => 'Athena'],
    ['src' => '../assets/images/portfolio/EF.png',                'alt' => 'EF'],
    ['src' => '../assets/images/portfolio/ff.png',                'alt' => 'FF'],
    ['src' => '../assets/images/portfolio/nibnnode.png',          'alt' => 'Nibnnode'],
    ['src' => '../assets/images/portfolio/ISP.png',               'alt' => 'ISP'],
    ['src' => '../assets/images/portfolio/LukSharp.png',          'alt' => 'LukSharp'],
    ['src' => '../assets/images/portfolio/novu apartments.png',   'alt' => 'Novu Apartments'],
    ['src' => '../assets/images/portfolio/Positive-Progress.png', 'alt' => 'Positive Progress'],
    ['src' => '../assets/images/portfolio/squeeky green cleaning.png', 'alt' => 'Squeeky Green Cleaning'],
    ['src' => '../assets/images/portfolio/electave.png',          'alt' => 'Electave'],
    ['src' => '../assets/images/portfolio/james.png',             'alt' => 'James'],
    ['src' => '../assets/images/portfolio/lcr.png',               'alt' => 'LCR'],
    ['src' => '../assets/images/portfolio/prosp.png',             'alt' => 'Prosp'],
    ['src' => '../assets/images/portfolio/Sg.png',                'alt' => 'SG'],
];
?>

<section class="pricing-section py-5 py-lg-11 py-xl-12 bg-dark">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-10">
      <div class="d-flex flex-column gap-5 gap-xl-11">

        <!-- Section header -->
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
              <div class="col-xxl-8">
                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <h2 class="mb-0 text-white"><?php echo htmlspecialchars($heading); ?></h2>
                  <p class="fs-5 mb-0 text-opacity-70 text-white"><?php echo htmlspecialchars($subheading); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pricing cards -->
        <div class="row">
          <?php foreach ($plans as $plan) : ?>
            <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
              <div class="card w-100" data-aos="fade-up" data-aos-delay="<?php echo $plan['aos_delay']; ?>" data-aos-duration="1000">
                <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">

                  <div class="d-flex flex-column gap-6">

                    <!-- Plan name + popular badge -->
                    <div class="hstack gap-3">
                      <h5 class="mb-0 fw-medium"><?php echo htmlspecialchars($plan['name']); ?></h5>
                      <?php if ($plan['popular']) : ?>
                        <span class="badge text-bg-dark hstack gap-2">
                          <iconify-icon icon="lucide:flame" class="fs-5"></iconify-icon>Most popular
                        </span>
                      <?php endif; ?>
                    </div>

                    <!-- Price -->
                    <div class="hstack gap-2">
                      <?php if ($plan['price_was']) : ?>
                        <h3 class="mb-0 text-opacity-50 text-dark"><del><?php echo htmlspecialchars($plan['price_was']); ?></del></h3>
                      <?php endif; ?>
                      <h3 class="mb-0"><?php echo htmlspecialchars($plan['price']); ?></h3>
                      <p class="mb-0"><?php echo htmlspecialchars($plan['period']); ?></p>
                    </div>

                    <p class="mb-0"><?php echo htmlspecialchars($plan['description']); ?></p>
                    <p class="mb-0"><b><?php echo htmlspecialchars($plan['setup']); ?></b></p>
                  </div>

                  <!-- Features -->
                  <div class="pt-8 border-top d-flex flex-column gap-6">
                    <h6 class="mb-0 fw-normal">What's Included:</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                      <?php foreach ($plan['features'] as $feature) : ?>
                        <li class="hstack gap-3">
                          <span class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center">
                            <iconify-icon icon="lucide:check" class="fs-6 text-dark"></iconify-icon>
                          </span>
                          <h6 class="mb-0 fw-normal"><?php echo htmlspecialchars($feature); ?></h6>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>

                  <a href="contact.php" class="btn w-100 justify-content-center">
                    <span class="btn-text">Get in touch</span>
                    <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                  </a>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <!-- Trusted by / marquee -->
      <div class="d-flex flex-column gap-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <p class="fs-5 mb-0 text-center text-white">Trusted by</p>
        <div class="marquee w-100 d-flex align-items-center overflow-hidden">
          <div class="marquee-content d-flex align-items-center gap-8">
            <?php foreach ($partners as $partner) : ?>
              <div class="marquee-tag hstack justify-content-center">
                <img src="<?php echo htmlspecialchars($partner['src']); ?>" alt="<?php echo htmlspecialchars($partner['alt']); ?>" class="img-fluid">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>