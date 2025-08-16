<body>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const currentPage = window.location.pathname.split("/").pop(); // e.g., 'about-us.php'
    const menuLinks = document.querySelectorAll(".header-menu a");

    menuLinks.forEach(link => {
      const linkPage = link.getAttribute("href");
      const img = link.querySelector("img");

      if (linkPage === currentPage || (linkPage === "index.php" && currentPage === "")) {
        // Add 'active' class to the link
        link.classList.add("active");

        // Add spinning animation to its icon
        if (img) img.classList.add("animate-spin");
      } else {
        // Remove spinning from non-active items
        if (img) img.classList.remove("animate-spin");
      }
    });
  });

  </script>

  <!-- Header -->
  <header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
    <div class="container">
      <div class="header-wrapper d-flex align-items-center justify-content-between">
        <div class="logo">
          <a href="index.php" class="logo-white">
            <img src="../assets/images/logos/Pantheon-logo-white-no-bg.png" alt="logo" class="img-fluid" style="width:50%">
          </a>
          <a href="index.php" class="logo-dark">
            <img src="../assets/images/logos/Pantheon-logo-white-no-bg.png" alt="logo" class="img-fluid" style="width:30%">
          </a>
        </div>
        <div class="d-flex align-items-center gap-4">

          <div class="btn-group">
            <button
              class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
              type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
              <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark"></iconify-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end p-4">
              <div class="d-flex flex-column gap-6">
                <div class="hstack justify-content-between border-bottom pb-6">
                  <p class="mb-0 fs-5 text-dark">Menu</p>
                  <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                </div>
                <div class="d-flex flex-column gap-3">
                  <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
                    <li class="header-item">
                      <a href="index.php" aria-current="true"
                        class="header-link active hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Home</a>
                    </li>
                    <li class="header-item">
                      <a href="about-us.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">About</a>
                    </li>
                    <li class="header-item">
                      <a href="projects.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Projects</a>
                    </li>
                    <li class="header-item">
                      <a href="contact.php" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Contact</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <a class="fs-8 text-dark fw-bold" href="mailto:welcome@pantheontechnology.co.uk">welcome@pantheontechnology.co.uk</a>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>