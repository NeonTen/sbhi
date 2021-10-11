<?php
/**
 * The template part for displaying Tabs in Course single post.
 *
 * @package SBHI
 */

?>

<div class="tabs-wrap">
	<ul class="tabs">
		<li class="active-tab">Description</li>
		<li>Instructors</li>

		<?php
		if ( is_user_logged_in() ) {
			echo '<li>Transcript</li>';
			echo '<li>Course Chat</li>';
		}
		?>

	</ul>

	<ul class="tabs-content">
		<li>
			<h3 class="entry-title single">Course description</h3>
			<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel</p>

			<h3 class="entry-title single">Curricullum</h3>
			<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel</p>

			<h3 class="entry-title single">Certification</h3>
			<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel</p>
		</li>

		<li>
			<div class="cards-wrap">
				<div class="author-card box-with-shadow">
					<div class="author-image">
						<img src="<?php echo get_template_directory_uri() . '/images/instructor-1.png'; // phpcs:ignore ?>" alt="">
					</div>
					<div class="text">
						<h4 class="author-name">Pamela Foster</h4>
						<p class="designation">Instructor</p>
					</div>
				</div>
				<div class="author-card box-with-shadow">
					<div class="author-image">
						<img src="<?php echo get_template_directory_uri() . '/images/testimonial-2.png'; // phpcs:ignore ?>" alt="">
					</div>
					<div class="text">
						<h4 class="author-name">George Michael</h4>
						<p class="designation">Manual Handling Coordinator</p>
					</div>
				</div>
			</div>
		</li>

		<?php
		if ( is_user_logged_in() ) {
			?>
			<li>
				<h3 class="entry-title single">Introduction Section</h3>
				<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel</p>

				<h3 class="entry-title single">Another Section</h3>
				<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
				Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel</p>
			</li>

			<li>
				<h3 class="entry-title single">Chat</h3>
				<p class="entry-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus?</p>
			</li>
			<?php
		}
		?>

	</ul>
</div>
