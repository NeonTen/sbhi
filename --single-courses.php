<?php
/**
 * The template for displaying all single courses
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SBHI
 */

get_header();
?>

	<div class="main-wrapper single-wrap">

		<div class="container flex">

			<main id="primary" class="site-main">

				<!-- Video -->
				<?php get_template_part( 'template-parts/single/course', 'video' ); ?>

				<?php
				/**
				 * Tabs
				 *
				 * Check for both logged in and logged out design's
				 */
				get_template_part( 'template-parts/single/course', 'tabs' );
				?>

			</main><!-- #main -->

			<?php
			/**
			 * Sidebar
			 *
			 * Check for both logged in and logged out design's
			 */
			get_template_part( 'template-parts/sidebar/course', 'info' );
			?>

		</div>

	</div>

<?php
get_footer();
