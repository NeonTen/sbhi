<?php
/**
 * Header Top Bar
 *
 * @package SBHI
 */

?>

<div class="top-bar">

	<div class="container">

		<div class="left-wrap">
			<a href="#"><?php esc_html_e( 'Email SBHI', 'sbhi' ); ?></a>
			<span><?php esc_html_e( '+353 (0)1 457 2329', 'sbhi' ); ?></span>
		</div>

		<div class="right-wrap">
			<div class="icon">
				<?php get_svg( 'icons/access' ); ?>
			</div>
			<a href="#" class="button border-button dark-bg">
				<?php
				esc_html_e( 'Donate', 'sbhi' );
				get_svg( 'icons/hand-heart' );
				?>
			</a>
		</div>

	</div>

</div>
