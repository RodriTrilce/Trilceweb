<?php
/**
 * Template for displaying tab nav of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/tabs/tabs.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php $tabs = learn_press_get_course_tabs(); ?>

<?php
if ( empty( $tabs ) ) {
	return;
}
?>


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <?php foreach ( $tabs as $key => $tab ) { ?>

			<?php
			$chk     = '';
			$classes = array( 'course-nav course-nav-tab-' . esc_attr( $key ) );
			if ( ! empty( $tab['active'] ) && $tab['active'] ) {
				$classes[] = 'active default';
				$chk       = 'active';
			}
			?>

			<li class="nav-item <?php echo esc_attr( $chk ); ?>">
				<a class="nav-link" data-toggle="tab" role="tab" aria-controls="<?php echo esc_attr( $tab['title'] ); ?>" href="#<?php echo esc_attr( $tab['id'] ); ?>"
				   data-tab="#<?php echo esc_attr( $tab['id'] ); ?>"><?php echo esc_attr( $tab['title'] ); ?></a>
			</li>

		<?php } ?>
		<li class="nav-item">
				<a class="nav-link" data-toggle="tab" role="tab" aria-controls="faq" href="#tab-faq" data-tab="#tab-faq"><?php echo esc_html__( 'Faq', 'edusphere' ); ?>
				   </a>
			</li>
</ul>

<div class="tab-content" id="myTabContent">
	 <?php
		$chk = 1; foreach ( $tabs as $key => $tab ) {
			$classes = array( 'tab-pane fade ' . esc_attr( $key ) );
			if ( $chk ) {
				$chk = 'active in';
			}
			echo '<div class="tab-pane fade ' . $chk . '" id="tab-' . $key . '" role="tabpanel" aria-labelledby="tab-' . $key . '">';
			$chk = '';

			if ( apply_filters( 'learn_press_allow_display_tab_section', true, $key, $tab ) ) {
				if ( is_callable( $tab['callback'] ) ) {
					call_user_func( $tab['callback'], $key, $tab );
				} else {
					/**
					 * @since 3.0.0
					 */
					do_action( 'learn-press/course-tab-content', $key, $tab );
				}
			}
			echo '</div>';
		}
		?>


  <div class="tab-pane fade" id="tab-faq" role="tabpanel" aria-labelledby="faq-tab"><?php echo get_field( 'faq_tab' ); ?></div>

</div>
