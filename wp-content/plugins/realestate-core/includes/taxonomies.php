<?php

defined( 'ABSPATH' ) || exit;

/**
 * Register property taxonomies.
 */
function re_register_property_taxonomies() {

    // Property Type taxonomy.
    register_taxonomy( 'property_type', [ 'property' ], [
        'labels' => [
            'name'              => __( 'Property Types', 'realestate-core' ),
            'singular_name'     => __( 'Property Type', 'realestate-core' ),
            'search_items'      => __( 'Search Property Types', 'realestate-core' ),
            'all_items'         => __( 'All Property Types', 'realestate-core' ),
            'parent_item'       => __( 'Parent Property Type', 'realestate-core' ),
            'parent_item_colon' => __( 'Parent Property Type:', 'realestate-core' ),
            'edit_item'         => __( 'Edit Property Type', 'realestate-core' ),
            'add_new_item'      => __( 'Add New Property Type', 'realestate-core' ),
            'menu_name'         => __( 'Property Types', 'realestate-core' ),
        ],
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => [
            'slug'       => 'property-type',
            'with_front' => false,
        ],
    ] );

    // Location taxonomy.
    register_taxonomy( 'property_location', [ 'property' ], [
        'labels' => [
            'name'              => __( 'Locations', 'realestate-core' ),
            'singular_name'     => __( 'Location', 'realestate-core' ),
            'search_items'      => __( 'Search Locations', 'realestate-core' ),
            'all_items'         => __( 'All Locations', 'realestate-core' ),
            'parent_item'       => __( 'Parent Location', 'realestate-core' ),
            'parent_item_colon' => __( 'Parent Location:', 'realestate-core' ),
            'edit_item'         => __( 'Edit Location', 'realestate-core' ),
            'add_new_item'      => __( 'Add New Location', 'realestate-core' ),
            'menu_name'         => __( 'Locations', 'realestate-core' ),
        ],
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => [
            'slug'       => 'property-location',
            'with_front' => false,
        ],
    ] );
}

add_action( 'init', 're_register_property_taxonomies' );
