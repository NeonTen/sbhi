<?php
/**
 * The template-part for displaying Google Map in Contact page.
 *
 * @package SBHI
 */

if ( get_field( 'google_map_embed_code', 'option' ) ) {
	echo '<div class="google-map">';
	echo get_field( 'google_map_embed_code', 'option' ); // phpcs:ignore
	echo '</div>';
}

