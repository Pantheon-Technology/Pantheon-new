<?php 
include 'Includes/head.php';
include 'Includes/header.php';
?>



  <!--  Page Wrapper -->
  <div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
      <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
        <source src="../assets/images/videos/head.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <p class="mb-0 text-white fs-5 text-opacity-70">We create <span
                    class="text-primary">high-performing</span> digital designs that elevate brands and enhance
                  conversions.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">See our services</h1>
            <a href="#services" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- section 1 - Stats -->
    <?php 'Includes/Content.stats.php' ?>
  
    <!-- section 2 - Projects -->
   <?php include 'Includes/Content/projects.php' ?>

    <!-- section 3 - Services -->
     <section id='services'>
   <?php include 'Includes/Content/services.php' ?>
</section>

    <!--  Why choose us Section -->
    <?php include 'Includes/Content/whyUs.php' ?>

    <!-- Testimonials section -->
    <?php include 'Includes/Content/testimonials.php' ?>
    
    <!--  Pricing Section -->
    <?php include 'Includes/Content/pricing.php' ?>

    <!--  FAQ Section -->
    <?php include 'Includes/Content/FAQs.php' ?>

    <!--  Recent news Section -->
      <!-- later edition -->
    <?php // include Includes/Content/news.php ?>

    <!--  Get in touch Section -->
    <?php  include "Contact/Contact.php"?>

  </div>

  <?php include "Includes/footer.php"; ?>