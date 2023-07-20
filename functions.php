<?php

define(
    'CUSTOM_POST_TYPES',
    get_stylesheet_directory() .
        '/includes/post-types/index.php'
);



// Require Dependencies
require __DIR__ . '/includes/vendors/index.php';


// Custom Post Types
include_once CUSTOM_POST_TYPES;

function enqueue_bootstrap_styles()
{
    wp_enqueue_style('home', get_template_directory_uri() . '/dist/app.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');



function enqueue_bootstrap_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js', array(), ['jquery'], 1,  true);
    wp_enqueue_script('bootstrap_jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
    wp_enqueue_script('bootstrap_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js', array(), '1.14.7', true);
    wp_enqueue_script('bootstrap_javascript', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array(), '4.3.1', true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js', array(), '3.11.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/scripts/script.js', array(), ['jquery'], 1,  true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts');





// acf options page

// Options page

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}
