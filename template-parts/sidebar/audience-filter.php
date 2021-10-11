<?php
/**
 * The template part for displaying Audience filter in sidebar.
 *
 * @package SBHI
 */

?>

<section class="widget">

	<h3 class="widget-title"><?php esc_html_e( 'Audience', 'sbhi' ); ?></h3>

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
			<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
			<label for="sbhi-staff">SBHI Staff</label>
		</div>

		<div class="checkboxes-group">
			<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
			<label for="sbhi-staff">SBHI Service Users</label>
		</div>

		<div class="checkboxes-group">
			<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
			<label for="sbhi-staff">External Organisations</label>
		</div>
	</div>
</section>
