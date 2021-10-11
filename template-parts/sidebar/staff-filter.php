<?php
/**
 * The template part for displaying Staff filter in sidebar.
 *
 * @package SBHI
 */

?>

<section class="widget">

	<h3 class="widget-title"><?php esc_html_e( 'SBHI Staff', 'sbhi' ); ?></h3>

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
			<input type="checkbox" value="staff" name="course_staff[]" class="tax-filter" id="staff" />
			<label for="staff">Staff</label>
		</div>

		<div class="checkboxes-group">
			<input type="checkbox" value="volunteers" name="course_staff[]" class="tax-filter" id="volunteers" />
			<label for="volunteers">Volunteers</label>
		</div>
	</div>
</section>
