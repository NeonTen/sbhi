<?php
/**
 * The template part for displaying Courses in homepage.
 *
 * @package SBHI
 */

?>

<section class="courses-wrapper">

	<div class="container">

		<h2 class="page-title text-center">Courses</h2>

		<div class="courses-lists">

			<?php
			echo do_shortcode( '[tutor_course order="desc" count="6" column_per_row="1" course_filter="off" show_paginaton="on"]' );
			/*
			* Include the Course article post structure.
			*/
			// get_template_part( 'template-parts/content', 'course' );
			// get_template_part( 'template-parts/content', 'course' ); // Remove this when dynamic.
			// get_template_part( 'template-parts/content', 'course' ); // Remove this when dynamic.
			// get_template_part( 'template-parts/content', 'course' ); // Remove this when dynamic.
			// get_template_part( 'template-parts/content', 'course' ); // Remove this when dynamic.
			// get_template_part( 'template-parts/content', 'course' ); // Remove this when dynamic.

			?>
			<footer class="course-bottom">
				<a href="#" class="button">See all courses</a>
			</footer>

		</div>

	</div>

</section>
