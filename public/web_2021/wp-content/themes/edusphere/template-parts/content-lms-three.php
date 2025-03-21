<?php

   $spacing_value = 15;
$enable_zoom      = '';
		$terms    = get_the_terms( get_the_ID(), 'course_category' );

echo '<div class="rt-case-study-box-item col-lg-4 col-md-4 col-sm-4 col-xs-12';



		echo '" style="padding:' . esc_attr( $spacing_value ) . 'px;">';
		echo '<div class="holder">';
		echo '<div class="pic">';
		echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/home-two-course-blank-image.png' ) . '" alt="' . esc_html__( 'blank-image', 'edusphere' ) . '" width="100" height="80">';
if ( 'yes' === $settings['case_study_enable_zoom'] ) {
	 echo '<a class="holder fancybox" href="' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';
} else {
	 echo '<a class="holder" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . ')"></a>';
}?>
		<?php
		$user   = LP_Global::user();
		$course = LP_Global::course();
		if ( $price = $course->get_price_html() ) {
			echo '<div class="course-price">' . esc_attr( $price ) . '</div>';
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

	<?php echo get_field( 'lectures' ); ?>  <?php esc_html_e( 'Lessons', 'edusphere' ); ?>

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
