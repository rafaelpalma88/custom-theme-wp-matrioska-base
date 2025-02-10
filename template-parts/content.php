<?php

/**
 * Template part for displaying posts
 *
 * @package wp-matrioska-base
 */

// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<div class="blog4 sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading4">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Blog</span>
                    <h2 class="text-anime-style-3">Fique por dentro das novidades</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="800">Temos diversos conteúdos para ajudar você a planejar a sua internacionalização.</p>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="blog4-box">
                        <div class="heading4">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <div class="space16"></div>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                            <div class="blog1-border"></div>
                            <a href="<?php the_permalink(); ?>" class="learn">Leia mais <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>