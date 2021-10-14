<?php
/**
 * ACF Options Panel
 *
 * @package SBHI
 */

defined( 'WPINC' ) || exit;

/**
 * Main Class.
 */
class ACF_Options_Panel {

	/**
	 * The Constructor
	 */
	public function __construct() {
		add_action( 'acf/init', [ $this, 'acf_op_init' ] );
	}

	/**
	 * ACF Options panel init.
	 */
	public function acf_op_init() {

		// Check function exists.
		if ( function_exists( 'acf_add_options_page' ) ) {

			// Add parent.
			$parent = acf_add_options_page(
				[
					'page_title' => __( 'SBHI Settings', 'sbhi' ),
					'menu_title' => __( 'SBHI Settings', 'sbhi' ),
					'icon_url'   => 'dashicons-admin-site-alt3',
					'position'   => '5.3',
				]
			);

			// Add sub page.
			$child = acf_add_options_page(
				[
					'page_title'  => __( 'General Settings', 'sbhi' ),
					'menu_title'  => __( 'General', 'sbhi' ),
					'parent_slug' => $parent['menu_slug'],
				]
			);

			// Add sub page.
			$child = acf_add_options_page(
				[
					'page_title'  => __( 'Homepage Settings', 'sbhi' ),
					'menu_title'  => __( 'Homepage', 'sbhi' ),
					'parent_slug' => $parent['menu_slug'],
				]
			);

			// Add sub page.
			$child = acf_add_options_page(
				[
					'page_title'  => __( 'Contact Us Settings', 'sbhi' ),
					'menu_title'  => __( 'Contact Us', 'sbhi' ),
					'parent_slug' => $parent['menu_slug'],
				]
			);
		}
	}

}

new ACF_Options_Panel();
