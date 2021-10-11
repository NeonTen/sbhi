<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SBHI
 */

get_header();
?>

	<div class="courses-wrapper">

		<div class="container">

			<!-- Filters -->
			<aside class="widget-area">
				<div class="widget search-widget">
					<?php get_search_form(); ?>
				</div>
				<?php get_template_part( 'template-parts/sidebar/audience', 'filter' ); ?>
				<?php get_template_part( 'template-parts/sidebar/staff', 'filter' ); ?>
				<?php get_template_part( 'template-parts/sidebar/service', 'filter' ); ?>
			</aside>

			<main id="primary" class="site-main">

				<div class="courses-lists">

				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Course article post structure.
						*/
						get_template_part( 'template-parts/content', 'course' );
						get_template_part( 'template-parts/content', 'course' ); // Remove this.
						get_template_part( 'template-parts/content', 'course' ); // Remove this.
						get_template_part( 'template-parts/content', 'course' ); // Remove this.
						get_template_part( 'template-parts/content', 'course' ); // Remove this.
						get_template_part( 'template-parts/content', 'course' ); // Remove this.

					endwhile;

					?>
					<footer class="course-bottom">
						<a href="#" class="button">See all courses</a>
					</footer>
					<?php

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</div>

			</main><!-- #main -->

		</div>

	</div>

<?php
get_footer();
