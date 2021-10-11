<?php
/**
 * The template-part for displaying User information in Dashboard page.
 *
 * @package SBHI
 */

$current_profile = wp_get_current_user();
?>

<div class="dashboard-user-info">
	<div class="author-image"><?php sbhi_author_avatar( '144' ); ?></div>
		<h3 class="author-name">
			<?php esc_html_e( 'Hello, ', 'sbhi' ); ?>
			<?php echo esc_html( $current_profile->display_name ); ?>
		</h3>
	</div>
</div><!-- .dashboard-user-info -->
