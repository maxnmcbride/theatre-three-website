<?php

function custom_post_types(){
    register_post_type('show', array(
        'rewrite' => array('slug' => 'shows'),
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Shows',
            'singular_name' => 'Show',
            'add_new_item' => 'Add New Show',
            'edit_item' => 'Edit Show',
        )
    ));
}

add_action('init', 'custom_post_types');
?>