<?php
/**
 * The template-part for displaying Tabs in Dashboard page.
 *
 * @package SBHI
 */

?>

<div class="dashboard-tabs-wrapper">

	<div class="container dashboard-container">

		<ul class="tabs">
			<li class="active-tab"><?php get_svg( 'icons/dashboard' ); ?>Dashboard</li>
			<li><?php get_svg( 'icons/user-round' ); ?>My Profile</li>
			<li><?php get_svg( 'icons/file' ); ?>Certificates</li>
			<a href="<?php echo esc_url( wp_logout_url() ); ?>"><?php get_svg( 'icons/logout' ); ?>Logout</a>
		</ul>

		<ul class="tabs-content">
			<li><?php get_template_part( 'template-parts/dashboard/content', 'dashboard' ); ?></li>
			<li><?php get_template_part( 'template-parts/dashboard/content', 'profile' ); ?></li>
			<li><?php get_template_part( 'template-parts/dashboard/content', 'certificates' ); ?></li>
		</ul>

	</div>
</div><!-- .dashboard-tabs-wrapper -->
