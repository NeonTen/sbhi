<?php
/**
 * Template Name: Home Page
 * The template for displaying HomePage
 *
 * @package SBHI
 */

get_header();
?>

	<div class="home-wrapper">

	<?php get_template_part( 'template-parts/home/featured', 'cta' ); ?>
	<?php get_template_part( 'template-parts/home/audience' ); ?>
	<?php get_template_part( 'template-parts/home/steps' ); ?>
	<?php get_template_part( 'template-parts/home/courses' ); ?>
	<?php get_template_part( 'template-parts/home/testimonials' ); ?>
	<?php get_template_part( 'template-parts/home/funders' ); ?>

	</div>

<?php
get_footer();
