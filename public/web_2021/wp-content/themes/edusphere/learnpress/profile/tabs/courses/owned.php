<?php
/**
 * Template for displaying own courses in courses tab of user profile page.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/courses/own.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.11.2
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$profile       = learn_press_get_profile();
$filter_status = LP_Request::get_string( 'filter-status' );
$query         = $profile->query_courses( 'own', array( 'status' => $filter_status ) );
?>

<div class="learn-press-subtab-content">

	<h3 class="profile-heading">
		<?php _e( 'My Courses', 'edusphere' ); ?>
	</h3>

	<?php if ( $filters = $profile->get_own_courses_filters( $filter_status ) ) { ?>
		<ul class="lp-sub-menu">
			<?php foreach ( $filters as $class => $link ) { ?>
				<li class="<?php echo esc_attr( $class ); ?>">
					<?php
					echo wp_kses(
						$link,
						array(
							'span' => array(),
							'a'    => array(
								'href' => array(),
							),

						)
					);
					?>
					</li>
			<?php } ?>
		</ul>
	<?php } ?>

	<?php
	if ( ! $query['total'] ) {
		learn_press_display_message( __( 'No courses!', 'edusphere' ) );
	} else {

		global $post, $wp_query, $lp_tax_query, $wp_query;

		$spacing_value = 15;
		$enable_zoom   = '';
		echo '<div class="rt-case-study-box element-nine style-4 row ' . esc_attr( $enable_zoom ) . '" style="margin-left:-' . esc_attr( $spacing_value ) . 'px; margin-right:-' . esc_attr( $spacing_value ) . 'px;">';

			global $post;
		foreach ( $query['items'] as $item ) {
			$course = learn_press_get_course( $item );
			$post   = get_post( $item );
			setup_postdata( $post );
			learn_press_get_template( 'content-course.php' );
		}
			wp_reset_postdata();
		?>
		</div>
		<?php $query->get_nav( '', true, $profile->get_current_url() ); ?>

	<?php } ?>
</div>
