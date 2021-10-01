<?php
/**
 * Header Login buttons
 *
 * @package SBHI
 */

echo '<div class="right-wrap">';

if ( is_user_logged_in() ) {

	$current_profile = wp_get_current_user();

	echo '<div class="login-wrap logged-in flex .align-center">';

		echo '<div class="icon pill blue">' . get_svg( 'icons/user', false ); //phpcs:ignore
		echo '<span class="ml-10">' . $current_profile->display_name . '</span>';
		echo '</div>';

	echo '</div>';

} else {
	echo '<div class="login-wrap logged-out">';

	printf(
		'<a href="%1$s" class="button border-button">%2$s%3$s</a>
		<a href="%1$s" class="button">%4$s%5$s</a>',
		esc_url( wp_login_url() ),
		esc_html__( 'Register', 'sbhi' ),
		get_svg( 'icons/pen', false ), //phpcs:ignore
		esc_html__( 'Sign in', 'sbhi' ),
		get_svg( 'icons/user', false ) //phpcs:ignore
	);

	echo '</div>';
}

echo '</div>';
