<?php

if ( ! function_exists('source_post_type') ) {
	// Register Custom Post Type
	function source_post_type() {

		$labels = array(
			'name'                => _x( 'Sources', 'Post Type General Name', 'roots' ),
			'singular_name'       => _x( 'Source', 'Post Type Singular Name', 'roots' ),
			'menu_name'           => __( 'Sources', 'roots' ),
			'parent_item_colon'   => __( 'Parent Source:', 'roots' ),
			'all_items'           => __( 'All Sources', 'roots' ),
			'view_item'           => __( 'View Source', 'roots' ),
			'add_new_item'        => __( 'Add New Source', 'roots' ),
			'add_new'             => __( 'Add New', 'roots' ),
			'edit_item'           => __( 'Edit Source', 'roots' ),
			'update_item'         => __( 'Update Source', 'roots' ),
			'search_items'        => __( 'Search Source', 'roots' ),
			'not_found'           => __( 'Not found', 'roots' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'roots' ),
		);
		$rewrite = array(
			'slug'                => 'source',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		$args = array(
			'label'               => __( 'source', 'roots' ),
			'description'         => __( 'Tool sources from R&D', 'roots' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt'),
			'taxonomies'          => array( 'category', 'post_tag', ' branch', ' industry' ),
			'hierarchical'        => true,
			'show_in_graphql' 		=> true,
			'graphql_single_name' => 'Source',
			'graphql_plural_name' => 'Sources',
			'public'              => true,
			'show_in_rest'        => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 7,
			'menu_icon'           => 'dashicons-book-alt',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);
		register_post_type( 'source', $args );
		add_action( 'after_switch_theme', 'flush_rewrite_rules' );
	}
	add_action( 'init', 'source_post_type', 1 );
}
