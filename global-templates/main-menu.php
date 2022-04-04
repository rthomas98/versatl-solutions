<div class="py-2 top-bar text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_field( 'tob_bar_content', 'option' ); ?>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?php echo site_url("/"); ?>">
    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo.svg" width="60">
    <img class="logo-text pt-2 ms-2" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-text.svg" width="">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link
          <?php if (
              is_page("home")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("/"); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?php if (
              is_page("about-us")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("about-us"); ?>">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item 
            <?php if (
              is_page("services/a-la-carte-deep-cleaning-services")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/a-la-carte-deep-cleaning-services"); ?>">A La Carte Deep Cleaning</a></li>
            <li><a class="dropdown-item
            <?php if (
              is_page("/services/deep-cleaning-packages")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/deep-cleaning-packages"); ?>">Deep Cleaning Packages</a></li>
            <li><a class="dropdown-item
            <?php if (
              is_page("services/a-la-carte-standard-cleaning-services")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/a-la-carte-standard-cleaning-services"); ?>">A La Carte Standard Cleaning</a></li>
            <li><a class="dropdown-item
            <?php if (
              is_page("services/standard-cleaning-packages")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/standard-cleaning-packages"); ?>">Standard Cleaning Packages</a></li>
            <li><a class="dropdown-item
            <?php if (
              is_page("services/move-in-out-cleaning-services")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/move-in-out-cleaning-services"); ?>">Move In/Out Cleaning</a></li>
            <li><a class="dropdown-item
            <?php if (
              is_page("services/office-space-cleaning-services")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("services/office-space-cleaning-services"); ?>">Office Space Cleaning</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?php if (
              is_page("faqs")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("faqs"); ?>">FAQ's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?php if (
              is_page("contact-us")
            ) {
              echo "active";
            } ?>" href="<?php echo site_url("contact-us"); ?>">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="<?php echo site_url("booking"); ?>" class="btn btn-sm btn-secondary" ><i class="fa-light fa-user-vneck"></i> Get Started</a>      
      </form>
    </div>
  </div>
</nav>

<div style="height: 1000px;"></div>