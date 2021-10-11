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
			<li class="active-tab">Dashboard</li>
			<li>My Profile</li>
			<li>Certificates</li>
			<a href="<?php echo esc_url( wp_logout_url() ); ?>">Logout</a>
		</ul>

		<ul class="tabs-content">
			<li><?php get_template_part( 'template-parts/dashboard/content', 'dashboard' ); ?></li>
			<li><?php get_template_part( 'template-parts/dashboard/content', 'profile' ); ?></li>
			<li><?php get_template_part( 'template-parts/dashboard/content', 'certificates' ); ?></li>
		</ul>

	</div>
</div><!-- .dashboard-tabs-wrapper -->
