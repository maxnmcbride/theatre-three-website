<?php
function custom_post_types()
{

// MAIN STAGE POST TYPE

    register_post_type(
        'show',
        array(
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

    register_post_type(
        'second_stage_show',
        array(
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

// CHILDRENS THEATRE POST TYPE

    register_post_type(
        'childrens_show',
        array(
            'rewrite' => array('slug' => 'childrens_theatre_shows'),
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
            'public' => true,
            'menu_icon' => 'dashicons-buddicons-activity',
            'labels' => array(
                'name' => 'Childrens Theatre Shows',
                'singular_name' => 'Childrens Theatre Show',
                'add_new_item' => 'Add New Show',
                'edit_item' => 'Edit Show',
            )
        )
    );
}

add_action('init', 'custom_post_types');
?>