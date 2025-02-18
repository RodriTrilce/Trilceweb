<?php
/**
 * Template for displaying instructor of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/instructor.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
?>


<div class="course-author">
	<?php do_action( 'learn-press/before-single-course-instructor' ); ?>
	  <?php
		$user_id = get_the_author_meta( 'ID' );

		$user = get_userdata( $user_id );
		?>
		 <div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12 pull-left">

			   <p class="img-responsive"><?php echo get_avatar( get_the_author_meta( 'email' ), '470' ); ?></p>

			   <h4 class="instructor-name">
			   <?php
				echo wp_kses(
					$course->get_instructor_html(),
					array(
						'a' => array(
							'id'     => array(),
							'class'  => array(),
							'style'  => array(),
							'href'   => array(),
							'target' => array(),
							'rel'    => array(),
							'title'  => array(),
						),
					)
				);
				?>
			   </h4>
			   <p class="instructor-designation"><?php echo get_field( 'professional', 'user_' . $user_id ); ?></p>

			   <h6 class="instructor-mail">Mail ID : <a  href="mailto:<?php echo esc_attr( $user->user_email ); ?>"><?php echo esc_attr( $user->user_email ); ?></a></h6>
			   <h6 class="instructor-website">Web : <a href="<?php echo esc_url( $user->user_url ); ?>"><?php echo esc_url( $user->user_url ); ?></a></h6>
			   <div class="instructor-social-icon">
			   <ul>
				  <li><a href="<?php echo get_field( 'facebook_link', 'user_' . $user_id ); ?>"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="<?php echo get_field( 'twitter_link', 'user_' . $user_id ); ?>"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="<?php echo get_field( 'pinterest_link', 'user_' . $user_id ); ?>"><i class="fa fa-pinterest"></i></a></li>
				  <li><a href="<?php echo get_field( 'instagram _link', 'user_' . $user_id ); ?>"><i class="fa fa-instagram"></i></a></li>

			   </ul>
			   </div><!--instructor-social-icon-->
			</div><!--col-md-4-->

			<div class="col-md-7 col-sm-7 col-xs-12 pull-left">
			   <h3 class="instrctor-name-big">
			   <?php
				echo wp_kses(
					$course->get_instructor_html(),
					array(
						'a' => array(
							'id'     => array(),
							'class'  => array(),
							'style'  => array(),
							'href'   => array(),
							'target' => array(),
							'rel'    => array(),
							'title'  => array(),
						),
					)
				);
				?>
						</h3>
			   <div class="instructor-devider"></div>
			   <h4 class="instructor-about-heading"><?php echo esc_html__( 'About Instructor', 'edusphere' ); ?></h4>
			   <p class="instructor-about-details"><?php echo esc_attr( $course->get_author()->get_description() ); ?></p>

			   <div class="teacher-courses">
			   <div class="row">
				  <div class="col-md-5 col-sm-5 col-xs-12">
					 <h4 class="instructor-courses-heading"><?php echo esc_html__( 'Teacher Courses', 'edusphere' ); ?></h4>
				  </div><!--col-md-3-->

				  <div class="col-md-7 col-sm-7 col-xs-12">
					 <div class="instructor-devider-course"></div>
					  </div><!--col-md-9-->
			   </div><!--row-->
					 <?php
						$spacing_value = 15;
						$enable_zoom   = '';
						echo '<div class="rt-case-study-box element-two row  ' . esc_attr( $enable_zoom ) . '" style="margin-left:-' . esc_attr( $spacing_value ) . 'px; margin-right:-' . esc_attr( $spacing_value ) . 'px;">';

						$p_id    = get_the_ID();
						$user_id = get_current_user_id();
						$args    = array(
							'post_type'      => 'lp_course',
							'post_status'    => 'publish',
							'posts_per_page' => 2,
							'orderby'        => 'rand',
							'post__not_in'   => array( $p_id ),
							'author'         => $user_id,
						);

						query_posts( $args );
						while ( have_posts() ) :
							the_post();



											   $terms = get_the_terms( get_the_ID(), 'course_category' );

							   echo '<div class="rt-case-study-box-item col-md-6 col-sm-6 col-xs-12 ';

							if ( ! empty( $terms ) ) {
								foreach ( $terms as $term ) {
									echo esc_attr( $term->slug ) . ' ';
								}
							}

								echo '" style="padding:' . esc_attr( $spacing_value ) . 'px;">';



								echo '<div class="holder">';
								echo '<div class="pic">';
								echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/home-one-blank-image-2.png' ) . '" alt="' . esc_html__( 'blank-image', 'edusphere' ) . '" width="100" height="80">';

									echo '<a class="holder" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';


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




							?>
		<div class="ciurse-fees-main">
   <div class="row">

	<div class="col-sm-6"><span class="course-rating">
							<?php
							if ( function_exists( 'the_ratings' ) ) {
								the_ratings(); }
							?>
	</span>
	</div>

							<?php
							$user   = LP_Global::user();
							$course = LP_Global::course();
							if ( $price = $course->get_price_html() ) {
								?>
	<div class="col-sm-6">
								<?php if ( $course->has_sale_price() ) { ?>
		<span class="rt-origin-price"> <?php echo esc_attr( $course->get_origin_price_html() ); ?></span>
		<?php } ?>
		<span class="rt-price"><?php echo esc_attr( $price ); ?></span>
	</div>
	<?php } ?>

   </div>
   </div>
</div>


							<?php



												 echo '</div>';
								echo '</div>';

endwhile;
						wp_reset_query();// end of the loop.
						?>
 </div>




				  </div><!--teacher-courses-->
			</div><!--col-md-8-->
		 </div><!--row-->

	<?php do_action( 'learn-press/after-single-course-instructor' ); ?>
</div>
