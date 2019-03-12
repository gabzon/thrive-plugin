<?php

if ( ! function_exists( 'resource_taxonomy' ) ) {

  // Register Custom Taxonomy
  function resource_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Resources', 'Taxonomy General Name', 'roots' ),
      'singular_name'              => _x( 'Resource', 'Taxonomy Singular Name', 'roots' ),
      'menu_name'                  => __( 'Resources', 'roots' ),
      'all_items'                  => __( 'All Resources', 'roots' ),
      'parent_item'                => __( 'Parent Resource', 'roots' ),
      'parent_item_colon'          => __( 'Parent Resource:', 'roots' ),
      'new_item_name'              => __( 'New Resource Name', 'roots' ),
      'add_new_item'               => __( 'Add New Resource', 'roots' ),
      'edit_item'                  => __( 'Edit Resource', 'roots' ),
      'update_item'                => __( 'Update Resource', 'roots' ),
      'separate_items_with_commas' => __( 'Separate resources with commas', 'roots' ),
      'search_items'               => __( 'Search resources', 'roots' ),
      'add_or_remove_items'        => __( 'Add or remove resources', 'roots' ),
      'choose_from_most_used'      => __( 'Choose from the most used resources', 'roots' ),
      'not_found'                  => __( 'Not Found', 'roots' ),
    );
    $rewrite = array(
      'slug'                       => 'resource',
      'with_front'                 => true,
      'hierarchical'               => false,
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => false,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
      'rewrite'                    => $rewrite,
      'show_in_graphql'            => true,
      'graphql_single_name'        => 'Resource',
      'graphql_plural_name'        => 'Resources',
    );
    register_taxonomy( 'resource', array( 'tool' ), $args );
  }

  // Hook into the 'init' action
  add_action( 'init', 'resource_taxonomy', 6 );

}
