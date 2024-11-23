<?php

add_theme_support('title-tag');


// Enqueue Script
//print_r(
//    '<pre>' . filemtime(get_template_directory() . '/assets/js/script.js') . '</pre>'
//);

function aquila_enqueue_scripts()
{
    // Enqueue style
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), false, 'all');

    // Enqueue Script
    wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array(), false, true);
    wp_enqueue_script('aquila-script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime(get_template_directory() . '/assets/js/script.js'), true);
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
