<?php

// MAIN STAGE POST TYPE
function custom_post_types()
{
    register_post_type('show', array(
        'rewrite' => array('slug' => 'shows'),
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Main Stage Shows',
            'singular_name' => 'Show',
            'add_new_item' => 'Add New Show',
            'edit_item' => 'Edit Show',
        )
    )
    );

// SECOND STAGE POST TYPE
    register_post_type('second_stage_show', array(
        'rewrite' => array('slug' => 'second_stage_shows'),
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'public' => true,
        'menu_icon' => 'dashicons-admin-customizer',
        'labels' => array(
            'name' => 'Second Stage Shows',
            'singular_name' => 'Second Stage Show',
            'add_new_item' => 'Add New Show',
            'edit_item' => 'Edit Show',
        )
    )
    );

// ABOUT POST TYPE
register_post_type('about_us', array(
    'rewrite' => array('slug' => 'about_us'),
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    'public' => true,
    'menu_icon' => 'dashicons-media-document',
    'labels' => array(
        'name' => 'About Us',
        'singular_name' => 'About Us',
        'edit_item' => 'About Us',
    )
)
);
}

add_action('init', 'custom_post_types');
?>