<?php
/**
 * The template part for displaying Course info in Course single post sidebar.
 *
 * @package SBHI
 */

?>

<aside class="widget-area">

	<?php
	if ( ! is_user_logged_in() ) {
		?>
		<div class="widget widget-course-info logged-out box-with-shadow box-big">
			<h3 class="widget-title"><?php esc_html_e( 'Course Information', 'sbhi' ); ?></h3>
			<ul class="custom-list">
				<li>8 hours of on-line video</li>
				<li>24 lectures</li>
				<li>Always free and lifetime availnability</li>
				<li>Access on mobile devices</li>
				<li>Recognised certification</li>
			</ul>
			<div class="button">
				<?php esc_html_e( 'Enroll', 'sbhi' ); ?>
				<?php get_svg( 'icons/cart' ); ?>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="widget widget-course-info logged-in">
			<h3 class="widget-title"><?php esc_html_e( 'Course content', 'sbhi' ); ?></h3>
			<ul class="accordion">
				<li>
					<h4 class="toggle">Introduction</h4>
					<div class="inner">
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">First topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">Second topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">Third topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
					</div>
				</li>

				<li>
					<h4 class="toggle">Second Topic</h4>
					<div class="inner">
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">First topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">Second topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
						<div class="courses-list">
							<span>
								<div class="checkboxes-group">
									<input type="checkbox" value="sbhi-staff" name="course_audience[]" class="tax-filter" id="sbhi-staff" />
									<label for="sbhi-staff">Third topic</label>
								</div>
							</span>
							<span>1:20:35</span>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<?php
	}
	?>

</aside>
