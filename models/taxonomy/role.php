<?php
if ( ! function_exists( 'role_taxonomy' ) ) {
	// Register Custom Taxonomy
	function role_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Roles', 'Taxonomy General Name', 'roots' ),
			'singular_name'              => _x( 'Role', 'Taxonomy Singular Name', 'roots' ),
			'menu_name'                  => __( 'Roles', 'roots' ),
			'all_items'                  => __( 'All Roles', 'roots' ),
			'parent_item'                => __( 'Parent Role', 'roots' ),
			'parent_item_colon'          => __( 'Parent Role:', 'roots' ),
			'new_item_name'              => __( 'New Role Name', 'roots' ),
			'add_new_item'               => __( 'Add New Role', 'roots' ),
			'edit_item'                  => __( 'Edit Role', 'roots' ),
			'update_item'                => __( 'Update Role', 'roots' ),
			'separate_items_with_commas' => __( 'Separate roles with commas', 'roots' ),
			'search_items'               => __( 'Search Roles', 'roots' ),
			'add_or_remove_items'        => __( 'Add or remove Roles', 'roots' ),
			'choose_from_most_used'      => __( 'Choose from the most used roles', 'roots' ),
			'not_found'                  => __( 'Not Found', 'roots' ),
		);
		$rewrite = array(
			'slug'                       => 'role',
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
			'graphql_single_name'        => 'Role',
			'graphql_plural_name'        => 'Roles',
		);
		register_taxonomy( 'role', array( 'tool' ), $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'role_taxonomy', 3 );

}
