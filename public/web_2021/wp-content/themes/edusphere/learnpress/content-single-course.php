<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-single-course.php
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 3.0.0
 */
$p_id = get_the_ID();
/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( post_password_required() ) {
	echo get_the_password_form();

	return;
}

/**
 * @since 3.0.0
 */
do_action( 'learn-press/before-main-content' );

?>
<div class="row">
	<div class="col-md-8 col-sm-12 col-xs-12">
		<div class="rt-course-single"><?php the_title(); ?></div>


	   <div class="courses-details-desc">
		<div id="learn-press-course" class="course-summary">
			<?php
			/**
			 * @since 3.0.0
			 *
			 * @see learn_press_single_course_summary()
			 */
			do_action( 'learn-press/single-course-summary' );
			?>
	</div>
	   </div>
	   <div class="rt-wish">
	   <?php
			$user_id = get_current_user_id();

		  $course_id = $p_id;
			// If user or course are invalid then return.
		if ( $user_id ) {



			$classes = array( 'course-wishlist' /* dashicons dashicons-heart heartbeat'*/ );
			$state   = learn_press_user_wishlist_has_course( $course_id, $user_id ) ? 'on' : 'off';

			if ( $state == 'on' ) {
				$classes[] = 'on';
			}
			$classes = apply_filters( 'learn_press_course_wishlist_button_classes', $classes, $course_id );
			$title   = esc_html__( 'Graphic Design Instruments for Communication', 'edusphere' );

			echo '<div class="stm-lms-wishlist" data-add="' . esc_attr__( 'Add to Wishlist', 'edusphere' ) . '" data-add-icon="far fa-heart" data-remove="' . esc_attr__( 'Wishlisted', 'edusphere' ) . '" data-remove-icon="fa fa-heart">';

			printf(
				'<button class="learn-press-course-wishlist learn-press-course-wishlist-button-%2$d wishlist-button %s" data-id="%s" data-nonce="%s" title="%s" data-text="%s">%s</button>',
				join( ' ', $classes ),
				$course_id,
				wp_create_nonce( 'course-toggle-wishlist' ),
				$title,
				__( '...', 'edusphere' ),
				$state == 'on' ? __( '<i class="far fa-heart red"></i><span>Wishlisted</span>', 'edusphere' ) : __( '<i class="far fa-heart"></i><span>Add to Wishlist</span>', 'edusphere' )
			);
			echo '</div>';
		} else {
			echo '<div class="rtlogin"><a href="#login" class="lrm-login lrm-hide-if-logged-in"><i class="far fa-heart"></i><span>' . esc_html__( 'Add to Wishlist', 'edusphere' ) . '</span></a></div>';
		}
		?>
			</div>
	</div>

	<div class="col-md-4 col-sm-12 col-xs-12">
		<div class="rt-gen-gap">

			<div class="rt-sidebar">
				<div class="rt-sidebar-bluebar">
					<div class="rt-course-desc col-sm-6 col-xs-6"><?php echo esc_html__( 'course value', 'edusphere' ); ?></div>
					<?php
					 $user   = LP_Global::user();
					 $course = LP_Global::course();
					if ( $price = $course->get_price_html() ) {
						?>
					 <div class="rt-course-value col-sm-6 col-xs-6"><?php echo esc_attr( $price ); ?>
					</div>

					<?php } ?>
				</div>
				<div class="rt-archive-box-1">
				<div class="rt-sidebar-detail-grid-area">
					<div class="rt-sidebar-detail-box">
						<div class="row">
							<?php $course = learn_press_get_course(); ?><?php $students = intval( $course->count_students() ); if ( $students ) : ?>
							<div class="rt-sidebar-detail-box-left col-sm-9"><?php echo esc_html__( 'Enrolled', 'edusphere' ); ?>: <span>
																						<?php
																						if ( $students > 1 ) {
																							echo sprintf( __( '%d students', 'edusphere' ), $students ); } else {
																								sprintf( __( '%d student', 'edusphere' ), $students );
																							}
																							?>
	</span></div>
							<?php endif; ?>

							<div class="rt-sidebar-detail-box-right col-sm-3"><?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/users.svg' ) . '" alt="' . esc_html__( 'user', 'edusphere' ) . '" width="30" height="30">'; ?></div>
						</div>
					</div>
					<?php if ( get_field( 'duration' ) ) : ?>
					<div class="rt-sidebar-detail-box">
						<div class="row">
							<div class="rt-sidebar-detail-box-left col-sm-9"><?php echo esc_html__( 'Duration', 'edusphere' ); ?>: <span><?php echo get_field( 'duration' ); ?></span></div>
							<div class="rt-sidebar-detail-box-right col-sm-3"><?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/time.svg' ) . '" alt="' . esc_html__( 'time', 'edusphere' ) . '" width="30" height="30">'; ?></div>
						</div>
					</div>
					<?php endif; ?>
					<?php if ( get_field( 'lectures' ) ) : ?>
					<div class="rt-sidebar-detail-box">
						<div class="row">
							<div class="rt-sidebar-detail-box-left col-sm-9"><?php echo esc_html__( 'Lectures', 'edusphere' ); ?>: <span><?php echo get_field( 'lectures' ); ?></span></div>
							<div class="rt-sidebar-detail-box-right col-sm-3"><?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/shout.svg' ) . '" alt="' . esc_html__( 'lecture', 'edusphere' ) . '" width="30" height="30">'; ?></div>
						</div>
					</div>
					<?php endif; ?>
					<?php if ( get_field( 'video_duration' ) ) : ?>
					<div class="rt-sidebar-detail-box">
						<div class="row">
							<div class="rt-sidebar-detail-box-left col-sm-9"><?php echo esc_html__( 'Duration', 'edusphere' ); ?>: <span><?php echo get_field( 'video_duration' ); ?></span></div>
							<div class="rt-sidebar-detail-box-right col-sm-3"><?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/play-button.svg' ) . '" alt="' . esc_html__( 'duration', 'edusphere' ) . '" width="30" height="30">'; ?></div>
						</div>
					</div>
					<?php endif; ?>
					<?php if ( get_field( 'course_level' ) ) : ?>
					<div class="rt-sidebar-detail-box">
						<div class="row">
							<div class="rt-sidebar-detail-box-left col-sm-9"><?php echo esc_html__( 'Level', 'edusphere' ); ?>: <span><?php echo get_field( 'course_level' ); ?></span></div>
							<div class="rt-sidebar-detail-box-right col-sm-3"><?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/graphic.svg' ) . '" alt="' . esc_html__( 'lavel', 'edusphere' ) . '" width="30" height="30">'; ?></div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				 <?php do_action( 'learn-press/course-buttons' ); ?>
				 <div class="post-share style-01">
				 <div class="course share-label"><?php esc_html_e( 'Share This Course', 'edusphere' ); ?></div>

							<?php echo do_shortcode( '[rt_course_social_links]' ); ?>
							</div><!--share-media-->

			</div><!--end of rt-archive-box-1-->

			</div>
		</div>
	</div>

</div>

</div><!-- .entry-content -->
</article><!-- #post- -->
</div>
<?php if ( radiantthemes_global_var( 'related-courses-enable-disable-option', '', false ) ) { ?>
<div class="rt-instrust-box">
	<div class="container">


		<div class="col-sm-12">
			<div class="rt-related-courses">
				<p><?php echo esc_html__( 'Related Instructor Courses', 'edusphere' ); ?></p>
			</div>
			<div class="rt-related-courses-des">
				<p><?php echo get_field( 'des' ); ?></p>
			</div>

			<?php
			$spacing_value = 15;
			$enable_zoom   = '';
			echo '<div class="rt-case-study-box element-nine style-4 row ' . esc_attr( $enable_zoom ) . '" style="margin-left:-' . esc_attr( $spacing_value ) . 'px; margin-right:-' . esc_attr( $spacing_value ) . 'px;">';

			$user_id = get_current_user_id();
			$args    = array(
				'post_type'      => 'lp_course',
				'post_status'    => 'publish',
				'posts_per_page' => 4,
				'orderby'        => 'rand',
				'post__not_in'   => array( $p_id ),
				'author'         => $user_id,
			);

			query_posts( $args );
			while ( have_posts() ) :
				the_post();
				?>

					   <?php


							   $terms = get_the_terms( get_the_ID(), 'course_category' );



							   echo '<div class="rt-case-study-box-item col-lg-3 col-md-3 col-sm-4 col-xs-12';



							   echo '" style="padding:' . esc_attr( $spacing_value ) . 'px;">';
							   echo '<div class="holder">';
							   echo '<div class="pic">';
							   echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/home-four-course-blank-image.png' ) . '" alt="blank image" width="100" height="80">';

								   echo '<a class="holder" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';
						?>
					   <?php
							$user   = LP_Global::user();
							$course = LP_Global::course();
						if ( $price = $course->get_price_html() ) {
							echo '<div class="course-price">' . esc_attr(
								$price
							) . '</div>';
						}

						echo '</div>';

						echo '<div class="data matchHeight">';

						echo '<p class="category" >';
						$terms = get_the_terms( get_the_ID(), 'course_category' );
						if ( ! empty( $terms ) ) {
							foreach ( $terms as $term ) {
								if ( $term !== end( $terms ) ) {
									echo '<span>' . esc_attr( $term->name ) . ', ' . '</span>';
								} else {
									echo '<span>' . esc_attr( $term->name ) . '</span>';
								}
							}
						}
						echo '</p>';


						echo '<h3 ><a class="course-title" href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';




						echo '<div class="course-data">';

						if ( function_exists( 'the_ratings' ) ) {
							the_ratings(); }
						echo '</div>';
						echo '</div>';
						?>


			<div class="ciurse-fees-main">

				<div class="col-sm-6"><span class="course-students"> <i class="fas fa-book"></i>

						<?php echo get_field( 'lectures' ); ?> <?php esc_html_e( 'Lessons', 'edusphere' ); ?>

					</span></div>


				<div class="col-sm-6">


					<span class="rt-price"><i class="far fa-user"></i>

						<?Php $course = learn_press_get_course(); ?>
						<?php
						$students = intval( $course->count_students() );
						if ( $students > 1 ) {
							echo sprintf( __( '%d students', 'edusphere' ), $students ); } else {
							sprintf( __( '%d student', 'edusphere' ), $students );
							}
							?>
					</span>

				</div>



			</div>

				<?php
				   echo '<div class="course-hover">';

						  echo '<div class="pic">';
				   echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/blank-image.png' ) . '" alt="' . esc_html__( 'blank-image', 'edusphere' ) . '" width="100" height="80">';
				echo '<a class="holder" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';
					   echo '</div>';
						 echo '</div>';

						 echo '</div>';
				   echo '</div>';

		 endwhile;
			wp_reset_query();// end of the loop.
			?>
		</div>


	</div>
</div>
<?php } ?>
<div>
