<?php
/**
 * The template for displaying the footer widget 3.
 *
 * @package SBHI
 */

?>

<div class="f-widget">

	<?php
	if ( get_field( 'footer_course_categories_title', 'option' ) ) {
		echo '<h3 class="widget-title">' . get_field( 'footer_course_categories_title', 'option' ) . '</h3>'; // phpcs:ignore
	}

	// Check Category lists exists.
	if ( have_rows( 'footer_category_lists', 'option' ) ) :

		echo '<ul class="f-links">';

		// Loop through rows.
		while ( have_rows( 'footer_category_lists', 'option' ) ) :
			the_row();

			// Load sub field value.
			$terms = get_sub_field( 'footer_categories', 'option' );

			foreach ( $terms as $term ) {
				$term_link = get_term_link( $term->term_id, $term->taxonomy );

				printf(
					'<li>
						<a href="%s">%s</a>
					</li>',
					esc_url( $term_link ),
					esc_html( $term->name )
				);
			}

		endwhile;

		echo '</ul>';

	endif;

	if ( get_field( 'footer_category_button_url', 'option' ) ) {
		?>
		<a href="<?php echo esc_url( get_field( 'footer_category_button_url', 'option' ) ); ?>" class="button border-button" target="_blank">
			<?php
			esc_html_e( 'SBHI.ie', 'sbhi' );
			get_svg( 'icons/globe' );
			?>
		</a>
		<?php
	}
	?>
</div>
