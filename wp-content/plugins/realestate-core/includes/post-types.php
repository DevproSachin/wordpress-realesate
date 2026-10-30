

<?php

defined( 'ABSPATH' ) || exit;

/**
 * Register the Property custom post type.
 */
function re_register_property_post_type() {

    $labels = [
        'name'                  => __( 'Properties', 'realestate-core' ),
        'singular_name'         => __( 'Property', 'realestate-core' ),
        'menu_name'             => __( 'Properties', 'realestate-core' ),
        'name_admin_bar'        => __( 'Property', 'realestate-core' ),
        'add_new'               => __( 'Add New', 'realestate-core' ),
        'add_new_item'          => __( 'Onboard New Property', 'realestate-core' ),
        'edit_item'             => __( 'Edit Property', 'realestate-core' ),
        'new_item'              => __( 'New Property', 'realestate-core' ),
        'view_item'             => __( 'View Property', 'realestate-core' ),
        'search_items'          => __( 'Search Properties', 'realestate-core' ),
        'not_found'             => __( 'No properties found.', 'realestate-core' ),
        'not_found_in_trash'    => __( 'No properties found in Trash.', 'realestate-core' ),
        'all_items'             => __( 'All Properties', 'realestate-core' ),
        'archives'              => __( 'Property Archives', 'realestate-core' ),
        'featured_image'        => __( 'Property Featured Image', 'realestate-core' ),
        'set_featured_image'    => __( 'Set property image', 'realestate-core' ),
        'remove_featured_image' => __( 'Remove property image', 'realestate-core' ),
        'use_featured_image'    => __( 'Use as property image', 'realestate-core' ),
    ];

    register_post_type( 'property', [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'rewrite'            => [
            'slug'       => 'buy-property',
            'with_front' => false,
        ],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-admin-home',
        'supports'           => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ],
    ] );
}

add_action( 'init', 're_register_property_post_type' );
