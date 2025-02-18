<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package edusphere
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function radiantthemes_body_classes( $classes ) {
	$classes[] = 'radiantthemes';
	$classes[] = 'radiantthemes-' . get_template();

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_user_logged_in() && ! empty( radiantthemes_global_var( 'coming_soon_switch', '', false ) ) ) {
		$classes[] = 'rt-coming-soon';
		if ( ! empty( radiantthemes_global_var( 'coming_soon_custom_background_style', '', false ) ) ) {
			$classes[] = 'coming-soon-' . radiantthemes_global_var( 'coming_soon_custom_background_style', '', false );
		}
	} elseif ( ! is_user_logged_in() && ! empty( radiantthemes_global_var( 'maintenance_mode_switch', '', false ) ) ) {
		$classes[] = 'rt-maintenance-mode';
	} elseif ( ! is_user_logged_in() && ! empty( radiantthemes_global_var( 'coming_soon_switch', '', false ) ) && ! empty( radiantthemes_global_var( 'maintenance_mode_switch', '', false ) ) ) {
		$classes[] = 'rt-coming-soon';
	}

	if ( is_404() && ! empty( radiantthemes_global_var( 'error_custom_background_style', '', false ) ) ) {
		$classes[] = 'error-404-' . radiantthemes_global_var( 'error_custom_background_style', '', false );
	}

	if ( ! empty( radiantthemes_global_var( 'scrollbar_switch', '', false ) ) ) {
		$classes[] = 'infinity-scroll';
	}

	return $classes;
}
add_filter( 'body_class', 'radiantthemes_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function radiantthemes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'radiantthemes_pingback_header' );

function radiantthemes_add_extra_user_info( $fields ) {
	$new_fields = array(
		array(
			'name'  => 'phone_number',
			'label' => esc_html__( 'Phone Number', 'edusphere' ),
		),
		array(
			'name'  => 'career',
			'label' => esc_html__( 'Career', 'edusphere' ),
		),
		array(
			'name'  => 'facebook',
			'label' => esc_html__( 'Facebook', 'edusphere' ),
		),
		array(
			'name'  => 'twitter',
			'label' => esc_html__( 'Twitter', 'edusphere' ),
		),
		array(
			'name'  => 'instagram',
			'label' => esc_html__( 'Instagram', 'edusphere' ),
		),
		array(
			'name'  => 'linkedin',
			'label' => esc_html__( 'Linkedin', 'edusphere' ),
		),
		array(
			'name'  => 'pinterest',
			'label' => esc_html__( 'Pinterest', 'edusphere' ),
		),
		array(
			'name'  => 'youtube',
			'label' => esc_html__( 'Youtube', 'edusphere' ),
		),
	);

	foreach ( $new_fields as $new_field ) {
		if ( ! isset( $fields[ $new_field['name'] ] ) ) {
			$fields[ $new_field['name'] ] = $new_field['label'];
		}
	}

	return $fields;
}
add_filter( 'user_contactmethods', 'radiantthemes_add_extra_user_info' );
