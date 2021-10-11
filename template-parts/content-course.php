<?php
/**
 * Template part for displaying Courses posts. Same structure for archive courses.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SBHI
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'course-list' ); ?>>

	<?php // sbhi_post_thumbnail( 'your-thumb-size' ); ?><!-- use this for thumbnail, when dynamic -->

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<img src="<?php echo get_template_directory_uri() . '/images/course-1.png'; // phpcs:ignore ?>" alt="">
	</a>

	<div class="wrapper">

		<?php // sbhi_post_title(); ?><!-- use this for post title, when dynamic -->
		<h2 class="entry-title">
			Course Name
			<div class="like"><?php get_svg( 'icons/heart' ); ?></div>
		</h2>

		<ul class="course-features">
			<li>
				<span class="selector">Details</span>
				<span class="value">5 Modules - 3 Hours</span>
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

		<div class="inline-buttons">
			<a href="#" class="button">
				Enroll
				<?php get_svg( 'icons/cart' ); ?>
			</a>
			<a href="#" class="button border-button">
				More
				<?php get_svg( 'icons/arrow' ); ?>
			</a>
		</div>
	</div><!-- .wrapper ends here -->
</article><!-- .courses-list ends here -->
