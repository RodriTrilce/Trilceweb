<?php
/**
 * Template for displaying lesson item section in single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/section/item-lesson.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( ! isset( $item ) ) {
	return;
}


$page = get_page_by_title( $item->get_title( 'display' ), OBJECT, 'lp_lesson' );



$format = get_post_format( $page->ID );
if ( $format == 'image' ) {
	echo '<span class="ti-image"></span>';
} elseif ( $format == 'quote' ) {
	echo '<span class="ti-quote-left"></span>';
} elseif ( $format == 'status' ) {
	echo '<span class="ti-statu"></span>';
} elseif ( $format == 'video' ) {
	echo '<span class="ti-video-clapper"></span>';
} elseif ( $format == 'audio' ) {
	echo '<span class="ti-desktop"></span>';
} else {
	echo '<span class="ti-stander"></span>';}

$result = $item->get_title( 'display' );
$len    = strlen( $result );
if ( $len > 20 ) {

	$result = substr( $result, 0, 20 ) . '...';
}


?>

<span class="item-name"><?php echo esc_attr( $item->get_title( 'display' ) ); ?></span>
<span class="item-name-sub"><?php echo esc_attr( $result ); ?></span>
