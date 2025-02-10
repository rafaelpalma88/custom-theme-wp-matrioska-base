<?php
function meu_tema_setup()
{
    // Suporte para imagens destacadas
    add_theme_support('post-thumbnails');

    // Suporte para título dinâmico
    add_theme_support('title-tag');

    // Registrar menu de navegação
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'wp-matrioska-base'),
    ));
}
add_action('after_setup_theme', 'meu_tema_setup');

function meu_tema_scripts()
{
    // Enfileira o reset.css antes do style.css
    //wp_enqueue_style('reset-css', get_template_directory_uri() . '/css/reset.css');

    // Enfileirar folhas de estilo e scripts
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function wp_matrioska_base_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'wp_matrioska_base_custom_logo_setup');

function my_custom_fonts()
{
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
}
add_action('wp_enqueue_scripts', 'my_custom_fonts');

add_filter('pre_get_document_title', function ($title) {
    if (is_front_page() || is_home()) {
        return get_bloginfo('name') . ' | ' . get_bloginfo('description');
    } elseif (is_single()) {
        // Verifica se é um post individual e ajusta o título
        $post_title = single_post_title('', false);
        return $post_title . ' | ' . get_bloginfo('name');
    } elseif (is_page()) {
        // Verifica se é uma página e ajusta o título
        $page_title = single_post_title('', false);
        return $page_title . ' | ' . get_bloginfo('name');
    }
    return $title . ' | ' . get_bloginfo('name');
});
function meu_tema_suporte_cf7()
{
    // Carrega scripts do Contact Form 7
    if (function_exists('wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
    }

    // Carrega estilos do Contact Form 7
    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
    }

    // Garante que o jQuery seja carregado
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'meu_tema_suporte_cf7');
