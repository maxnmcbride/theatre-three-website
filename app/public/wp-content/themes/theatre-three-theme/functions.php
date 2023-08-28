<?php
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

// creating custom post type found in mu-plugins

add_action('init', 'custom_post_types');


// chat gpt logic to try and get the explore the theater heading to scroll
// function enqueue_custom_scripts() {
//     wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery'), null, true);
//   }
//   add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
?>