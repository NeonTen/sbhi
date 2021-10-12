<?php
/**
 * Template Name: Login Page
 * The template for displaying Login/Registration page
 *
 * @package SBHI
 */

get_header();
?>

	<div class="main-wrapper login-page no-sidebar">

		<div class="container">

			<main id="primary" class="site-main">

				<div class="wrapper box-with-shadow no-padding">
				<?php
				if ( is_user_logged_in() ) {
					echo '<p style="margin: 30px;">You are already logged in.</p>';
				} else {
					?>

					<div class="left-wrap">
						<?php echo do_shortcode( '[forminator_form id="20"]' ); ?>
						<hr />
						<p>Not account yet?</p>
						<p>Please <strong>Register</strong> to get access to free online courses</p>
					</div>
					<div class="right-wrap dark-bg mb-24">
						<?php echo do_shortcode( '[forminator_form id="21"]' ); ?>
					</div>

					<?php
				}
				?>
				</div>

			</main><!-- #main -->

		</div>

	</div>

<?php
get_footer();
