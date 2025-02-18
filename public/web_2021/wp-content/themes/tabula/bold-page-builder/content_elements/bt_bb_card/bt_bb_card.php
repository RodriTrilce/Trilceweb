<?php

class bt_bb_card extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'image'      					=> '',
			'image_position'  				=> '',
			'image_format'					=> 'square',
			'image_base_size'				=> 'full',
			'lazy_load'  					=> 'no',
			'supertitle'					=> '',
			'title'							=> '',
			'html_tag'      				=> 'h3',
			'title_size'					=> '',
			'dash'							=> '',
			'text'							=> '',
			'button_text'					=> '',
			'url'         		 			=> '',
			'target'       					=> '',
			'shape'							=> '',
			'color_scheme' 					=> ''
		) ), $atts, $this->shortcode ) );

		$title = html_entity_decode( $title, ENT_QUOTES, 'UTF-8' );
		
		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $title_size != '' ) {
			$class[] = $this->prefix . 'title_size' . '_' . $title_size;
		}

		if ( $dash != '' ) {
			$class[] = $this->prefix . 'dash' . '_' . $dash;
		}

		if ( $image_position != '' ) {
			$image_position_arr = explode( ' ', $image_position );
			$class[] = $this->prefix . 'image_position' . '_' . $image_position_arr[0];
			if ( count( $image_position_arr ) > 1 ) {
				$class[] = $this->prefix . 'content_position' . '_' . $image_position_arr[1];
			}
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
	
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}


		$output = '';

		$link = bt_bb_get_permalink_by_slug( $url );

		// IMAGE
		
		if ( $image_base_size != 'full' && $image_base_size != '' ) {
			$image_size = 'boldthemes_' . esc_attr( $image_base_size ) . '_' . esc_attr( $image_format ) ; 
		} else {
			$image_size = 'full';
		}
		
		if ( $image != '' ) {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . $image  . '" size="' . $image_size  . '" lazy_load="' . $lazy_load . '"]' ) . '</div>';	
		} else if ( strpos( $image_position, 'background' ) !== false ) {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . get_template_directory_uri() . '/gfx/img_formats/boldthemes_' . $image_base_size . '_' . $image_format . '.png'  . '" size="full" lazy_load="' . $lazy_load . '"]' ) . '</div>';
			$class[] = 'bt_transparent_background';
		}
		
		// CONTENT
		$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '"><div class="' . esc_attr( $this->shortcode . '_content_inner' ) . '">';
			if ( $supertitle != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_supertitle' ) . '">' . wp_kses_post( $supertitle ) . '</div>';
			if ( $title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_title' ) . '">' . wp_kses_post( $title ) . '</' . $html_tag . '>';
			if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_text' ) . '">' . wp_kses_post( $text ) . '</div>';
			if ( ( $button_text != '' ) && ( $url != '') ) {
				$output .= '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '"><span class="' . esc_attr( $this->shortcode . '_button_text' ) . '">' . wp_kses_post( $button_text ) . '</span></a>';
			} else {
				$output .= '<span class="' . esc_attr( $this->shortcode . '_button_text' ) . '">' . wp_kses_post( $button_text ) . '</span>';
			}
		$output .= '</div></div>';

		

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Card', 'tabula' ), 'description' => esc_html__( 'Card with image and text', 'tabula' ), 
			'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'preview' => true, 'group' => esc_html__( 'Image', 'tabula' ), 'heading' => esc_html__( 'Image', 'tabula' ) 
				),
				array( 'param_name' => 'image_position', 'group' => esc_html__( 'Image', 'tabula' ), 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Image position', 'tabula' ), 
					'value' => array(
						esc_html__( 'Top', 'tabula' ) 								=> '',
						esc_html__( 'Background (content bottom)', 'tabula' ) 		=> 'background',
						esc_html__( 'Background (content middle)', 'tabula' ) 		=> 'background content_middle',
						esc_html__( 'Background (content top)', 'tabula' ) 		=> 'background content_top'
					)
				),	
				array( 'param_name' => 'image_base_size', 'default' => 'full', 'type' => 'dropdown', 'group' => esc_html__( 'Image', 'tabula' ), 'heading' => esc_html__( 'Image base size', 'tabula' ), 
					'value' => array(
						esc_html__( 'Full (ignores image format)', 'tabula' ) => 'full',
						esc_html__( 'Large', 'tabula' ) 	=> 'large',
						esc_html__( 'Medium', 'tabula' ) 	=> 'medium',
						esc_html__( 'Small', 'tabula' ) 	=> 'small'
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'group' => esc_html__( 'Image', 'tabula' ), 'heading' => esc_html__( 'Lazy load this image', 'tabula' ),
					'value' => array(
						esc_html__( 'No', 'tabula' ) 	=> 'no',
						esc_html__( 'Yes', 'tabula' ) 	=> 'yes'
					)
				),	
				array( 'param_name' => 'image_format', 'default' => 'vertical_rectangle', 'group' => esc_html__( 'Image', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Image format', 'tabula' ), 
					'value' => array(
						esc_html__( 'Square', 'tabula' ) 				=> 'square',
						esc_html__( 'Horizontal rectangle', 'tabula' ) => 'rectangle',
						esc_html__( 'Vertical rectangle', 'tabula' ) 	=> 'vertical_rectangle'
					)
				),
				array( 'param_name' => 'supertitle', 'group' => esc_html__( 'Text', 'tabula' ), 'type' => 'textfield', 'heading' => esc_html__( 'Supertitle', 'tabula' ) 
				),
				array( 'param_name' => 'title', 'type' => 'textfield', 'group' => esc_html__( 'Text', 'tabula' ), 'preview' => true, 'heading' => esc_html__( 'Title', 'tabula' ) 
				),
				array( 'param_name' => 'text', 'type' => 'textarea', 'group' => esc_html__( 'Text', 'tabula' ), 'heading' => esc_html__( 'Text', 'tabula' ) ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'group' => esc_html__( 'Text', 'tabula' ), 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'tabula' ),
					'value' => array(
						esc_html__( 'h1', 'tabula' ) => 'h1',
						esc_html__( 'h2', 'tabula' ) => 'h2',
						esc_html__( 'h3', 'tabula' ) => 'h3',
						esc_html__( 'h4', 'tabula' ) => 'h4',
						esc_html__( 'h5', 'tabula' ) => 'h5',
						esc_html__( 'h6', 'tabula' ) => 'h6'
				) ),
				array( 'param_name' => 'title_size', 'default' => '', 'group' => esc_html__( 'Text', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Title size', 'tabula' ),
					'value' => array(
						esc_html__( 'Small', 'tabula' ) 	=> 'small',
						esc_html__( 'Normal', 'tabula' ) 	=> '',
						esc_html__( 'Large', 'tabula' ) 	=> 'large'
					)
				),
				array( 'param_name' => 'dash', 'default' => '', 'group' => esc_html__( 'Text', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Show dash', 'tabula' ), 'description' => esc_html__( 'Define dash in WordPress Customizer > Typography', 'tabula' ),
					'value' => array(
						esc_html__( 'Yes', 'tabula' ) 	=> '',
						esc_html__( 'No', 'tabula' ) 	=> 'hide'
					)
				),
				array( 'param_name' => 'color_scheme', 'group' => esc_html__( 'Text', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Dash Color scheme', 'tabula' ), 'value' => $color_scheme_arr, 'preview' => true ),
				array( 'param_name' => 'button_text', 'group' => esc_html__( 'URL', 'tabula' ), 'type' => 'textfield', 'heading' => esc_html__( 'Button Text', 'tabula' ) 
				),
				array( 'param_name' => 'url', 'group' => esc_html__( 'URL', 'tabula' ), 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'tabula' ) ),
				array( 'param_name' => 'target', 'group' => esc_html__( 'URL', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'tabula' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'tabula' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'tabula' ) => '_blank',
					)
				),
				array( 'param_name' => 'shape', 'group' => esc_html__( 'Text', 'tabula' ), 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ), 
					'value' => array(
						esc_html__( 'Inherit', 'tabula' ) 			=> '',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Hard rounded', 'tabula' ) 	=> 'hard-rounded',
						esc_html__( 'Soft rounded', 'tabula' )		=> 'soft-rounded'
					)
				))
			)
		);
	}
}