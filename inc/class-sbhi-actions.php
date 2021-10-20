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

		// Tutor.
		add_action( 'tutor_course/loop/before_meta', [ $this, 'tutor_archive_custom_meta' ] );
		add_action( 'tutor_course/single/before/inner-wrap', [ $this, 'tutor_single_video_thumb' ] );
		add_action( 'tutor_course/single/enrolled/before/inner-wrap', [ $this, 'tutor_single_video_thumb' ] );

	}

	/**
	 * Page Title, Breadcrumb and Image.
	 */
	public function get_page_title_section() {

		if ( 'courses' !== get_post_type() && ! is_page_template( 'page-contact.php' ) ) {
			return;
		}

		?>
		<section class="header-after">
			<div class="container">

				<?php
				if ( get_field( 'breadcrumb_image', 'option' ) ) {
					echo '<div class="left-wrap"><img src="' . get_field( 'breadcrumb_image', 'option' ) . '"></div>'; // phpcs:ignore
				}
				?>
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
	 * Override the pagename (custom pagename).
	 */
	public function get_pagename() {

		$pagename = 'all';
		if ( is_post_type_archive( 'courses' ) ) {
			$pagename = 'All Courses';
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

	/**
	 * Tutor - Archive page meta
	 */
	public function tutor_archive_custom_meta() {

		if ( ! function_exists( 'tutor' ) ) {
			return;
		}
		?>
		<ul class="course-features">
			<li>
				<?php
				if ( get_field( 'course_details' ) ) {
					echo '<span class="selector">' . esc_html__( 'Details', 'sbhi' ) . '</span>';
					echo '<span class="value">' . get_field( 'course_details' ) . '</span>'; // phpcs:ignore
				}
				?>
			</li>
			<li>
				<span class="selector">Audience</span>
				<span class="value">SBHI Staff</span>
			</li>
			<li>
				<span class="selector"></span>
				<span class="value">Service Users</span>
			</li>
			<li>
				<span class="selector"></span>
				<span class="value">External Organizations</span>
			</li>
		</ul>
		<?php
	}

	/**
	 * Tutor - Single Video/Thumb
	 */
	public function tutor_single_video_thumb() {

		if ( ! function_exists( 'tutor' ) ) {
			return;
		}
		?>
		<div class="single-course-thumbnail mb-48">
			<?php
			if ( tutor_utils()->has_video_in_single() ) {
				tutor_course_video();
			} else {
				get_tutor_course_thumbnail();
			}
			?>
		</div>
		<?php
	}

}

// Init.
new SBHI_Actions();
