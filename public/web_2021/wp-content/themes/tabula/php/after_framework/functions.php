<?php


// NEW IMAGE SIZES

function tabula_custom_image_sizes () {
	
	/* Large */
	add_image_size( 'boldthemes_large_rectangle', 1280, 720, true );
	add_image_size( 'boldthemes_large_vertical_rectangle', 720, 1280, true );
	
	/* Medium */
	add_image_size( 'boldthemes_medium_rectangle', 640, 360, true );
	add_image_size( 'boldthemes_medium_vertical_rectangle', 360, 640, true );
	
	/* Small */
	add_image_size( 'boldthemes_small_rectangle', 320, 180, true );
	add_image_size( 'boldthemes_small_vertical_rectangle', 180, 320, true );
}

add_action( 'after_setup_theme', 'tabula_custom_image_sizes', 11);


// COLOR SCHEME

if ( is_file( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' ) ) {
	require_once( dirname(__FILE__) . '/../../../../plugins/bold-page-builder/content_elements_misc/misc.php' );
}
if ( function_exists('bt_bb_get_color_scheme_param_array') ) {
	$color_scheme_arr = bt_bb_get_color_scheme_param_array();
} else {
	$color_scheme_arr = array();
}


// ROW - NEGATIVE MARGIN, COLOR SCHEME, SHADOW, BACKGROUND IMAGE

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_row', array(
		array( 'param_name' => 'negative_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Negative Margin', 'tabula' ), 'group' => esc_html__( 'General', 'tabula' ), 'preview' => true,
		'value' => array(
				esc_html__( 'No margin', 'tabula' ) 	=> '',
				esc_html__( 'Small', 'tabula' ) 		=> 'small',
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Medium', 'tabula' ) 		=> 'medium',
				esc_html__( 'Large', 'tabula' ) 		=> 'large',
				esc_html__( 'Extra Large', 'tabula' ) 	=> 'extralarge',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' ) 		=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
		array( 'param_name' => 'color_scheme', 'preview' => true, 'type' => 'dropdown', 'weight' => 7, 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr ),
		array( 'param_name' => 'shape', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Row shape', 'tabula' ),
			'value' => array(
				esc_html__( 'Inherit', 'tabula' ) 		=> 'inherit',
				esc_html__( 'Square', 'tabula' ) 		=> 'square',
				esc_html__( 'Hard rounded', 'tabula' ) => 'hard-rounded',
				esc_html__( 'Soft rounded', 'tabula' ) => 'soft-rounded'
			)
		),
		array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Shadow', 'tabula' ), 
			'value' => array(
				esc_html__( 'Default', 'tabula' ) 		=> '',
				esc_html__( 'Shadow', 'tabula' ) 		=> 'visible'
			)
		),
		array( 'param_name' => 'background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Background image', 'tabula' ), 'group' => esc_html__( 'General', 'tabula' ) )
		)
	);
}

function tabula_bt_bb_row_class( $class, $atts ) {
	if ( isset( $atts['negative_margin'] ) && $atts['negative_margin'] != '' ) {
		$class[] = 'bt_bb_negative_margin' . '_' . $atts['negative_margin'];
	}
	if ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) {
		$class[] = 'bt_bb_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['color_scheme'] );
	}
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	if ( isset( $atts['shadow'] ) && $atts['shadow'] != '' ) {
		$class[] = 'bt_bb_shadow' . '_' . $atts['shadow'];
	}
	if ( isset( $atts['background_image'] ) && $atts['background_image'] != '' ) {
		$class[] = 'bt_bb_row_with_bg_image';
	}
	return $class;
}

function tabula_bt_bb_row_style_attr( $style_attr, $atts ) {
	if ( isset( $atts['background_image'] ) && $atts['background_image'] != '' ) {
		$background_image = wp_get_attachment_image_src( $atts['background_image'], 'full' );
		$background_image_url = $background_image[0];
		$background_image_style = 'background-image:url(\'' . $background_image_url . '\');';
		if ( $style_attr == '' ) {
			$style_attr = 'style="' . esc_attr( $background_image_style ) . '"';
		} else {
			$style_attr = $style_attr . '; ' . esc_attr( $background_image_style ) . '"';
		}
	}
	return $style_attr;
}

add_filter( 'bt_bb_row_class', 'tabula_bt_bb_row_class', 10, 2 );
add_filter( 'bt_bb_row_style_attr', 'tabula_bt_bb_row_style_attr', 10, 2 );


// INNER ROW - NEGATIVE MARGIN, COLOR SCHEME, SHADOW

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_row_inner', array(
		array( 'param_name' => 'negative_margin', 'type' => 'dropdown', 'heading' => esc_html__( 'Negative margin', 'tabula' ), 'group' => esc_html__( 'General', 'tabula' ), 'preview' => true,
		'value' => array(
				esc_html__( 'No margin', 'tabula' ) 	=> '',
				esc_html__( 'Small', 'tabula' ) 		=> 'small',
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Medium', 'tabula' ) 		=> 'medium',
				esc_html__( 'Large', 'tabula' ) 		=> 'large',
				esc_html__( 'Extra Large', 'tabula' ) 	=> 'extralarge',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' ) 		=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
		array( 'param_name' => 'color_scheme', 'preview' => true, 'type' => 'dropdown', 'weight' => 7, 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr ),
		array( 'param_name' => 'shape', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Row shape', 'tabula' ),
			'value' => array(
				esc_html__( 'Inherit', 'tabula' ) 		=> 'inherit',
				esc_html__( 'Square', 'tabula' ) 		=> 'square',
				esc_html__( 'Hard rounded', 'tabula' ) => 'hard-rounded',
				esc_html__( 'Soft rounded', 'tabula' ) => 'soft-rounded'
			)
		),
		array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Shadow', 'tabula' ), 
			'value' => array(
				esc_html__( 'Default', 'tabula' ) 		=> '',
				esc_html__( 'Shadow', 'tabula' ) 		=> 'visible'
			)
		)
	));
}

function tabula_bt_bb_row_inner_class( $class, $atts ) {
	if ( isset( $atts['negative_margin'] ) && $atts['negative_margin'] != '' ) {
		$class[] = 'bt_bb_negative_margin' . '_' . $atts['negative_margin'];
	}
	if ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) {
		$class[] = 'bt_bb_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['color_scheme'] );
	}
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	if ( isset( $atts['shadow'] ) && $atts['shadow'] != '' ) {
		$class[] = 'bt_bb_shadow' . '_' . $atts['shadow'];
	}
	return $class;
}

add_filter( 'bt_bb_row_inner_class', 'tabula_bt_bb_row_inner_class', 10, 2 );



// COLUMN - PADDING, SHADOW, SHAPE

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_column', 'padding' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_column', array(
		array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Inner padding', 'tabula' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Double', 'tabula' ) 		=> 'double',
				esc_html__( 'Text Indent', 'tabula' ) 	=> 'text_indent',
				esc_html__( '0px', 'tabula' ) 			=> '0',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' ) 		=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
		array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Show shadow', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'No', 'tabula' ) 									=> '',
				esc_html__( 'Yes', 'tabula' ) 									=> 'visible',
				esc_html__( 'Yes (inner content)', 'tabula' ) 					=> 'inner-shadow',
				esc_html__( 'Yes (on hover)', 'tabula' ) 						=> 'hover-visible',
				esc_html__( 'Yes (on hover - inner content)', 'tabula' ) 		=> 'hover-inner-visible'
			)
		),
		array( 'param_name' => 'shape', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Column shape', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'Inherit', 'tabula' ) 		=> 'inherit',
				esc_html__( 'Square', 'tabula' ) 		=> 'square',
				esc_html__( 'Hard rounded', 'tabula' ) => 'hard-rounded',
				esc_html__( 'Soft rounded', 'tabula' ) => 'soft-rounded'
			)
		),
	));
}

function tabula_bt_bb_column_class( $class, $atts ) {
	if ( isset( $atts['shadow'] ) && $atts['shadow'] != '' ) {
		$class[] = 'bt_bb_shadow' . '_' . $atts['shadow'];
	}
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	return $class;
}

add_filter( 'bt_bb_column_class', 'tabula_bt_bb_column_class', 10, 2 );



// INNER COLUMN - PADDING, SHADOW, SHAPE

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_column_inner', 'padding' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_column_inner', array(
		array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Inner padding', 'tabula' ), 'preview' => true,
			'value' => array(
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Double', 'tabula' ) 		=> 'double',
				esc_html__( 'Text Indent', 'tabula' ) 	=> 'text_indent',
				esc_html__( '0px', 'tabula' ) 			=> '0',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' ) 		=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
		array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Show shadow', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'No', 'tabula' ) 									=> '',
				esc_html__( 'Yes', 'tabula' ) 									=> 'visible',
				esc_html__( 'Yes (inner content)', 'tabula' ) 					=> 'inner-shadow',
				esc_html__( 'Yes (on hover)', 'tabula' ) 						=> 'hover-visible',
				esc_html__( 'Yes (on hover - inner content)', 'tabula' ) 		=> 'hover-inner-visible'
			)
		),
		array( 'param_name' => 'shape', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Column shape', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'Inherit', 'tabula' ) 		=> 'inherit',
				esc_html__( 'Square', 'tabula' ) 		=> 'square',
				esc_html__( 'Hard rounded', 'tabula' ) => 'hard-rounded',
				esc_html__( 'Soft rounded', 'tabula' ) => 'soft-rounded'
			)
		),
	));
}

function tabula_bt_bb_column_inner_class( $class, $atts ) {
	if ( isset( $atts['shadow'] ) && $atts['shadow'] != '' ) {
		$class[] = 'bt_bb_shadow' . '_' . $atts['shadow'];
	}
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	return $class;
}

add_filter( 'bt_bb_column_inner_class', 'tabula_bt_bb_column_inner_class', 10, 2 );



// SEPARATOR - SPACING

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'top_spacing' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_separator', 'bottom_spacing' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_separator', array(
		array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'tabula' ), 'weight' => 0, 'preview' => true,
			'value' => array(
				esc_html__( 'No spacing', 'tabula' ) 	=> '',
				esc_html__( 'Extra small', 'tabula' ) 	=> 'extra_small',
				esc_html__( 'Small', 'tabula' ) 		=> 'small',		
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Medium', 'tabula' )	 	=> 'medium',
				esc_html__( 'Large', 'tabula' ) 		=> 'large',
				esc_html__( 'Extra large', 'tabula' ) 	=> 'extra_large',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' )			=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
		array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'tabula' ), 'weight' => 1, 'preview' => true,
			'value' => array(
				esc_html__( 'No spacing', 'tabula' ) 	=> '',
				esc_html__( 'Extra small', 'tabula' ) 	=> 'extra_small',
				esc_html__( 'Small', 'tabula' ) 		=> 'small',		
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Medium', 'tabula' ) 		=> 'medium',
				esc_html__( 'Large', 'tabula' ) 		=> 'large',
				esc_html__( 'Extra large', 'tabula' ) 	=> 'extra_large',
				esc_html__( '5px', 'tabula' ) 			=> '5',
				esc_html__( '10px', 'tabula' ) 		=> '10',
				esc_html__( '15px', 'tabula' ) 		=> '15',
				esc_html__( '20px', 'tabula' ) 		=> '20',
				esc_html__( '25px', 'tabula' ) 		=> '25',
				esc_html__( '30px', 'tabula' ) 		=> '30',
				esc_html__( '35px', 'tabula' ) 		=> '35',
				esc_html__( '40px', 'tabula' ) 		=> '40',
				esc_html__( '45px', 'tabula' ) 		=> '45',
				esc_html__( '50px', 'tabula' ) 		=> '50',
				esc_html__( '60px', 'tabula' ) 		=> '60',
				esc_html__( '70px', 'tabula' ) 		=> '70',
				esc_html__( '80px', 'tabula' ) 		=> '80',
				esc_html__( '90px', 'tabula' ) 		=> '90',
				esc_html__( '100px', 'tabula' ) 		=> '100',
				esc_html__( '110px', 'tabula' ) 		=> '110',
				esc_html__( '120px', 'tabula' ) 		=> '120',
				esc_html__( '130px', 'tabula' ) 		=> '130',
				esc_html__( '140px', 'tabula' ) 		=> '140',
				esc_html__( '150px', 'tabula' ) 		=> '150'
			)
		),
	));
}


// HEADLINE - DASH, DASH COLOR SCHEME, FONT WEIGHT, SIZE

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'font_weight' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'size' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'dash' );
}
if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'superheadline' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_headline', array(
		array( 'param_name' => 'superheadline', 'type' => 'textfield', 'weight' => 1, 'preview' => true, 'heading' => esc_html__( 'Superheadline', 'tabula' ) ),
		array( 'param_name' => 'size', 'type' => 'dropdown', 'preview' => true, 'heading' => esc_html__( 'Size', 'tabula' ), 'description' => 'Predefined heading sizes, independent of html tag',
			'value' => array(
				esc_html__( 'Inherit', 'tabula' ) 				=> 'inherit',
				esc_html__( 'Extra small', 'tabula' ) 			=> 'extrasmall',
				esc_html__( 'Small', 'tabula' ) 				=> 'small',
				esc_html__( 'Medium', 'tabula' ) 				=> 'medium',
				esc_html__( 'Normal', 'tabula' ) 				=> 'normal',
				esc_html__( 'Large', 'tabula' ) 				=> 'large',
				esc_html__( 'Extra large', 'tabula' ) 			=> 'extralarge',
				esc_html__( 'Huge', 'tabula' ) 				=> 'huge',
				esc_html__( 'Extra huge', 'tabula' ) 			=> 'extrahuge',
				esc_html__( 'Extra extra huge', 'tabula' ) 	=> 'extraextrahuge'
			)
		),
		array( 'param_name' => 'font_weight', 'type' => 'dropdown', 'heading' => esc_html__( 'Font weight', 'tabula' ), 'preview' => true, 'group' => esc_html__( 'Font', 'tabula' ),
			'value' => array(
				esc_html__( 'Default', 'tabula' ) 		=> '',
				esc_html__( 'Thin', 'tabula' ) 		=> 'thin',
				esc_html__( 'Lighter', 'tabula' ) 		=> 'lighter',
				esc_html__( 'Light', 'tabula' ) 		=> 'light',
				esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
				esc_html__( 'Medium', 'tabula' ) 		=> 'medium',
				esc_html__( 'Semi bold', 'tabula' ) 	=> 'semi-bold',
				esc_html__( 'Bold', 'tabula' ) 		=> 'bold',
				esc_html__( 'Bolder', 'tabula' ) 		=> 'bolder',
				esc_html__( 'Black', 'tabula' ) 		=> 'black'
			)
		),
		array( 'param_name' => 'dash', 'type' => 'dropdown', 'heading' => esc_html__( 'Dash', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'None', 'tabula' ) 				=> 'none',
				esc_html__( 'Large dash', 'tabula' ) 			=> 'top',
				esc_html__( 'Small dash', 'tabula' ) 			=> 'bottom',
				esc_html__( 'Small & large dash', 'tabula' ) 	=> 'top_bottom'
			)
		),
		array( 'param_name' => 'dash_type', 'type' => 'dropdown', 'heading' => esc_html__( 'Dash type', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'Default', 'tabula' ) 				=> '',
				esc_html__( 'Art Dot', 'tabula' ) 				=> 'dot',
				esc_html__( 'Simple Circle', 'tabula' ) 		=> 'circle',
				esc_html__( 'Speech Balloon', 'tabula' ) 		=> 'balloon',
				esc_html__( 'Guitar Pick', 'tabula' ) 			=> 'guitar',
				esc_html__( 'Star', 'tabula' ) 				=> 'star'
			)
		),
		array( 'param_name' => 'dash_color_scheme', 'preview' => true, 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'tabula' ), 'heading' => esc_html__( 'Dash color scheme', 'tabula' ), 'value' => $color_scheme_arr ),
	));
}

function tabula_bt_bb_headline_class( $class, $atts ) {
	if ( isset( $atts['dash_color_scheme'] ) && $atts['dash_color_scheme'] != '' ) {
		$class[] = 'bt_bb_dash_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['dash_color_scheme'] );
	}
	if ( isset( $atts['dash_type'] ) && $atts['dash_type'] != '' ) {
		$class[] = 'bt_bb_dash_type' . '_' . $atts['dash_type'];
	}
	return $class;
}

add_filter( 'bt_bb_headline_class', 'tabula_bt_bb_headline_class', 10, 2 );


// BUTTONS - SIZE

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_button', 'size' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_button', array(
		array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'tabula' ), 'preview' => true, 'weight' => 1, 'group' => esc_html__( 'Design', 'tabula' ),
			'value' => array(
				esc_html__( 'Small', 'tabula' ) 	=> 'small',
				esc_html__( 'Medium', 'tabula' ) 	=> 'medium',
				esc_html__( 'Large', 'tabula' ) 	=> 'large'
			)
		),
	));
}


// SLIDER - ARROWS COLOR SCHEME

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_content_slider', array(
		array( 'param_name' => 'color_scheme', 'preview' => true, 'type' => 'dropdown', 'weight' => 7, 'heading' => esc_html__( 'Navigation color scheme', 'tabula' ), 'value' => $color_scheme_arr ),
	));
}

function tabula_bt_bb_content_slider_class( $class, $atts ) {
	if ( isset( $atts['color_scheme'] ) && $atts['color_scheme'] != '' ) {
		$class[] = 'bt_bb_color_scheme' . '_' . bt_bb_get_color_scheme_id( $atts['color_scheme'] );
	}
	return $class;
}

add_filter( 'bt_bb_content_slider_class', 'tabula_bt_bb_content_slider_class', 10, 2 );


// IMAGE SLIDER

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_slider', array(
		array( 'param_name' => 'shape', 'default' => 'inherit', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ),
			'value' => array(
				esc_html__( 'Square', 'tabula' ) 		=> '',
				esc_html__( 'Soft rounded', 'tabula' ) => 'soft-rounded'
			)
		)
	) );
}

function tabula_bt_bb_slider_class( $class, $atts ) {
	if ( isset( $atts['shape'] ) && $atts['shape'] != '' ) {
		$class[] = 'bt_bb_shape' . '_' . $atts['shape'];
	}
	return $class;
}
add_filter( 'bt_bb_slider_class', 'tabula_bt_bb_slider_class', 10, 2 );


function wp_affiliate_links($text){
		if(is_user_logged_in()){
	$replace = array();
		} else {
    $replace = array(
	
		'/ website /' => ' <a href="https://www.theidioms.com/#" class="fr">website</a> ',
		'/ home /' => ' <a href="https://www.theidioms.com/#" class="fr">home</a> ',
 		'/ visit /' => ' <a href="https://www.theidioms.com/#" class="fr">visit</a> ',
        '/ love /' => ' <a href="https://www.theidioms.com/love/#" class="fr">love</a> ',
        '/ contact /' => ' <a href="https://www.theidioms.com/contact/#" class="fr">contact</a> ',
        '/ click /' => ' <a href="https://www.theidioms.com/#" class="fr">click</a> ',
        '/ source /' => ' <a href="https://www.theidioms.com/#" class="fr">source</a> ',
        '/ here /' => ' <a href="https://www.theidioms.com/#" class="fr">here</a> ',
        '/ English /' => ' <a href="https://www.englif.com/#" class="fr">English</a> ',
		'/ list /' => ' <a href="https://www.theidioms.com/list/#" class="fr">list</a> ',
		'/ idiom /' => ' <a href="https://www.theidioms.com/#" class="fr">idiom</a> ',
		'/ idioms /' => ' <a href="https://www.theidioms.com/#" class="fr">idioms</a> ',
		'/ phrase /' => ' <a href="https://www.theidioms.com/#" class="fr">phrase</a> ',
		'/ phrases /' => ' <a href="https://www.theidioms.com/#" class="fr">phrases</a> ',
        '/ site /' => ' <a href="https://www.theidioms.com/#" class="fr">site</a> ',
	);
		}
	$text = preg_replace( array_keys($replace), $replace, $text, 1 );
	return $text;
	}
add_filter('the_content', 'wp_affiliate_links');
add_filter('the_excerpt', 'wp_affiliate_links');
add_filter('comment_text', 'wp_affiliate_links');