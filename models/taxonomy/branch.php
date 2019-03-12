<?php
if ( ! function_exists( 'branch_taxonomy' ) ) {
  // Register Custom Taxonomy
  function branch_taxonomy() {

     $labels = array(
        'name'                       => _x( 'Branches', 'Taxonomy General Name', 'roots' ),
        'singular_name'              => _x( 'Branch', 'Taxonomy Singular Name', 'roots' ),
        'menu_name'                  => __( 'Branch', 'roots' ),
        'all_items'                  => __( 'All Branches', 'roots' ),
        'parent_item'                => __( 'Parent Branch', 'roots' ),
        'parent_item_colon'          => __( 'Parent Branch:', 'roots' ),
        'new_item_name'              => __( 'New Branch Name', 'roots' ),
        'add_new_item'               => __( 'Add New Branch', 'roots' ),
        'edit_item'                  => __( 'Edit Branch', 'roots' ),
        'update_item'                => __( 'Update Branch', 'roots' ),
        'separate_items_with_commas' => __( 'Separate branches with commas', 'roots' ),
        'search_items'               => __( 'Search Branches', 'roots' ),
        'add_or_remove_items'        => __( 'Add or remove Branches', 'roots' ),
        'choose_from_most_used'      => __( 'Choose from the most used branches', 'roots' ),
        'not_found'                  => __( 'Not Found', 'roots' ),
     );
     $rewrite = array(
        'slug'                       => 'branch',
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
        'graphql_single_name'        => 'Branch',
        'graphql_plural_name'        => 'Branches',
     );
     register_taxonomy( 'branch', array( 'tool' ), $args );
  }
  // Hook into the 'init' action
  add_action( 'init', 'branch_taxonomy', 1 );
}
