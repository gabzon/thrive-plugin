<?php
if ( ! function_exists( 'guide_taxonomy' ) ) {

    // Register Custom Taxonomy
    function guide_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Guides', 'Taxonomy General Name', 'roots' ),
            'singular_name'              => _x( 'Guide', 'Taxonomy Singular Name', 'roots' ),
            'menu_name'                  => __( 'Guides', 'roots' ),
            'all_items'                  => __( 'All Guide', 'roots' ),
            'parent_item'                => __( 'Parent Guide', 'roots' ),
            'parent_item_colon'          => __( 'Parent Guide:', 'roots' ),
            'new_item_name'              => __( 'New Item Guide', 'roots' ),
            'add_new_item'               => __( 'Add New Guide', 'roots' ),
            'edit_item'                  => __( 'Edit Guide', 'roots' ),
            'update_item'                => __( 'Update Guide', 'roots' ),
            'view_item'                  => __( 'View Guide', 'roots' ),
            'separate_items_with_commas' => __( 'Separate guides with commas', 'roots' ),
            'add_or_remove_items'        => __( 'Add or remove guides', 'roots' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'roots' ),
            'popular_items'              => __( 'Popular Guides', 'roots' ),
            'search_items'               => __( 'Search Guides', 'roots' ),
            'not_found'                  => __( 'Not Found', 'roots' ),
        );
        $rewrite = array(
            'slug'                       => 'guide',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'show_in_rest'               => true,
            'rewrite'                    => $rewrite,
            'show_in_graphql'            => true,
            'graphql_single_name'        => 'Guide',
            'graphql_plural_name'        => 'Guides',
        );
        register_taxonomy( 'guide', array( 'tool' ), $args );

    }
    add_action( 'init', 'guide_taxonomy', 0 );
}
