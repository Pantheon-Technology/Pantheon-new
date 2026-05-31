<?php
$section_number = '03';
$badge_label    = 'Services';
$heading        = 'Elevating Your Digital Presence';
$subheading     = 'Unlock your brand\'s full potential with our end-to-end services—designed to ignite engagement, drive growth, and keep you ahead of the curve.';
$cta_link       = 'contact.php';
$cta_label      = 'Get in touch';

$services = [
    [
        'id'          => 'one',
        'label'       => 'Bespoke Web Dev',
        'description' => 'Break free from template mundanity. Our bespoke websites are crafted to showcase your unique identity, spark conversations, and convert visitors into loyal customers.',
        'active'      => true,
        'media_type'  => 'video',
        'media_src'   => '../assets/images/videos/webdev.mp4',
        'overlay'     => null,
    ],
    [
        'id'          => 'five',
        'label'       => 'Salesforce Dev (Apex)',
        'description' => 'Build robust Salesforce solutions with our Apex expertise: custom triggers, Lightning integrations, batch jobs, managed packages and secure third-party integrations.',
        'active'      => false,
        'media_type'  => 'image',
        'media_src'   => '../assets/images/services/Salesforce.png',
        'overlay'     => [
            'title' => 'Salesforce Development',
            'body'  => 'Custom Apex, triggers, Lightning integrations &amp; secure third-party connections.',
        ],
    ],
    [
        'id'          => 'six',
        'label'       => 'Mobile App Development',
        'description' => 'From concept to app store — we build polished, performant iOS and Android apps that users love, using modern cross-platform and native technologies.',
        'active'      => false,
        'media_type'  => 'video',
        'media_src'   => '../assets/images/videos/projects.mp4',
        'overlay'     => null,
    ],
    [
        'id'          => 'seven',
        'label'       => 'SaaS Development',
        'description' => 'Turn your idea into a scalable, multi-tenant product. We design and build SaaS platforms with robust architecture, subscription billing, and the features your customers need to stick around.',
        'active'      => false,
        'media_type'  => 'video',
        'media_src'   => '../assets/images/videos/projects.mp4',
        'overlay'     => null,
    ],
];
?>

<section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="services">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-10">

      <!-- Section header -->
      <div class="row gap-7 gap-xl-0">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">
              <?php echo htmlspecialchars($section_number); ?>
            </span>
            <hr class="border-line bg-white">
            <span class="badge text-dark bg-white"><?php echo htmlspecialchars($badge_label); ?></span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-8">
              <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0 text-white"><?php echo htmlspecialchars($heading); ?></h2>
                <p class="fs-5 mb-0 text-white text-opacity-70"><?php echo htmlspecialchars($subheading); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Services tab -->
      <div class="services-tab">
        <div class="row gap-5 gap-xl-0">

          <!-- Tab panels (media) — hidden on mobile, shown on xl+ -->
          <div class="col-xl-4 d-none d-xl-block">
            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
              <?php foreach ($services as $service) : ?>
                <div
                  class="tab-pane<?php echo $service['active'] ? ' active' : ''; ?>"
                  id="<?php echo htmlspecialchars($service['id']); ?>"
                  role="tabpanel"
                  aria-labelledby="<?php echo htmlspecialchars($service['id']); ?>-tab"
                  tabindex="0"
                >
                  <?php if ($service['media_type'] === 'video') : ?>
                    <video class="top-0 start-0 w-100 h-100" autoplay muted loop playsinline>
                      <source src="<?php echo htmlspecialchars($service['media_src']); ?>" type="video/mp4" />
                    </video>
                  <?php else : ?>
                    <img src="<?php echo htmlspecialchars($service['media_src']); ?>" alt="<?php echo htmlspecialchars($service['label']); ?>" class="img-fluid">
                    <?php if ($service['overlay']) : ?>
                      <div class="position-absolute p-3" style="bottom:16px; left:16px;">
                        <div class="bg-black bg-opacity-50 text-white p-2 rounded">
                          <strong><?php echo htmlspecialchars($service['overlay']['title']); ?></strong><br>
                          <?php echo $service['overlay']['body']; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Tab nav (labels + descriptions) -->
          <div class="col-xl-8">
            <div class="d-flex flex-column gap-5">
              <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <?php foreach ($services as $service) : ?>
                  <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex flex-column w-100" role="presentation">

                    <div class="row w-100 align-items-center gx-3">
                      <div class="col-lg-6 col-xxl-5">
                        <button
                          class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0<?php echo $service['active'] ? ' active' : ''; ?>"
                          id="<?php echo htmlspecialchars($service['id']); ?>-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#<?php echo htmlspecialchars($service['id']); ?>"
                          type="button"
                          role="tab"
                          aria-controls="<?php echo htmlspecialchars($service['id']); ?>"
                          aria-selected="<?php echo $service['active'] ? 'true' : 'false'; ?>"
                        ><?php echo htmlspecialchars($service['label']); ?></button>
                      </div>
                      <div class="col-lg-6 col-xxl-7">
                        <p class="text-white text-opacity-70 mb-0"><?php echo htmlspecialchars($service['description']); ?></p>
                      </div>
                    </div>

                    <!-- Mobile media panel — shown inline on small screens only -->
                    <?php if ($service['active']) : ?>
                      <div class="d-xl-none mt-4">
                        <?php if ($service['media_type'] === 'video') : ?>
                          <video class="w-100 rounded" autoplay muted loop playsinline>
                            <source src="<?php echo htmlspecialchars($service['media_src']); ?>" type="video/mp4" />
                          </video>
                        <?php else : ?>
                          <img src="<?php echo htmlspecialchars($service['media_src']); ?>" alt="<?php echo htmlspecialchars($service['label']); ?>" class="img-fluid rounded">
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>

                  </li>
                <?php endforeach; ?>
              </ul>

              <a href="<?php echo htmlspecialchars($cta_link); ?>" class="btn border border-white border-opacity-25" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <span class="btn-text"><?php echo htmlspecialchars($cta_label); ?></span>
                <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>