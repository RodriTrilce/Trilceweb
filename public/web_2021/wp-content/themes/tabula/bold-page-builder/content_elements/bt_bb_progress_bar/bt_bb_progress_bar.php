<?php

class bt_bb_progress_bar extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'icon'				=> '',
			'text'				=> '',
			'percentage'        => '',
			'color_scheme' 		=> '',
			'size'        		=> '',
			'shape'        		=> ''
		) ), $atts, $this->shortcode ) );	

		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}
		
		
		if ( $size != '' ) {
			$class[] = $this->prefix . 'size' . '_' . $size;
		}		

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		$icon_html = bt_bb_icon::get_html( $icon, '' );

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$content = do_shortcode( $content );

		$output = '';


		

		// PROGRESS BAR
		$output .= '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>';
			if ( $text != '' ) $output .= '<span class="bt_bb_progress_bar_text">' . $text . '</span>';
			$output .= '<div class="bt_bb_progress_bar_bg"></div>';
			$output .= '<div class="bt_bb_progress_bar_inner animate" style="width:' . $percentage . '%">';
				// ICON	
				if ( $icon != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_icon' ) . '">' . $icon_html . '</div>';
			$output .= '</div>';
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		if ( function_exists('boldthemes_get_icon_fonts_bb_array') ) {
			$icon_arr = boldthemes_get_icon_fonts_bb_array();
		} else {
			require_once( dirname(__FILE__) . '/../../content_elements_misc/fa_icons.php' );
			require_once( dirname(__FILE__) . '/../../content_elements_misc/s7_icons.php' );
			$icon_arr = array( 'Font Awesome' => bt_bb_fa_icons(), 'S7' => bt_bb_s7_icons() );
		}

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
				
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Progress bar', 'tabula' ), 'description' => esc_html__( 'Progress bar', 'tabula' ), 'container' => 'vertical', 'accept' => false, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'percentage', 'type' => 'textfield', 'heading' => esc_html__( 'Percentage', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'tabula' ), 'value' => $icon_arr, 'preview' => true ),
				array( 'param_name' => 'text', 'type' => 'textfield', 'heading' => esc_html__( 'Text', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'default' => 'small', 'heading' => esc_html__( 'Size', 'tabula' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Small', 'tabula' ) => 'small',
						esc_html__( 'Normal', 'tabula' ) => 'normal'
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ) ),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Square', 'tabula' ) => 'square',
						esc_html__( 'Rounded', 'tabula' ) => 'rounded',
					)
				)				
			)
		) );
	}
}