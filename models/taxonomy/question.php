<?php
if ( ! function_exists( 'question_taxonomy' ) ) {
	// Register Custom Taxonomy
	function question_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Questions', 'Taxonomy General Name', 'roots' ),
			'singular_name'              => _x( 'Question', 'Taxonomy Singular Name', 'roots' ),
			'menu_name'                  => __( 'Question', 'roots' ),
			'all_items'                  => __( 'All Questions', 'roots' ),
			'parent_item'                => __( 'Parent Question', 'roots' ),
			'parent_item_colon'          => __( 'Parent Question:', 'roots' ),
			'new_item_name'              => __( 'New Question', 'roots' ),
			'add_new_item'               => __( 'Add New Question', 'roots' ),
			'edit_item'                  => __( 'Edit Question', 'roots' ),
			'update_item'                => __( 'Update Question', 'roots' ),
			'separate_items_with_commas' => __( 'Separate questions with commas', 'roots' ),
			'search_items'               => __( 'Search Questions', 'roots' ),
			'add_or_remove_items'        => __( 'Add or remove questions', 'roots' ),
			'choose_from_most_used'      => __( 'Choose from the most used questions', 'roots' ),
			'not_found'                  => __( 'Not Found', 'roots' ),
		);
		$rewrite = array(
			'slug'                       => 'question',
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
			'graphql_single_name'        => 'Question',
			'graphql_plural_name'        => 'Questions',
		);
		register_taxonomy( 'question', array( 'tool' ), $args );

	}
	// Hook into the 'init' action
	add_action( 'init', 'question_taxonomy', 5 );
}
