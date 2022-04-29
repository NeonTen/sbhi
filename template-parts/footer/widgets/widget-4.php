<?php
/**
 * The template for displaying the footer widget 4.
 *
 * @package SBHI
 */

$facebook_url  = get_field( 'facebook_url', 'option' );
$instagram_url = get_field( 'instagram_url', 'option' );
$linkedin_url  = get_field( 'linkedin_url', 'option' );
$twitter_url   = get_field( 'twitter_url', 'option' );
?>

<div class="f-widget">
	<?php

	if ( get_field( 'footer_links_2_title', 'option' ) ) {
		echo '<h3 class="widget-title">' . get_field( 'footer_links_2_title', 'option' ) . '</h3>'; // phpcs:ignore
	}

	// Check Footer link lists 2 exists.
	if ( have_rows( 'footer_link_lists_2', 'option' ) ) :

		echo '<ul class="f-links">';

		// Loop through rows.
		while ( have_rows( 'footer_link_lists_2', 'option' ) ) :
			the_row();

			// Load sub field value.
			$link = get_sub_field( 'footer_link', 'option' );

			printf(
				'<li>
					<a href="%s">%s</a>
				</li>',
				esc_url( $link['url'] ),
				esc_html( $link['title'] )
			);

		endwhile;

		echo '</ul>';

	endif;

	?>
	<ul class="social-icons">
		<?php
		if ( $facebook_url ) {
			printf(
				'<li><a class="facebook" href="%s" target="_blank">%s</a></li>',
				esc_url( $facebook_url ),
				get_svg( 'icons/social/facebook', false ) // phpcs:ignore
			);
		}
		if ( $instagram_url ) {
			printf(
				'<li><a class="instagram" href="%s" target="_blank">%s</a></li>',
				esc_url( $instagram_url ),
				get_svg( 'icons/social/instagram', false ) // phpcs:ignore
			);
		}
		if ( $linkedin_url ) {
			printf(
				'<li><a class="linkedin" href="%s" target="_blank">%s</a></li>',
				esc_url( $linkedin_url ),
				get_svg( 'icons/social/linkedin', false ) // phpcs:ignore
			);
		}
		if ( $twitter_url ) {
			printf(
				'<li><a class="twitter" href="%s" target="_blank">%s</a></li>',
				esc_url( $twitter_url ),
				get_svg( 'icons/social/twitter', false ) // phpcs:ignore
			);
		}
		?>
	</ul>
</div>
