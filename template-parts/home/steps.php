<?php
/**
 * The template part for displaying Steps in homepage.
 *
 * @package SBHI
 */

?>

<section class="steps-wrapper dark">

	<?php
	// Check Steps lists exists.
	if ( have_rows( 'steps_lists', 'option' ) ) :

		echo '<ul class="steps-lists">';

		// Loop through rows.
		while ( have_rows( 'steps_lists', 'option' ) ) :
			the_row();

			// Load sub field value.
			$icon       = get_sub_field( 'steps_icon', 'option' );
			$hover_icon = get_sub_field( 'steps_hover_icon', 'option' );
			$title      = get_sub_field( 'steps_title', 'option' );
			$text       = get_sub_field( 'steps_content', 'option' );

			printf(
				'<li class="steps-list">
					<div class="icon">%1$s</div>
					<div class="icon hover">%2$s</div>
					<h2 class="entry-title">%3$s</h2>
					<p class="entry-content text-center">%4$s</p>
				</li>',
				file_get_contents( $icon ), // phpcs:ignore
				file_get_contents( $hover_icon ), // phpcs:ignore
				esc_html( $title ),
				esc_html( $text )
			);

		endwhile;

		echo '</ul>';

	endif;
	?>

</section>
