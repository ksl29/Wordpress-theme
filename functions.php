<?php

function my_theme_enqueue_styles()
{
    //My Main Stylesheet
    wp_register_style('main-css', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main-css');

    //Bootstrap Styles
    wp_register_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css", array(), false, 'all');
    wp_enqueue_style('bootstrap-css');
    //Font Awesome Icons
    wp_register_style('font-awesome', "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css", array(), false, 'all');
    wp_enqueue_style('font-awesome');
}

function my_theme_enqueue_scripts()
{
    wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js", array(), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');



function my_custom_new_menu()
{
    register_nav_menus(
        array(
            'my-custom-menu' => __('My Custom Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'my_custom_new_menu');
