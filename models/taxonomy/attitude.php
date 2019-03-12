<?php

if ( ! function_exists( 'attitude_taxonomy' ) ) {
  // Register Custom Taxonomy
  function attitude_taxonomy() {
     $labels = array(
        'name'                       => _x( 'Attitudes', 'Taxonomy General Name', 'roots' ),
        'singular_name'              => _x( 'Attitude', 'Taxonomy Singular Name', 'roots' ),
        'menu_name'                  => __( 'Attitude', 'roots' ),
        'all_items'                  => __( 'All Attitudes', 'roots' ),
        'parent_item'                => __( 'Parent Attitude', 'roots' ),
        'parent_item_colon'          => __( 'Parent Attitude:', 'roots' ),
        'new_item_name'              => __( 'New Attitude Name', 'roots' ),
        'add_new_item'               => __( 'Add New Attitude', 'roots' ),
        'edit_item'                  => __( 'Edit Attitude', 'roots' ),
        'update_item'                => __( 'Update Attitude', 'roots' ),
        'separate_items_with_commas' => __( 'Separate attitudes with commas', 'roots' ),
        'search_items'               => __( 'Search attitudes', 'roots' ),
        'add_or_remove_items'        => __( 'Add or remove attitudes', 'roots' ),
        'choose_from_most_used'      => __( 'Choose from the most used attitudes', 'roots' ),
        'not_found'                  => __( 'Not Found', 'roots' ),
     );
     $rewrite = array(
        'slug'                       => 'attitude',
        'with_front'                 => true,
        'hierarchical'               => false,
     );
     $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => $rewrite,
        'show_in_graphql'            => true,
        'graphql_single_name'        => 'Attitude',
        'graphql_plural_name'        => 'Attitudes',
     );
     register_taxonomy( 'attitude', array( 'tool' ), $args );

  }
  // Hook into the 'init' action
  add_action( 'init', 'attitude_taxonomy', 4 );
}
