<?php
/**
 * All custom actions here.
 *
 * @package Firstaid
 */

defined( 'WPINC' ) || exit;

/**
 * Main class for Actions
 */
class SBHI_Actions {

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
		add_action( 'sbhi_after_header', [ $this, 'get_page_title_section' ], 10 );
	}

	/**
	 * Page Title, Breadcrumb and Image.
	 */
	public function get_page_title_section() {

		// if ( ! is_post_type_archive( 'courses' ) || ! is_page_template( 'page-contact.php' ) ) {
		// 	return;
		// }

		?>
		<section class="header-after">
			<div class="container">

				<div class="left-wrap">
					<img src="<?php echo get_template_directory_uri() . '/images/page-featured.png'; // phpcs:ignore ?>" alt="">
				</div>
				<div class="right-wrap">
					<?php $this->get_breadcrumbs(); ?>
					<?php $this->get_page_title(); ?>
				</div>

			</div>
		</section>
		<?php
	}

	/**
	 * Breadcrumbs.
	 */
	public function get_breadcrumbs() {
		?>
		<div class="breadcrumbs">
			<a href="#">Home</a>
			<div class="separator">//</div>
			<span>All Courses</span>
		</div>
		<?php
	}

	/**
	 * Return pagename.
	 */
	public function get_pagename() {

		$pagename = 'all';
		if ( is_post_type_archive( 'courses' ) ) {
			$pagename = 'courses';
		}

		return $pagename;
	}
	/**
	 * Page Title
	 */
	public function get_page_title() {

		$pagename = $this->get_pagename();
		$title    = '<h2 class="page-title">' . wp_title( '', false ) . '</h2>';

		if ( 'all' !== $pagename ) {
			$title = '<h2 class="page-title">' . $pagename . '</h2>';
		}
		echo wp_kses_post( $title );
	}

}

// Init.
new SBHI_Actions();
