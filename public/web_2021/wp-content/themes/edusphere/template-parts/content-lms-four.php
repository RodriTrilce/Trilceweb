<?php
$spacing_value = 15;
$enable_zoom   = '';
		$terms = get_the_terms( get_the_ID(), 'course_category' );
echo '<div class="rt-case-study-box-item col-lg-3 col-md-3 col-sm-6 col-xs-12';
echo '" style="padding:' . esc_attr( $spacing_value ) . 'px;">';
echo '<div class="holder">';
		echo '<div class="pic">';
		echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/Blank-Image-100x80.png' ) . '" alt="' . esc_html__( 'blank-image', 'edusphere' ) . '" width="100" height="80">';

			echo '<a class="holder" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';


		echo '</div>';
		echo '<div class="course-data">';

if ( function_exists( 'the_ratings' ) ) {
	the_ratings(); }
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



		echo '</div>';
?>


<div class="ciurse-fees-main">
   <div class="row">

	<div class="col-sm-6"><span class="course-students"> <i class="fas fa-users"></i><?Php $course = learn_press_get_course(); ?>
	 <?php
		$students = intval( $course->count_students() );
		if ( $students > 1 ) {
			echo sprintf( __( '%d students', 'edusphere' ), $students ); } else {
			sprintf( __( '%d student', 'edusphere' ), $students );
			}
			?>
	   </span></div>

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

	<?php

		echo '<div class="course-hover">
<div class="course-hover-inner">

 <div class="course-hover-header">';
	echo get_avatar( get_the_author_meta( 'email' ), '150' );
	echo '<p>' . get_the_author_link() . '</p>';
	echo '</div>';

	echo '<div class="course-hover-title"><a href="' . get_the_permalink() . '"><h4>' . get_the_title() . '</h4></a></div>';

	echo '<div class="course-hover-excerpt">';
	the_excerpt();
	  echo '</div>
	  <div class="course-hover-info_meta"><div class="stm_lms_course__meta">
	  <i class="fas fa-signal"></i> ' . get_field( 'course_level' ) . '</div><div class="stm_lms_course__meta">
	  <i class="fas fa-align-justify"></i> ' . get_field( 'lectures' ) . ' ' . esc_html__( 'Lectures ', 'edusphere' ) . '</div><div class="stm_lms_course__meta">
	  <i class="far fa-clock"></i> ' . get_field( 'duration' ) . '</div></div>

	  <div class="course-hover-button"> <a href="' . get_the_permalink() . '"> ' . esc_html__( 'Preview this course ', 'edusphere' ) . '</a></div>
	  <div class="course-hover-wishlist">
   <div class="course-hover-info_bottom">
  ';



	$course_id = get_the_ID();
	$user_id   = get_current_user_id();
	if ( ! $course_id ) {
		$course_id = get_the_ID();
	}

			// If user or course are invalid then return.
	if ( $user_id ) {



		$classes = array( 'course-wishlist' /* dashicons dashicons-heart heartbeat'*/ );
		$state   = learn_press_user_wishlist_has_course( $course_id, $user_id ) ? 'on' : 'off';

		if ( $state == 'on' ) {
				$classes[] = 'on';
		}
				$classes = apply_filters( 'learn_press_course_wishlist_button_classes', $classes, $course_id );
				$title   = 'Graphic Design Instruments for Communication';

				// fetch template.
				echo '<div class="stm-lms-wishlist" data-add="Add to Wishlist" data-add-icon="far fa-heart" data-remove="Wishlisted" data-remove-icon="fa fa-heart">';

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
		echo '<a href="#login" class="lrm-login lrm-hide-if-logged-in"><i class="far fa-heart"></i><span>' . esc_html__( 'Add to Wishlist', 'edusphere' ) . '</span></a>';
	}






	echo '<div class="stm_lms_courses__single--price heading_font"> <strong>' . esc_attr( $price ) . '</strong></div></div>
   </div>';
	echo '</div>';
	echo '</div>';

	echo '</div>';
		echo '</div>';
