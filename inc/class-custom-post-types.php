<?php
/**
 * Register Custom Post Types
 *
 * @package SBHI
 */

defined( 'WPINC' ) || exit;

/**
 * Main class of Custom Post Types
 */
class Custom_Post_Types {

	/**
	 * The Construct
	 */
	public function __construct() {
		$this->hooks();
	}

	/**
	 * Hooks and Filters.
	 */
	public function hooks() {
		add_action( 'init', [ $this, 'courses_custom_post_type' ] );
		add_action( 'init', [ $this, 'teachers_custom_taxonomy' ] );
	}

	/**
	 * Courses CPT
	 */
	public function courses_custom_post_type() {

		// Set UI labels for Custom Post Type.
		$labels = [
			'name'               => _x( 'Courses', 'Post Type General Name', 'sbhi' ),
			'singular_name'      => _x( 'Course', 'Post Type Singular Name', 'sbhi' ),
			'menu_name'          => __( 'Courses', 'sbhi' ),
			'parent_item_colon'  => __( 'Parent Course', 'sbhi' ),
			'all_items'          => __( 'All Courses', 'sbhi' ),
			'view_item'          => __( 'View Course', 'sbhi' ),
			'add_new_item'       => __( 'Add New Course', 'sbhi' ),
			'add_new'            => __( 'Add New', 'sbhi' ),
			'edit_item'          => __( 'Edit Course', 'sbhi' ),
			'update_item'        => __( 'Update Course', 'sbhi' ),
			'search_items'       => __( 'Search Course', 'sbhi' ),
			'not_found'          => __( 'Not Found', 'sbhi' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'sbhi' ),
		];

		// Set other options for Custom Post Type.
		$args = [
			'label'               => __( 'courses', 'sbhi' ),
			'menu_icon'           => 'dashicons-index-card',
			'description'         => __( 'Course posts', 'sbhi' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor.
			'supports'            => [ 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ],
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => [ 'teacher' ],
			/**
			 * A hierarchical CPT is like Pages and can have
			 * Parent and child items. A non-hierarchical CPT
			 * is like Posts.
			 */
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,

		];

		// Registering your Custom Post Type.
		register_post_type( 'courses', $args );

	}

	/**
	 * Create a custom taxonomy named 'Teachers' for Sermons CPT.
	 */
	public function teachers_custom_taxonomy() {

		$labels = [
			'name'              => _x( 'Teachers', 'taxonomy general name', 'sbhi' ),
			'singular_name'     => _x( 'Teacher', 'taxonomy singular name', 'sbhi' ),
			'search_items'      => __( 'Search Teachers', 'sbhi' ),
			'all_items'         => __( 'All Teachers', 'sbhi' ),
			'parent_item'       => __( 'Parent Teacher', 'sbhi' ),
			'parent_item_colon' => __( 'Parent Teacher: ', 'sbhi' ),
			'edit_item'         => __( 'Edit Teacher', 'sbhi' ), 
			'update_item'       => __( 'Update Teacher', 'sbhi' ),
			'add_new_item'      => __( 'Add New Teacher', 'sbhi' ),
			'new_item_name'     => __( 'New Teacher Name', 'sbhi' ),
			'menu_name'         => __( 'Teachers', 'sbhi' ),
		];

		register_taxonomy( 'teachers', [ 'courses' ], [
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug' => 'teacher' ],
			'show_in_rest'      => true,
		] );
	}

}

/**
 * Init
 */
new Custom_Post_Types();
