<?php

class bt_bb_service extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'icon'         => '',
			'title'        => '',
			'text'         => '',
			'button_text'  => '',
			'url'          => '',
			'target'       => '',
			'color_scheme' => '',
			'style'        => '',
			'size'         => '',
			'shape'        => '',
			'align'        => ''
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

		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}

		if ( $size != '' ) {
			$class[] = $this->prefix . 'size' . '_' . $size;
		}

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		if ( $align != '' ) {
			$class[] = $this->prefix . 'align' . '_' . $align;
		}
		
		$link = bt_bb_get_url( $url );
		
		$icon = bt_bb_icon::get_html( $icon, '', $link, $target );

		if ( $link != '' ) {
			$title = '<a href="' . esc_url( $link ) . '" target="' . esc_attr( $target ) . '">' . $title . '</a>';
		} 

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		if ( $icon != '' ) $output = $icon;

		$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content">';
			
			if ( $title != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_title">' . $title . '</div>';
			if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_text">' . nl2br( $text ) . '</div>';

			if ( ( $link != '' ) && ( $button_text != '' ) ) {
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_button_text">';
					$output .= '<a href="' . esc_url( $link ) . '" target="' . esc_attr( $target ) . '">' . $button_text . '</a>';
				$output .= '</div>';
			}

		$output .= '</div>';

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output . '</div>';
		
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

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Service', 'tabula' ), 'description' => esc_html__( 'Icon with text', 'tabula' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'tabula' ), 'value' => $icon_arr, 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'text', 'type' => 'textarea', 'heading' => esc_html__( 'Text', 'tabula' ) ),
				array( 'param_name' => 'button_text', 'type' => 'textfield', 'heading' => esc_html__( 'Button text', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'tabula' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'tabula' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'tabula' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'tabula' ) => '_blank',
					)
				),
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon alignment', 'tabula' ),
					'value' => array(
						esc_html__( 'Inherit', 'tabula' )	=> 'inherit',
						esc_html__( 'Left', 'tabula' ) 	=> 'left',
						esc_html__( 'Right', 'tabula' ) 	=> 'right'
					)
				),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon size', 'tabula' ), 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Small', 'tabula' ) 		=> 'small',
						esc_html__( 'Extra small', 'tabula' ) 	=> 'xsmall',
						esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
						esc_html__( 'Large', 'tabula' ) 		=> 'large',
						esc_html__( 'Extra large', 'tabula' ) 	=> 'xlarge'
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ) ),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon style', 'tabula' ), 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Outline', 'tabula' ) 		=> 'outline',
						esc_html__( 'Filled', 'tabula' ) 		=> 'filled',
						esc_html__( 'Borderless', 'tabula' ) 	=> 'borderless'
					)
				),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon shape', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Circle', 'tabula' ) 			=> 'circle',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Rounded Square', 'tabula' ) 	=> 'round'
					)
				)
			)
		) );
	}
}