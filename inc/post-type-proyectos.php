<?php
if(!function_exists('custom_post_type_proyecto')){
	/**
	* Registers a new post type
	* @uses $wp_post_types Inserts new post type object into the list
	*
	* @param string  Post type key, must not exceed 20 characters
	* @param array|string  See optional args description above.
	* @return object|WP_Error the registered post type object, or an error object
	*/
	function custom_post_type_proyecto() {
	
		$labels = array(
			'name'                => __( 'Proyecto', 'brazosabiertos' ),
			'singular_name'       => __( 'Proyectos', 'brazosabiertos' ),
			'add_new'             => _x( 'Add New Proyecto', 'brazosabiertos', 'brazosabiertos' ),
			'add_new_item'        => __( 'Add New Proyecto', 'brazosabiertos' ),
			'edit_item'           => __( 'Edit Proyecto', 'brazosabiertos' ),
			'new_item'            => __( 'New Proyecto', 'brazosabiertos' ),
			'view_item'           => __( 'View Proyecto', 'brazosabiertos' ),
			'search_items'        => __( 'Search Proyectos', 'brazosabiertos' ),
			'not_found'           => __( 'No Proyectos found', 'brazosabiertos' ),
			'not_found_in_trash'  => __( 'No Proyectos found in Trash', 'brazosabiertos' ),
			'parent_item_colon'   => __( 'Proyecto:', 'brazosabiertos' ),
			'menu_name'           => __( 'Proyectos', 'brazosabiertos' ),
		);
	
		$args = array(
			'label'					=> __('Proyectos','brazosabiertos'),
			'labels'                   => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-networking',
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
	
		register_post_type( 'proyecto', $args );
	}
	
	add_action( 'init', 'custom_post_type_proyecto' );
}