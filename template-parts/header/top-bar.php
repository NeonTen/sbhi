<?php
/**
 * Header Top Bar
 *
 * @package SBHI
 */

$donate_url = get_field( 'donate_button_link', 'option' );
?>

<div class="top-bar">

	<div class="container">

		<div class="left-wrap">
			<?php
			if ( get_field( 'header_email', 'option' ) ) {
				printf(
					'<a href="mailto:%1$s">%2$s%1$s</a>',
					get_field( 'header_email', 'option' ), // phpcs:ignore
					get_svg( 'icons/mail', false ) // phpcs:ignore
				);
			}

			if ( get_field( 'header_number', 'option' ) ) {
				printf(
					'<a href="tel:%1$s">%2$s%1$s</a>',
					get_field( 'header_number', 'option' ), // phpcs:ignore
					get_svg( 'icons/phone', false ) // phpcs:ignore
				);
			}
			?>
		</div>

		<div class="right-wrap">
			<div id="accessibilityWidget" class="icon">
				<?php get_svg( 'icons/access' ); ?>
			</div>
			<?php
			if ( $donate_url ) {
				?>
				<a href="<?php echo esc_url( $donate_url ); ?>" class="donate-button button border-button orange-hover" target="_blank">
					<?php
					esc_html_e( 'Donate', 'sbhi' );
					get_svg( 'icons/hand-heart' );
					?>
				</a>
				<?php
			}
			?>
		</div>

	</div>

</div>
