<?php

/**
 * Course loop price
 *
 * @since v.1.0.0
 * @author themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */
?>

<div class="tutor-course-loop-price">
    <?php
    $course_id = get_the_ID();
    $enroll_btn = '<div class="tutor-public-course-start-learning">' . apply_filters( 'tutor_course_restrict_new_entry', '<a class="button" href="'. get_the_permalink(). '" title="' . __( 'Get Enrolled', 'tutor' ) . ' - ' . get_the_title() . '">' . __( 'Get Enrolled', 'tutor' ) . get_svg( 'icons/cart', false ) . '</a>' ) . '</div>';
    $default_price = apply_filters('tutor-loop-default-price', __('Free', 'tutor'));
    $price_html = '<div class=""> '.$enroll_btn. '</div>';
    if (tutor_utils()->is_course_purchasable()) {
	    $enroll_btn = tutor_course_loop_add_to_cart(false);

	    $product_id = tutor_utils()->get_course_product_id($course_id);
	    $product    = wc_get_product( $product_id );

	    if ( $product ) {
		    $price_html = '<div class="price"> '.$product->get_price_html() . apply_filters( 'tutor_course_restrict_new_entry', $enroll_btn ) . ' </div>';
	    }
    }
    echo $price_html;
    ?>
</div>