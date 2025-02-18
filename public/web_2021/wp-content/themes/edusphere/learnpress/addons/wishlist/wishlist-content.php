<?php

/**
 * Template for displaying the list of course content is in wishlist.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/wishlist/wishlist-content.php.
 *
 * @author ThimPress
 * @package LearnPress/Wishlist/Templates
 * @version 3.0.1
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

global $post;
?>

<div id="learn-press-tab-wishlist-course-<?php echo esc_attr( $post->ID ); ?>" class="course col-md-4 col-sm-4 col-xs-12" data-context="tab-wishlist">

	<?php do_action( 'learn_press_before_profile_tab_wishlist_loop_course' ); ?>
	<a href="<?php the_permalink(); ?>" class="course-title">
		<?php do_action( 'learn_press_wishlist_loop_item_title' ); ?>
	</a>
	<?php do_action( 'learn_press_after_profile_tab_wishlist_loop_course' ); ?>

	<?php LP_Addon_Wishlist::instance()->wishlist_button( $post->ID ); ?>
</div>
