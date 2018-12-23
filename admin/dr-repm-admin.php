<?php

//Register the custom post type: property

//Register a function that will be executed duting the initialization phase every time the WordPress generates a page
add_action('init', 'dr_repm_property_post_type');

//implement the dr_repm_property_post_type
function dr_repm_property_post_type()
{
    //Wordpress Function for registering custom post type

//    array of arguments for registering post type
    $args = [
        'labels' => [
            'name' => 'Properties',
            'singular_name' => 'Property',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Property',
            'edit' => 'Edit',
            'edit_item' => 'Edit Property',
            'view' => 'View',
            'view_item' => 'View Property',
            'search_items' => 'Search Properties',
            'not_found' => 'No Property Listed',
            'not_found_in_trash' => 'No Property found in the Trash',
            'parent' => 'Parent Book Review'
        ],
        'public' => true,
        'menu_position' => 20,
        'supports' => [
            'title',
            'editor',
            'thumbnail'
        ],
        'taxonomies' => [],
        'has_archive' => true
    ];
    register_post_type('properties', $args);

//    ragister taxonomy: property type
    $tax_args = [
        'labels' => [
            'name' => 'Property Type',
            'add_new_item' => 'Add New Property Type',
            'new_item_name' => 'New Property Type Name'
        ],
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => false
    ];

    register_taxonomy('dp_repm_property_type', 'properties', $tax_args);
}


