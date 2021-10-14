<?php
/**
 * The template for displaying the footer widget 3.
 *
 * @package SBHI
 */

$donate_url = get_field( 'donate_button_link', 'option' );
?>

<div class="f-widget">
	<?php
	if ( get_field( 'footer_links_1_title', 'option' ) ) {
		echo '<h3 class="widget-title">' . get_field( 'footer_links_1_title', 'option' ) . '</h3>'; // phpcs:ignore
	}
	// Check Footre link lists 1 exists.
	if ( have_rows( 'footer_link_lists_1', 'option' ) ) :

		echo '<ul class="f-links">';

		// Loop through rows.
		while ( have_rows( 'footer_link_lists_1', 'option' ) ) :
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

	if ( $donate_url ) {
		?>
		<a href="<?php echo esc_url( $donate_url ); ?>" class="button">
			<?php
			esc_html_e( 'Donate', 'sbhi' );
			get_svg( 'icons/hand-heart' );
			?>
		</a>
		<?php
	}
	?>
</div>
