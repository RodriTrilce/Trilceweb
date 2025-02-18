<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.1
 * @author     Thomas Griffin
 * @author     Gary Jones
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    //opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       //github.com/thomasgriffin/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Undocumented function
 */
function radiantthemes_register_required_plugins() {
	$plugins = array(

		// Advanced Custom Fields.
		array(
			'name'     => esc_html__( 'Advanced Custom Fields', 'edusphere' ),
			'slug'     => 'advanced-custom-fields',
			'required' => true,
		),
			// Video Conferencing with Zoom
		array(
			'name'     => esc_html__( 'Video Conferencing with Zoom', 'edusphere' ),
			'slug'     => 'video-conferencing-with-zoom-api',
			'required' => true,
		),
		// AJAX Login and Registration modal popup + inline form.
		array(
			'name'     => esc_html__( 'AJAX Login and Registration modal popup', 'edusphere' ),
			'slug'     => 'ajax-login-and-registration-modal-popup',
			'required' => true,
		),
		// LearnPress.
		array(
			'name'     => esc_html__( 'LearnPress', 'edusphere' ),
			'slug'     => 'learnpress',
			'required' => true,
		),
		// LearnPress - Course Review.
		array(
			'name'     => esc_html__( 'LearnPress - Course Review', 'edusphere' ),
			'slug'     => 'learnpress-course-review',
			'required' => true,
		),
		// learnpress-wishlist.
		array(
			'name'     => esc_html__( 'LearnPress - Course Wishlist', 'edusphere' ),
			'slug'     => 'learnpress-wishlist',
			'required' => true,
		),
		// SearchWP Live Ajax Search.
		array(
			'name'     => esc_html__( 'SearchWP Live Ajax Search', 'edusphere' ),
			'slug'     => 'searchwp-live-ajax-search',
			'required' => true,
		),
	
		// Timetable and Event Schedule.
		array(
			'name'     => esc_html__( 'Timetable and Event Schedule', 'edusphere' ),
			'slug'     => 'mp-timetable',
			'required' => true,
		),

		// WP-PostRatings.
		array(
			'name'     => esc_html__( 'Post Ratings', 'edusphere' ),
			'slug'     => 'wp-postratings',
			'source'   => 'https://edusphere.radiantthemes.com/plugins/wp-postratings.zip',
			'required' => true,
		),
		// WPC Smart Compare for WooCommerce.
		array(
			'name'     => esc_html__( 'Smart Compare for WooCommerce', 'edusphere' ),
			'slug'     => 'woo-smart-compare',
			'required' => true,
		),
		// WPC Smart Quick View for WooCommerce.
		array(
			'name'     => esc_html__( 'WPC Smart Quick View for WooCommerce', 'edusphere' ),
			'slug'     => 'woo-smart-quick-view',
			'required' => true,
		),
		// WPC Smart Wishlist for WooCommerce.
		array(
			'name'     => esc_html__( 'WPC Smart Wishlist for WooCommerce', 'edusphere' ),
			'slug'     => 'woo-smart-wishlist',
			'required' => true,
		),

		// Redux Framework.
		array(
			'name'     => esc_html__( 'Redux Framework', 'edusphere' ),
			'slug'     => 'redux-framework',
			'required' => true,
		),
		// Elementor.
		array(
			'name'     => esc_html__( 'Elementor', 'edusphere' ),
			'slug'     => 'elementor',
			'required' => true,
		),
		// AnyWhere Elementor.
		array(
			'name'     => esc_html__( 'Anywhere Elementor', 'edusphere' ),
			'slug'     => 'anywhere-elementor',
			'required' => true,
		),
		// Contact Form 7.
		array(
			'name'     => esc_html__( 'Contact Form 7', 'edusphere' ),
			'slug'     => 'contact-form-7',
			'required' => true,
		),
		// Contact Form7 Widget For Elementor Page Builder.
		array(
			'name'     => esc_html__( 'CF7 Widget Elementor', 'edusphere' ),
			'slug'     => 'cf7-widget-elementor',
			'required' => true,
		),
		// RT Custom Post Type.
		array(
			'name'     => esc_html__( 'RadiantThemes Custom Post Type', 'edusphere' ),
			'slug'     => 'radiantthemes-custom-post-type',
			'source'   => 'https://edusphere.radiantthemes.com/plugins/radiantthemes-custom-post-type.zip',
			'required' => true,
		),
		// RadiantThemes Addons.
		array(
			'name'     => esc_html__( 'RadiantThemes Addons', 'edusphere' ),
			'slug'     => 'radiantthemes-addons',
			'source'   => 'https://edusphere.radiantthemes.com/plugins/radiantthemes-addons.zip',
			'required' => true,
		),
		// Unyson.
		array(
			'name'     => esc_html__( 'Unyson', 'edusphere' ),
			'slug'     => 'unyson',
			'required' => true,
		),
		// WooCommerce.
		array(
			'name'     => esc_html__( 'WooCommerce', 'edusphere' ),
			'slug'     => 'woocommerce',
			'required' => true,
		),
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'radiantthemes_register_required_plugins' );
