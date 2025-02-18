<?php

   $spacing_value = 15;
$enable_zoom      = '';
		$terms    = get_the_terms( get_the_ID(), 'course_category' );


	echo '<div class="rt-case-study-box-item course-s2 col-lg-3 col-md-3 col-sm-4 col-xs-12';

if ( ! empty( $terms ) ) {
	foreach ( $terms as $term ) {
			echo esc_url( $term->slug ) . ' ';
	}
}

		echo 'style="padding:' . esc_attr( $spacing_value ) . 'px;">';



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

	<div class="col-sm-8"><span class="course-rating">
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
	<div class="col-sm-4">
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


		echo '<div class="course-hover">
<div class="course-hover-inner">

 <div class="course-hover-header">';
	echo get_avatar( get_the_author_meta( 'email' ), '150' );
	echo '<p>' . get_the_author_link() . '</p>';
	echo '</div>';

	echo '<div class="course-hover-title"><a href="' . get_the_permalink() . '"><h4>' . get_the_title() . '</h4></a></div>';

	echo '<div class="course-hover-excerpt">';
	the_field( 'course_short_info' );
	  echo '</div>
	  <div class="course-hover-info_meta"><div class="stm_lms_course__meta">
	  <i class="fas fa-signal"></i> ' . get_field( 'course_level' ) . '</div><div class="stm_lms_course__meta">
	  <i class="fas fa-align-justify"></i> ' . get_field( 'lectures' ) . ' ' . esc_html__( 'Lectures ', 'edusphere' ) . '</div><div class="stm_lms_course__meta">
	  <i class="far fa-clock"></i> ' . get_field( 'duration' ) . '</div></div>


  ';









	echo '</div>';
	echo '</div>';

	echo '</div>';
		echo '</div>';
