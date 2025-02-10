<?php get_header(); ?>

<?php
if (have_posts()) :
    if (is_singular()) {
        get_template_part('template-parts/single', get_post_format());
    } else {
        get_template_part('template-parts/content', get_post_format());
    }
else :
    get_template_part('template-parts/single', 'none');
endif;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>