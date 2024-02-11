<?php
// this gets the styling
function enqueue_my_stylesheet()
{
    wp_enqueue_style('my_theme_stylesheet', get_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'enqueue_my_stylesheet');

// this function will pull in the title dynamically for the heading in the browser tab
function site_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'site_features');

// Enqueue your scripts here
function enqueue_custom_scripts()
{
    // Enqueue jQuery that comes with WordPress
    wp_enqueue_script('jquery');

    // Assuming other custom scripts are correctly enqueued
    wp_enqueue_script('custom-navigation', get_template_directory_uri() . '/js/custom-navigation.js', array('jquery'), null, true);
    wp_enqueue_script('custom-submenu', get_template_directory_uri() . '/js/custom-submenu.js', array('jquery'), null, true);

    // Enqueue the script for the hamburger menu functionality
    wp_enqueue_script('hamburger-nav', get_template_directory_uri() . '/js/hamburger-nav.js', array('jquery'), null, true);
}

?>