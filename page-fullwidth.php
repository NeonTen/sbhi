<?php
/**
 * Template Name: Full width Page
 * The template for displaying Fullwidth page
 *
 * @package SBHI
 */

get_header();
?>

	<div class="main-wrapper">

		<div class="container flex">

			<main id="primary" class="site-main no-sidebar">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

		</div>

	</div>

<?php
get_footer();
