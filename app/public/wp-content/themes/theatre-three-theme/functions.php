<?php
function enqueue_my_stylesheet() {
    wp_enqueue_style('my_theme_stylesheet',get_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'enqueue_my_stylesheet');

function site_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'site_features');

?>