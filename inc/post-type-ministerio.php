<?php
if(!function_exists('custom_post_type_ministerio')){
	/**
	* Registers a new post type
	* @uses $wp_post_types Inserts new post type object into the list
	*
	* @param string  Post type key, must not exceed 20 characters
	* @param array|string  See optional args description above.
	* @return object|WP_Error the registered post type object, or an error object
	*/
	function custom_post_type_ministerio() {
	
		$labels = array(
			'name'                => __( 'Ministerio', 'brazosabiertos' ),
			'singular_name'       => __( 'Ministerios', 'brazosabiertos' ),
			'add_new'             => _x( 'Add New Ministerio', 'brazosabiertos', 'brazosabiertos' ),
			'add_new_item'        => __( 'Add New Ministerio', 'brazosabiertos' ),
			'edit_item'           => __( 'Edit Ministerio', 'brazosabiertos' ),
			'new_item'            => __( 'New Ministerio', 'brazosabiertos' ),
			'view_item'           => __( 'View Ministerio', 'brazosabiertos' ),
			'search_items'        => __( 'Search Ministerios', 'brazosabiertos' ),
			'not_found'           => __( 'No Ministerios found', 'brazosabiertos' ),
			'not_found_in_trash'  => __( 'No Ministerios found in Trash', 'brazosabiertos' ),
			'parent_item_colon'   => __( 'Ministerio:', 'brazosabiertos' ),
			'menu_name'           => __( 'Ministerios', 'brazosabiertos' ),
		);
	
		$args = array(
			'label'					=> __('Ministerios','brazosabiertos'),
			'labels'                   => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author', 'thumbnail', 'post-formats'
				)
		);
	
		register_post_type( 'ministerio', $args );
	}
	
	add_action( 'init', 'custom_post_type_ministerio' );
}