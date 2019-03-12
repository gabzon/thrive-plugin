<?php

if ( ! function_exists( 'phase_taxonomy' ) ) {
  function phase_taxonomy() {
     $labels = array(
        'name'                       => _x( 'Phases', 'Taxonomy General Name', 'roots' ),
        'singular_name'              => _x( 'Phase', 'Taxonomy Singular Name', 'roots' ),
        'menu_name'                  => __( 'Phase', 'roots' ),
        'all_items'                  => __( 'All Phases', 'roots' ),
        'parent_item'                => __( 'Parent Phase', 'roots' ),
        'parent_item_colon'          => __( 'Parent Phase:', 'roots' ),
        'new_item_name'              => __( 'New Phase Name', 'roots' ),
        'add_new_item'               => __( 'Add New Phase', 'roots' ),
        'edit_item'                  => __( 'Edit Phase', 'roots' ),
        'update_item'                => __( 'Update Phase', 'roots' ),
        'separate_items_with_commas' => __( 'Separate Phases with commas', 'roots' ),
        'search_items'               => __( 'Search Phases', 'roots' ),
        'add_or_remove_items'        => __( 'Add or remove Phases', 'roots' ),
        'choose_from_most_used'      => __( 'Choose from the most used Phases', 'roots' ),
        'not_found'                  => __( 'Not Found', 'roots' ),
     );
     $rewrite = array(
        'slug'                       => 'phase',
        'with_front'                 => true,
        'hierarchical'               => false,
     );
     $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,                      //Appears in the list of post type
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => $rewrite,
        'show_in_graphql'            => true,
        'graphql_single_name'        => 'Phase',
        'graphql_plural_name'        => 'Phases',
     );
     register_taxonomy( 'phase', array( 'tool' ), $args );
  }
  add_action( 'init', 'phase_taxonomy', 2);
}
