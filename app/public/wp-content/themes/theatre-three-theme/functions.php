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

// creating a custom query to paginate pages
// !is_admin() is to make sure that only the front end is being effected.
// function adjust_queries($query)
// {
//     if (!is_admin() && is_post_type_archive('show') && $query->main_query()) {
//     $query->set('posts_per_page', '1');
//     }
// }
// add_action('pre_get_posts', 'adjust_queries');

// creating custom post type found in mu-plugins
?>