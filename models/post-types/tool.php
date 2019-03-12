<?php

if ( ! function_exists('tool_post_type') ) {
  function tool_post_type() {
    $labels = array(
  		'name'                => _x( 'Tools', 'Post Type General Name', 'roots' ),
  		'singular_name'       => _x( 'Tool', 'Post Type Singular Name', 'roots' ),
  		'menu_name'           => __( 'Tools', 'roots' ),
  		'parent_item_colon'   => __( 'Parent tool:', 'roots' ),
  		'all_items'           => __( 'All Tools', 'roots' ),
  		'view_item'           => __( 'View Tool', 'roots' ),
  		'add_new_item'        => __( 'Add New Tool', 'roots' ),
  		'add_new'             => __( 'Add New', 'roots' ),
  		'edit_item'           => __( 'Edit tool', 'roots'),
  		'update_item'         => __( 'Update tool', 'roots' ),
  		'search_items'        => __( 'Search tool', 'roots' ),
  		'not_found'           => __( 'Not found', 'roots' ),
  		'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
  	);
  	$rewrite = array(
  		'slug'                => 'tool',
  		'with_front'          => true,
  		'pages'               => true,
  		'feeds'               => true,
  	);
  	$args = array(
  		'label'               => __( 'tool', 'roots' ),
  		'description'         => __( 'Innovation and Creativity tools', 'roots' ),
  		'labels'              => $labels,
  		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes' ),
  		'taxonomies'          => array( 'category', 'post_tag', 'industry', 'role', ' branch', 'attitude', 'question'),
  		'hierarchical'        => true,
      'show_in_graphql' 		=> true,
      'graphql_single_name' => 'Tool',
      'graphql_plural_name' => 'Tools',
  		'public'              => true,
      'show_in_rest'        => true,
  		'show_ui'             => true,
  		'show_in_menu'        => true,
  		'show_in_nav_menus'   => true,
  		'show_in_admin_bar'   => true,
  		'menu_position'       => 5,
  		'menu_icon'           => 'dashicons-hammer',
  		'can_export'          => true,
  		'has_archive'         => true,
  		'exclude_from_search' => false,
  		'publicly_queryable'  => true,
  		'rewrite'             => $rewrite,
  		'capability_type'     => 'page',
  	);
  	register_post_type( 'tool', $args );
    add_action( 'after_switch_theme', 'flush_rewrite_rules' );
  }
  add_action('init', 'tool_post_type');
}
