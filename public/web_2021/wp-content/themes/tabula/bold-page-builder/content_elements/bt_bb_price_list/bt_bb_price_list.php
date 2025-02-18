<?php

class bt_bb_price_list extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'supertitle'   		=> '',
			'currency'     		=> '',
			'price'        		=> '',
			'title'        		=> '',
			'description'  		=> '',
			'style'  			=> '',
			'shape'     		=> '',
			'background_color' 	=> '',
			'opacity'	       	=> '',
			'color_scheme' 		=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $background_color != '' ) {
			$background_color = bt_bb_column::hex2rgb( $background_color );
			if ( $opacity == '' ) {
				$opacity = 1;
			}
			$el_style .= 'background-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		$class_attr = implode( ' ', $class );

		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
		

		$output = '';
		$output .= '<div' . $id_attr . ' class="' . esc_attr( $class_attr ) . '"' . $style_attr . '>';

			// SUPERTITLE
			if ( $supertitle != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_supertitle' ) . '">' . $supertitle . '</div>';
			
			// CURRENCY
			$output .= '<div class="' . esc_attr( $this->shortcode . '_price' ) . '">';
				$output .= '<span class="' . esc_attr( $this->shortcode . '_currency' ) . '">' . $currency . '</span>';
				$output .= '<div class="' . esc_attr( $this->shortcode . '_amount' ) . '">' . do_shortcode( "[bt_bb_counter number='" . $price . "']" ) . '</div>';
			$output .= '</div>';

			// TITLE
			if ( $title != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $title . '</div>';
			// DESC
			if ( $description != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_description' ) . '">' . $description . '</div>';
		
		$output .= '</div>';


		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();			
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Price List', 'tabula' ), 'description' => esc_html__( 'List of items with total price', 'tabula' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'supertitle', 'type' => 'textfield', 'heading' => esc_html__( 'Supertitle', 'tabula' ) ),
				array( 'param_name' => 'currency', 'type' => 'textfield', 'heading' => esc_html__( 'Currency', 'tabula' ) ),
				array( 'param_name' => 'price', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'Price', 'tabula' ) ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'tabula' ), 'preview' => true ),			
				array( 'param_name' => 'description', 'type' => 'textarea', 'heading' => esc_html__( 'Description', 'tabula' ) ),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'tabula' ), 'heading' => esc_html__( 'Style', 'tabula' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Borderless', 'tabula' ) 	=> 'borderless',
						esc_html__( 'Outline', 'tabula' ) 		=> 'outline',
						esc_html__( 'Filled', 'tabula' ) 		=> 'filled'		
				) ),
				array( 'param_name' => 'shape', 'default' => '', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'tabula' ), 'heading' => esc_html__( 'Shape', 'tabula' ), 
					'value' => array(
						esc_html__( 'Inherit', 'tabula' ) 			=> '',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Hard rounded', 'tabula' ) 	=> 'hard-rounded',
						esc_html__( 'Soft rounded', 'tabula' )		=> 'soft-rounded'
					)
				),
				array( 'param_name' => 'background_color', 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ), 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'tabula' ) ),
				array( 'param_name' => 'opacity', 'type' => 'textfield', 'group' => esc_html__( 'Design', 'tabula' ), 'heading' => esc_html__( 'Background color opacity (e.g. 0.4)', 'tabula' ) ), 
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'group' => esc_html__( 'Design', 'tabula' ), 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr, 'preview' => true ),
			)
		) );
	}

	static function hex2rgb( $hex ) {
		$hex = str_replace( '#', '', $hex );
		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}
		$rgb = array( $r, $g, $b );
		return $rgb;
	}

}