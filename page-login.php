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
						<?php
						if ( get_field( 'login_form_shortcode' ) ) {
							echo do_shortcode( get_field( 'login_form_shortcode' ) );
						}
						?>
						<hr />
						<p>Not account yet?</p>
						<p>Please <strong>Register</strong> to get access to free online courses</p>
					</div>
					<div class="right-wrap dark-bg">
						<?php
						if ( get_field( 'registration_form_shortcode' ) ) {
							echo do_shortcode( get_field( 'registration_form_shortcode' ) );
						}
						?>
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
