<?php
/**
 * Template for displaying loop course review.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/course-review/loop-review.php.
 *
 * @author ThimPress
 * @package LearnPress/Course-Review/Templates
 * version  3.0.1
 */

// Prevent loading this file directly.
defined( 'ABSPATH' ) || exit;

?>

<li>
	<div class="review-author">
		<?php echo get_avatar( $review->user_email ); ?>
	</div>
	<div class="rt-review-author-info">
	<div class="review-author-info">
		<h4 class="user-name">
			<?php do_action( 'learn_press_before_review_username' ); ?>
			<?php echo esc_attr( $review->display_name ); ?>
			<?php do_action( 'learn_press_after_review_username' ); ?>
		</h4>
		<?php learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $review->rate ) ); ?>
		<p class="review-title">
			<?php do_action( 'learn_press_before_review_title' ); ?>
			<?php echo esc_attr( $review->title ); ?>
			<?php do_action( 'learn_press_after_review_title' ); ?>
		</p>
	</div>
	<div class="rt-review-text">
		<div class="review-text">
			<div class="review-content">
				<?php do_action( 'learn_press_before_review_content' ); ?>
				<?php echo esc_attr( $review->content ); ?>
				<?php do_action( 'learn_press_after_review_content' ); ?>
			</div>
		</div>
	</div>
	</div>
</li>
