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
			?>
			<footer class="course-bottom">
				<a href="/courses" class="button">See all courses</a>
			</footer>

		</div>

	</div>

</section>
