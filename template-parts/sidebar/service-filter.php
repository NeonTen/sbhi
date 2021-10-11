<?php
/**
 * The template part for displaying Staff filter in sidebar.
 *
 * @package SBHI
 */

?>

<section class="widget">

	<h3 class="widget-title"><?php esc_html_e( 'Service Users', 'sbhi' ); ?></h3>

	<?php
	/**
	 * Use this function to get all terms of any Taxanomy with checkboxes(same structure as below HTML).
	 * function define in inc/template-functions.php#L71
	 *
	 * Need to create Taxanomy first in inc/class-custom-post-types.php
	 */
	// get_term_filters( 'TaxanomyName', 'NameOfInputField' );
	?>

	<div class="filter-custom-taxonomy">
		<div class="checkboxes-group">
			<input type="checkbox" value="family-carers" name="course_service[]" class="tax-filter" id="family-carers" />
			<label for="family-carers">Family Carers</label>
		</div>

		<div class="checkboxes-group">
			<input type="checkbox" value="service-users" name="course_service[]" class="tax-filter" id="service-users" />
			<label for="service-users">Service Users</label>
		</div>
	</div>
</section>
