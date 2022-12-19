<?php

function blogga_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'blogga_theme_support');


function blogga_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('blogga-simplegrid', get_template_directory_uri() . '/assets/css/simple-grid.min.css', [], $version, 'all');
    wp_enqueue_style('blogga-main', get_template_directory_uri() . '/style.css', [], $version, 'all');
}

add_action('wp_enqueue_scripts', 'blogga_register_styles');

// function blogga_register_scripts()
// {
//     $version = wp_get_theme()->get('Version');
// }

// add_action('wp_enqueue_scripts', 'blogga_register_scripts');

?>