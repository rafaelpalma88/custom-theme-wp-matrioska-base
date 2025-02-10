<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();
  ?>

  <!-- <meta name="keywords" content="plano B no Uruguai, residir no Uruguai, assessoria para o Uruguai, morar no Uruguai, residência no Uruguai, cidadania uruguaia, plano de vida Uruguai, vantagens do Uruguai, consultoria Uruguai, reduzir impostos"> -->
  <!-- <meta name="robots" content="index, follow"> -->
  <!-- <link rel="canonical" href="https://www.uruguaiplanob.com.br/"> -->

  <!--=====SOCIAL MEDIA=======-->
  <!-- <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
  <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
  <meta property="og:image"
    content="<?php echo get_template_directory_uri(); ?>/assets/img/destacada.png">
  <meta property="og:type" content="website"> -->

  <!--=====TWITTER=======-->
  <!-- <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Uruguai Plano B | Conquiste já o seu plano B no Uruguai!">
  <meta name="twitter:description" content="Nossa assessoria ajuda você a ter seu plano B em um dos melhores países da América Latina.">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/destacada.png"> -->

  <!--=====FAB ICON=======-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo/titel1.png" type="image/x-icon">

  <!--=====CSS=======-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-slider.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mobile-menu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

  <!--=====JQUERY=======-->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3-6-0.min.js"></script>
</head>

<body class="body">

  <!-- Preloader Start -->
  <!-- <div class="preloader">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cropped-logo_uruguaiplanob.png" alt=""></div>
    </div>
  </div> -->
  <!-- Preloader End -->

  <!--=====progress END=======-->

  <div class="paginacontainer">

    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

  </div>

  <!--=====progress END=======-->

  <!--=====HEADER START=======-->
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


              <!-- <div class="main-menu-ex main-menu-ex1">
              <ul>
                <li><a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                  <div class="tp-submenu">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="all-images-menu">
                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/demo1.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="<?php echo get_template_directory_uri(); ?>/index.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="<?php echo get_template_directory_uri(); ?>/single-index1.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index.html" target="_blank" class="bottom-heading">Home V1</a>
                          </div>

                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo2.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index2.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index2.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index2.html" target="_blank" class="bottom-heading">Home V2</a>
                          </div>


                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo3.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index3.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index3.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index3.html" target="_blank" class="bottom-heading">Home V3</a>
                          </div>

                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo4.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index4.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index4.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index4.html" target="_blank" class="bottom-heading">Home V4</a>
                          </div>

                          <div class="homemenu-thumb" style="margin: 0 0 20px 0;">
                            <div class="img1">
                              <img src="assets/img/demo/demo5.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index5.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index5.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index5.html" target="_blank" class="bottom-heading">Home V5</a>
                          </div>
                        </div>

                        <div class="all-images-menu">
                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo6.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index6.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index6.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index6.html" target="_blank" class="bottom-heading">Home V6</a>
                          </div>

                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo7.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index7.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index7.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index7.html" target="_blank" class="bottom-heading">Home V7</a>
                          </div>


                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo8.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index8.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index8.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index8.html" target="_blank" class="bottom-heading">Home V8</a>
                          </div>

                          <div class="homemenu-thumb">
                            <div class="img1">
                              <img src="assets/img/demo/demo9.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index9.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index9.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index9.html" target="_blank" class="bottom-heading">Home V9</a>
                          </div>

                          <div class="homemenu-thumb" style="margin: 0 0 20px 0;">
                            <div class="img1">
                              <img src="assets/img/demo/demo10.jpg" alt="">
                            </div>
                            <div class="homemenu-btn">
                              <a class="header-btn1" target="_blank" href="index10.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                              <div class="space16"></div>
                              <a class="header-btn1" target="_blank" href="single-index10.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <a href="index10.html" target="_blank" class="bottom-heading">Home V10</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </li>



                <li class="dropdown-menu-parrent"><a href="#" class="main1">Job Post <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                    <li><a href="job-post.html">Job Post</a></li>
                    <li><a href="job-details.html">Job Details</a></li>
                  </ul>
                </li>

                <li class="dropdown-menu-parrent"><a href="#" class="main1">Service <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                    <li><a href="service.html">Service</a></li>
                    <li class="has-dropdown has-dropdown1"><a href="service-details.html" class="main">Service Detials<span><i class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="service-details-left.html">Details Left</a></li>
                        <li><a href="service-details-right.html">Details Right</a></li>
                        <li><a href="service-details.html">Single Details</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>


                <li class="dropdown-menu-parrent"><a href="#" class="main1">Pages <i class="fa-solid fa-angle-down"></i></a>
                  <div class="mega-menu-all">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="mega-menu-single dis1">
                          <h3>Our Services</h3>
                          <ul>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details-left.html">Details Left</a></li>
                            <li><a href="service-details-right.html">Details Right</a></li>
                            <li><a href="service-details.html">Single Details</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="mega-menu-single">
                          <h3>News Letter</h3>
                          <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details-left.html">Details Left</a></li>
                            <li><a href="blog-details-right.html">Details Right</a></li>
                            <li><a href="blog-details.html">Single Details</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="mega-menu-single">
                          <h3>Page's</h3>
                          <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="error.html">ERROR 404</a></li>

                          </ul>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="mega-menu-single">
                          <h3>Our Project's</h3>
                          <ul>
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details-left.html">Details Left</a></li>
                            <li><a href="project-details-right.html">Details Right</a></li>
                            <li><a href="project-details.html">Single Details</a></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </li>

                <li class="dropdown-menu-parrent"><a href="#" class="main1">Blog <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="has-dropdown has-dropdown1"><a href="blog-details.html" class="main">Blog Detials<span><i class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="blog-details-left.html">Details Left</a></li>
                        <li><a href="blog-details-right.html">Details Right</a></li>
                        <li><a href="blog-details.html">Single Details</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="dropdown-menu-parrent"><a class="main1" href="#">Project <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                    <li><a href="project.html">Project</a></li>
                    <li class="has-dropdown has-dropdown1"><a href="blog-details.html" class="main">Blog Detials<span><i class="fa-solid fa-angle-right"></i></span></a>
                      <ul class="sub-menu">
                        <li><a href="project-details-left.html">Details Left</a></li>
                        <li><a href="project-details-right.html">Details Right</a></li>
                        <li><a href="project-details.html">Single Details</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
            </div> -->
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
  <!--=====HEADER END=======-->

  <!--=====Mobile header start=======-->
  <div class="mobile-header mobile-header-main d-block d-lg-none ">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cropped-logo_uruguaiplanob.png" alt="">
          </div>
          <!-- <div class="mobile-nav-icon">
            <i class="fa-duotone fa-bars-staggered"></i>
          </div> -->
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

      <!--<ul>
        <li class="has-dropdown"><a href="#">Home </a>
          <ul class="sub-menu">
            <li class="has-dropdown has-dropdown1"><a href="#">Multipage</a>
              <ul class="sub-menu">
                <li><a href="index.html">Home 1</a></li>
                <li><a href="index2.html">Home 2</a></li>
                <li><a href="index3.html">Home 3</a></li>
                <li><a href="index4.html">Home 4</a></li>
                <li><a href="index5.html">Home 5</a></li>
                <li><a href="index6.html">Home 6</a></li>
                <li><a href="index7.html">Home 7</a></li>
                <li><a href="index8.html">Home 8</a></li>
                <li><a href="index9.html">Home 9</a></li>
                <li><a href="index10.html">Home 10</a></li>
              </ul>
            </li>
            <li class="has-dropdown has-dropdown1"><a href="#">Landing Page</a>
              <ul class="sub-menu">
                <li><a href="single-index1.html">Home 1</a></li>
                <li><a href="single-index2.html">Home 2</a></li>
                <li><a href="single-index3.html">Home 3</a></li>
                <li><a href="single-index4.html">Home 4 </a></li>
                <li><a href="single-index5.html">Home 5</a></li>
                <li><a href="single-index6.html">Home 6</a></li>
                <li><a href="single-index7.html">Home 7</a></li>
                <li><a href="single-index8.html">Home 8</a></li>
                <li><a href="single-index9.html">Home 9</a></li>
                <li><a href="single-index10.html">Home 10</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="about.html">About Us</a></li>
        <li class="has-dropdown"><a href="#">Service</a>
          <ul class="sub-menu">
            <li><a href="service.html">Service</a></li>
            <li class="has-dropdown has-dropdown1"><a href="service-details.html" class="main">Service Detials<span><i class="fa-solid fa-angle-right"></i></span></a>
              <ul class="sub-menu">
                <li><a href="service-details-left.html">Details Left</a></li>
                <li><a href="service-details-right.html">Details Right</a></li>
                <li><a href="service-details.html">Single Details</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-dropdown"><a href="#">Pages</a>
          <ul class="sub-menu">
            <li><a href="contact.html">Contact</a></li>
            <li><a href="job-post.html">Job Post</a></li>
            <li><a href="job-details.html">Job Details</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="testimonial.html">Testimonial</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>

        <li class="has-dropdown"><a href="#">Blog</a>
          <ul class="sub-menu">
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-details-left.html">Details Left</a></li>
            <li><a href="blog-details-right.html">Details Right</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
          </ul>
        </li>

        <li class="has-dropdown"><a href="#">Project</a>
          <ul class="sub-menu">
            <li><a href="project.html">Project</a></li>
            <li><a href="project-details-left.html">Project Left</a></li>
            <li><a href="project-details-right.html">Project Right</a></li>
            <li><a href="project-details.html">Project Details</a></li>
          </ul>
        </li>

      </ul>-->

      <!-- <div class="mobile-button">
        <a class="theme-btn1" href="#contact">Entre em contato<span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div> -->

      <!-- <div class="single-footer-items">
        <h3>Contact Us</h3>

        <div class="contact-box">
          <div class="icon">
            <img src="assets/img/icons/footer-icon1.png" alt="">
          </div>
          <div class="pera">
            <a href="tel:+880123456789">+880 123 456 789</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="assets/img/icons/footer-icon2.png" alt="">
          </div>
          <div class="pera">
            <a href="mailto:info@mail.com">info@mail.com</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="assets/img/icons/footer-icon3.png" alt="">
          </div>
          <div class="pera">
            <a href="tel:+880123456789">8502 Preston Rd. <br> Inglewoo Maine 98380</a>
          </div>
        </div>

      </div> -->

      <!-- <div class="contact-infos">
        <h3>Our Location</h3>
        <ul class="social-icon">
          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
      </div> -->

    </div>
  </div>

  <!--=====Mobile header end=======-->