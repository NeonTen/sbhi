<?php
/**
 * Template Name: Dashboard Page
 * The template for displaying user dashboard
 *
 * @package SBHI
 */

get_header();
?>

	<div class="dashboard-wrapper">

		<div class="container dashboard-container">
			<?php
			if ( ! is_user_logged_in() ) {
				echo '<p>Please <a href="' . esc_url( wp_login_url() ) . '">login</a>.</p>';
			} else {
				get_template_part( 'template-parts/dashboard/user', 'info' );
				get_template_part( 'template-parts/dashboard/dashboard', 'tabs' );
			}
			?>
		</div>

	</div>

<?php
get_footer();
