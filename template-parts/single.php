<?php

/**
 * Template part for displaying posts
 *
 * @package wp-matrioska-base
 */

// Evitar acesso direto
if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>
<div class="common-hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto text-center">
        <div class="main-heading">
          <h1><?php the_title(); ?></h1>
          <div class="pages-intro">
            <a href="<?php echo site_url(); ?>/">Home </a>
            <span><i class="fa-regular fa-angle-right"></i></span>
            <a href="<?php echo site_url(); ?>/posts">Posts </a>
            <span><i class="fa-regular fa-angle-right"></i></span>
            <p><?php the_title(); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="service-details-all sp">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="blog-details-all">
          <article>
            <div class="blog-details-box">
              <div class="heading1">
                <?php the_content(); ?>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>