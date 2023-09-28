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

    // ACTING CLASSES

    register_post_type(
        'acting_class',
        array(
            'rewrite' => array('slug' => 'acting_classes'),
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'labels' => array(
                'name' => 'Acting Classes',
                'singular_name' => 'Acting Class',
                'add_new_item' => 'Add New Class',
                'edit_item' => 'Edit Class',
            )
        )
    );

// AUDTIONS

register_post_type(
    'auditions',
    array(
        'rewrite' => array('slug' => 'auditions'),
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'public' => true,
        'menu_icon' => 'dashicons-megaphone',
        'labels' => array(
            'name' => 'Auditions',
            'singular_name' => 'Audition',
            'add_new_item' => 'Add Audition',
            'edit_item' => 'Edit Audition',
        )
    )
);

}

add_action('init', 'custom_post_types');
?>