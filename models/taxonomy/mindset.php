<?php

if ( ! function_exists( 'mindset_taxonomy' ) ) {

  function mindset_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Mindsets', 'Taxonomy General Name', 'roots' ),
      'singular_name'              => _x( 'Mindset', 'Taxonomy Singular Name', 'roots' ),
      'menu_name'                  => __( 'Mindsets', 'roots' ),
      'all_items'                  => __( 'All Mindset', 'roots' ),
      'parent_item'                => __( 'Parent Mindset', 'roots' ),
      'parent_item_colon'          => __( 'Parent Mindset:', 'roots' ),
      'new_item_name'              => __( 'New Item Mindset', 'roots' ),
      'add_new_item'               => __( 'Add New Mindset', 'roots' ),
      'edit_item'                  => __( 'Edit Mindset', 'roots' ),
      'update_item'                => __( 'Update Mindset', 'roots' ),
      'view_item'                  => __( 'View Mindset', 'roots' ),
      'separate_items_with_commas' => __( 'Separate Mindsets with commas', 'roots' ),
      'add_or_remove_items'        => __( 'Add or remove Mindsets', 'roots' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'roots' ),
      'popular_items'              => __( 'Popular Mindsets', 'roots' ),
      'search_items'               => __( 'Search Mindsets', 'roots' ),
      'not_found'                  => __( 'Not Found', 'roots' ),
    );
    $rewrite = array(
      'slug'                       => 'mindset',
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
      'graphql_single_name'        => 'Mindset',
      'graphql_plural_name'        => 'Mindsets',
    );
    register_taxonomy( 'mindset', array( 'tool' ), $args );

  }
  add_action( 'init', 'mindset_taxonomy', 0 );
}
