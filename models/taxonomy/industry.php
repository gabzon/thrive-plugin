<?php

if ( ! function_exists( 'industry_taxonomy' ) ){
  // Register Custom Taxonomy
  function industry_taxonomy() {

     $labels = array(
        'name'                       => _x( 'Industries', 'Taxonomy General Name', 'roots' ),
        'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'roots' ),
        'menu_name'                  => __( 'Industry', 'roots' ),
        'all_items'                  => __( 'All Industries', 'roots' ),
        'parent_item'                => __( 'Parent Industry', 'roots' ),
        'parent_item_colon'          => __( 'Parent Industry:', 'roots' ),
        'new_item_name'              => __( 'New Industry Name', 'roots' ),
        'add_new_item'               => __( 'Add New Industry', 'roots' ),
        'edit_item'                  => __( 'Edit Industry', 'roots' ),
        'update_item'                => __( 'Update Industry', 'roots' ),
        'separate_items_with_commas' => __( 'Separate industries with commas', 'roots' ),
        'search_items'               => __( 'Search Industries', 'roots' ),
        'add_or_remove_items'        => __( 'Add or remove industries', 'roots' ),
        'choose_from_most_used'      => __( 'Choose from the most used industries', 'roots' ),
        'not_found'                  => __( 'Not Found', 'roots' ),
     );
     $rewrite = array(
        'slug'                       => 'industry',
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
        'graphql_single_name'        => 'Industry',
        'graphql_plural_name'        => 'Industries',
     );
     register_taxonomy( 'industry', array( 'tool' ), $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'industry_taxonomy', 2);

}
