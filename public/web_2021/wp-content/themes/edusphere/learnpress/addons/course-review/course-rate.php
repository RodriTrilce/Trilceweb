<?php
/**
 * Template for displaying course rate.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/course-review/course-rate.php.
 *
 * @author ThimPress
 * @package LearnPress/Course-Review/Templates
 * version  3.0.1
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

$course_id       = get_the_ID();
$course_rate_res = learn_press_get_course_rate( $course_id, false );
$course_rate     = $course_rate_res['rated'];
$total           = $course_rate_res['total'];
?>

<div class="rt-tab-rate-area">

	<p class="review-number">
		<?php do_action( 'learn_press_before_total_review_number' ); ?>
		<?php printf( __( ' %1.2f  ', 'edusphere' ), $course_rate ); ?>
		<?php
		learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) );
		?>
	<p>
		<?php printf( _n( ' %d rating', '%d ratings', $total, 'edusphere' ), $total ); ?></p>
		<?php do_action( 'learn_press_after_total_review_number' ); ?>
	</p>
</div>

		<?php
		if ( isset( $course_rate_res['items'] ) && ! empty( $course_rate_res['items'] ) ) :
			foreach ( $course_rate_res['items'] as $item ) :
				?>
				<div class="course-rate">
					<div class="review-stars-rated">
					<?php

					for ( $i = 0;$i < $item['rated'];$i++ ) {
						echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_on.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';
					}
					for ( $t = 0;$t < ( 5 - $i );$t++ ) {
						echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_off.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';
					}



					?>
					</div>

					<div class="review-bar">
						<div class="rating" style="width:<?php echo esc_attr( $item['percent'] ); ?>% "></div>
					</div>
					<div class="rtrtstars3"><?php echo esc_html( $item['percent'] ); ?>%</div>
				</div>
				<?php
			endforeach;
		endif;
		?>
