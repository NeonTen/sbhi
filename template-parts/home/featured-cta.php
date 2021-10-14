<?php
/**
 * The template part for displaying featured call to action in homepage.
 *
 * @package SBHI
 */

$button_url = get_field( 'featured_button_link', 'option' );
?>

<section class="featured-cta">
	<div class="container">

	<?php
	if ( get_field( 'featured_image', 'option' ) ) {
		echo '<div class="left-wrap">';
		echo '<img src="' . get_field( 'featured_image', 'option' ) . '">'; // phpcs:ignore
		echo '</div>';
	}
	?>

	<div class="right-wrap">

		<?php
		if ( get_field( 'featured_title', 'option' ) ) {
			echo '<h2 class="big-title">' . get_field( 'featured_title', 'option' ) . '</h2>'; // phpcs:ignore
		}

		if ( get_field( 'featured_content', 'option' ) ) {
			echo '<p class="entry-content">' . get_field( 'featured_content', 'option' ) . '</p>'; // phpcs:ignore
		}

		if ( $button_url ) {
			printf(
				'<a href="%s" class="button shadow">%s</a>',
				esc_html( $button_url ),
				esc_html__( 'See our Courses', 'sbhi' )
			);
		}
		?>
	</div>

	</div>
</section>
