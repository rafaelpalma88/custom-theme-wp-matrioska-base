<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();
  ?>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo/titel1.png" type="image/x-icon">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-slider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mobile-menu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3-6-0.min.js"></script>
</head>

<body class="body">

  <div class="paginacontainer">

    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

  </div>

  <header>
    <div class="header-area header-area1 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="<?php echo home_url('/'); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cropped-logo_uruguaiplanob.png" alt="">
                </a>
              </div>
              <div class="header2-buttons">
                <div class="button">
                  <a class="theme-btn1" href="<?php echo site_url(); ?>/#contact">Entre em contato<span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-header mobile-header-main d-block d-lg-none ">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cropped-logo_uruguaiplanob.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
      <a href="<?php echo home_url('/'); ?>"><img src="https://www.uruguaiplanob.com.br/wp-content/uploads/2024/12/cropped-logo_uruguaiplanob.png" alt=""></a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">
    </div>
  </div>