<?php

/* Remove unused params */

remove_action( 'customize_register', 'boldthemes_customize_blog_side_info' );
remove_action( 'boldthemes_customize_register', 'boldthemes_customize_blog_side_info' );


// CREST

if ( ! function_exists( 'boldthemes_customize_crest' ) ) {
	function boldthemes_customize_crest( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[crest]', array(
			'default'           => BoldThemes_Customize_Default::$data['crest'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_image'
		));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'crest', array(
			'label'    => esc_html__( 'Crest', 'tabula' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[crest]',
			'priority' => 0,
			'context'  => BoldThemesFramework::$pfx . '_crest'
		)));		
	}
}
add_action( 'customize_register', 'boldthemes_customize_crest' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_crest' );


// CREST WIDTH

if ( ! function_exists( 'boldthemes_customize_crest_width' ) ) {
	function boldthemes_customize_crest_width( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[crest_width]', array(
			'default'           => BoldThemes_Customize_Default::$data['crest_width'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));

		$wp_customize->add_control( 'crest_width', array(
			'label'    => esc_html__( 'Crest Width (in px)', 'tabula' ),
			'section'  => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[crest_width]',
			'priority' => 50,
			'type'     => 'text'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_crest_width' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_crest_width' );


// DEFAULT HEADER SKIN

BoldThemes_Customize_Default::$data['default_header_skin'] = 'light';

if ( ! function_exists( 'boldthemes_customize_default_header_skin' ) ) {
	function boldthemes_customize_default_header_skin( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_header_skin]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_header_skin'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_header_skin', array(
			'label'     => esc_html__( 'Default Headline Skin', 'tabula' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_header_skin]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => array(
				'light'		=> esc_html__( 'Light', 'tabula' ),
				'dark' 		=> esc_html__( 'Dark', 'tabula' )
			)
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_default_header_skin' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_header_skin' );



// HEADING WEIGHT

BoldThemes_Customize_Default::$data['default_heading_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_heading_weight' ) ) {
	function boldthemes_customize_default_heading_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_heading_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_heading_weight', array(
			'label'     => esc_html__( 'Heading Weight', 'tabula' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]',
			'priority'  => 100,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'tabula' ),
				'thin' 		=> esc_html__( 'Thin', 'tabula' ),
				'lighter' 	=> esc_html__( 'Lighter', 'tabula' ),
				'light' 	=> esc_html__( 'Light', 'tabula' ),
				'normal' 	=> esc_html__( 'Normal', 'tabula' ),
				'medium' 	=> esc_html__( 'Medium', 'tabula' ),
				'semi-bold' => esc_html__( 'Semi bold', 'tabula' ),
				'bold' 		=> esc_html__( 'Bold', 'tabula' ),
				'bolder' 	=> esc_html__( 'Bolder', 'tabula' ),
				'black' 	=> esc_html__( 'Black', 'tabula' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_heading_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_heading_weight' );


// HEADLINE DASH

BoldThemes_Customize_Default::$data['heading_dash'] = 'none';

if ( ! function_exists( 'boldthemes_customize_heading_dash' ) ) {
	function boldthemes_customize_heading_dash( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[heading_dash]', array(
			'default'           => BoldThemes_Customize_Default::$data['heading_dash'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'heading_dash', array(
			'label'     => esc_html__( 'Default Heading Dash', 'tabula' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[heading_dash]',
			'priority'  => 102,
			'type'      => 'select',
			'choices'   => array(
				'dot' 		=> esc_html__( 'Art Dot', 'tabula' ),
				'circle' 	=> esc_html__( 'Simple Circle', 'tabula' ),
				'balloon' 	=> esc_html__( 'Speech Balloon', 'tabula' ),
				'guitar' 	=> esc_html__( 'Guitar Pick', 'tabula' ),
				'star' 		=> esc_html__( 'Star', 'tabula' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_heading_dash' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_heading_dash' );



// MENU WEIGHT

BoldThemes_Customize_Default::$data['default_menu_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_menu_weight' ) ) {
	function boldthemes_customize_default_menu_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_menu_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_menu_weight', array(
			'label'     => esc_html__( 'Menu Font Weight', 'tabula' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]',
			'priority'  => 102,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'tabula' ),
				'thin' 		=> esc_html__( 'Thin', 'tabula' ),
				'lighter' 	=> esc_html__( 'Lighter', 'tabula' ),
				'light' 	=> esc_html__( 'Light', 'tabula' ),
				'normal' 	=> esc_html__( 'Normal', 'tabula' ),
				'medium' 	=> esc_html__( 'Medium', 'tabula' ),
				'semi-bold' => esc_html__( 'Semi bold', 'tabula' ),
				'bold' 		=> esc_html__( 'Bold', 'tabula' ),
				'bolder' 	=> esc_html__( 'Bolder', 'tabula' ),
				'black' 	=> esc_html__( 'Black', 'tabula' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_menu_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_menu_weight' );


// CAPITALIZE MAIN MENU

BoldThemes_Customize_Default::$data['capitalize_main_menu'] = true;
if ( ! function_exists( 'boldthemes_customize_capitalize_main_menu' ) ) {
	function boldthemes_customize_capitalize_main_menu( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]', array(
			'default'           => BoldThemes_Customize_Default::$data['capitalize_main_menu'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'capitalize_main_menu', array(
			'label'     => esc_html__( 'Capitalize Menu Items', 'tabula' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]',
			'priority'  => 103,
			'type'      => 'checkbox'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_capitalize_main_menu' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_capitalize_main_menu' );


/* Helper function */

if ( ! function_exists( 'tabula_body_class' ) ) {
	function tabula_body_class( $extra_class ) {
		if ( boldthemes_get_option( 'default_heading_weight' ) ) {
			$extra_class[] =  'btHeadingWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_heading_weight' ) );
		}
		if ( boldthemes_get_option( 'heading_dash' ) ) {
			$extra_class[] =  'btHeadingDash' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'heading_dash' ) );
		}
		return $extra_class;
	}
}