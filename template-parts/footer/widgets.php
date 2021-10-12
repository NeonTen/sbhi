<?php
/**
 * The template for displaying the footer widgets.
 *
 * @package SBHI
 */

?>

<div class="footer-widgets">
	<div class="container">

		<div class="f-widget text-center">
			<div class="f-logo">
				<a href="<?php esc_url( trailingslashit( home_url() ) ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/images/f-logo.png'; // phpcs:ignore ?>" alt="Footer logo">
				</a>
			</div>
			<div class="f-site-name">
				<a href="<?php esc_url( trailingslashit( home_url() ) ); ?>">
					<h2><?php esc_html_e( 'Spina Bifida Hydrocephalus Ireland', 'sbhi' ); ?></h2>
				</a>
			</div>
		</div>

		<div class="f-widget">
			<div class="about-text">
				<p>This will be text relating to the learning platform and what is wanted to be achieved with it.</p>
				<p>A short description of the platform and maybe an inbeded link to take the users to the main website, where they can find out more about the Spina Bifida and Hydrocephalus Ireland and their services.</p>
			</div>
		</div>

		<div class="f-widget">
			<h3 class="widget-title"><?php esc_html_e( 'Links', 'sbhi' ); ?></h3>
			<ul class="f-links">
				<li><a href="#">Home</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<a href="#" class="button">
				<?php
				esc_html_e( 'Donate', 'sbhi' );
				get_svg( 'icons/hand-heart' );
				?>
			</a>
		</div>

		<div class="f-widget">
			<h3 class="widget-title"><?php esc_html_e( 'Course Categories', 'sbhi' ); ?></h3>
			<ul class="f-links">
				<li><a href="#">SBHI Staff</a></li>
				<li><a href="#">SBHI Service Users</a></li>
				<li><a href="#">External Organisations</a></li>
			</ul>
			<a href="#" class="button border-button">
				<?php
				esc_html_e( 'SBHI.ie', 'sbhi' );
				get_svg( 'icons/globe' );
				?>
			</a>
		</div>

		<div class="f-widget">
			<h3 class="widget-title"><?php esc_html_e( 'Legal', 'sbhi' ); ?></h3>
			<ul class="f-links">
				<li><a href="#">STerms & Conditions</a></li>
				<li><a href="#">Cookie Policy</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
			<ul class="social-icons">
				<li><a class="facebook" href="#"><?php get_svg( 'icons/facebook' ); ?></a></li>
				<li><a class="instagram" href="#"><?php get_svg( 'icons/instagram' ); ?></a></li>
				<li><a class="linkedin" href="#"><?php get_svg( 'icons/linkedin' ); ?></a></li>
				<li><a class="twitter" href="#"><?php get_svg( 'icons/twitter' ); ?></a></li>
			</ul>
		</div>

	</div>
</div>
