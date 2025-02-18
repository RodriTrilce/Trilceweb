<?php

class bt_bb_schedule extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'supertitle'			=> '',
			'title'					=> '',
			'image'  				=> '',
			'image_position'  		=> '',
			'content'				=> '',
			'shape'     			=> '',
			'color_scheme' 			=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		$bg_style = '';
		$size = '';
		if ( $image != '' && is_numeric( $image ) ) {
			$post_image = get_post( $image );
			if ( $post_image == '' ) return;
			$size = " boldthemes_large_rectangle";
			$image = wp_get_attachment_image_src( $image, $size );
			$image = $image[0];
			
			$class[] = "btHasBgImage";
			$bg_style = "style = \"background-image:url('" . $image . "')\"";
		}

		if ( $image_position == 'background' ) {
			$size = '';
			if ( $image != '' && is_numeric( $image ) ) {
				$post_image = get_post( $image );
				if ( $post_image == '' ) return;
				$size = " boldthemes_large_rectangle";
				$image = wp_get_attachment_image_src( $image, $size );
				$image = $image[0];
			}
			$class[] = "btBackgroundImage";
			$el_style = $el_style . ';' . 'background-image: url(' . $image . ')' . ';';
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$output_inner = '';
		$items_arr = preg_split( '/$\R?^/m', $content );
		if ( count( $items_arr ) > 0 ) {
			foreach ( $items_arr as $item ) { 
				$item = preg_replace('~[\r\n]+~', '', $item);
				if ( $item == '' ) break;
				$item_arr = explode( ';', $item );
				if ( count( $item_arr ) < 2 ) break;
				$bt_extra_row_class = '';
				$bt_extra_data = '';
				if ( isset( $item_arr[2] ) ) {
					$bt_extra_data = ' data-day="' . esc_attr( $item_arr[2] ) . '"';
					if ( strtolower ( date('D') ) ==  strtolower ( $item_arr[2] )) $bt_extra_row_class = ' btToday';	
				}
				$output_inner .= '<div class="' . esc_attr( $this->shortcode . '_inner_row' ) . $bt_extra_row_class . '"' . $bt_extra_data . '>';
					$output_inner .= '<div class="' . esc_attr( $this->shortcode . '_day' ) . '">';
						$output_inner .= '<span class="' . esc_attr( $this->shortcode . '_week_day' ) . '">' . $item_arr[0] . '</span>';
						if ( isset ($item_arr[3]) && $item_arr[3] != '' )  $output_inner .= '<span class="' . esc_attr( $this->shortcode . '_inner_location' ) . '">' . $item_arr[3] . '</span>';
					$output_inner .= '</div>';
					$output_inner .= '<div class="' . esc_attr( $this->shortcode . '_time' ) . '">';
						$output_inner .= '<span class="' . esc_attr( $this->shortcode . '_hours' ) . '">' . $item_arr[1] . '</span>';
						if ( isset ( $item_arr[4] ) && $item_arr[4] != '' ) $output_inner .= '<span class="' . esc_attr( $this->shortcode . '_inner_desc' ) . '">' . $item_arr[4] . '</span>';
					$output_inner .= '</div>';
				$output_inner .= '</div>';				
			} 
		}

		if ( $image_position == '' ) {
			$output = '<div class="' . esc_attr( $this->shortcode ) . '_title_flex" ' . $bg_style . '>';
				if ( $supertitle != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_supertitle' ) . '">' . $supertitle . '</div>';
				if ( $title != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $title . '</div>';
			$output .= '</div>';
		} else if ( $image_position == 'background' ) {
			$output = '<div class="' . esc_attr( $this->shortcode ) . '_title_flex">';
				if ( $supertitle != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_supertitle' ) . '">' . $supertitle . '</div>';
				if ( $title != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $title . '</div>';
			$output .= '</div>';
		}

		$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
			$output .= $output_inner;
		$output .= '</div>';

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
	}	

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Schedule', 'tabula' ), 'description' => esc_html__( 'Schedule list', 'tabula' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'supertitle', 'type' => 'textfield', 'heading' => esc_html__( 'Supertitle', 'tabula' ) ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'Title', 'tabula' ) ),
				array( 'param_name' => 'image', 'type' => 'attach_image', 'heading' => esc_html__( 'Background image', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'image_position', 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Image position', 'tabula' ), 
					'value' => array(
						esc_html__( 'Top', 'tabula' ) 				=> '',
						esc_html__( 'Background', 'tabula' ) 		=> 'background'
					)
				),
				array( 'param_name' => 'content', 'type' => 'textarea', 'heading' => esc_html__( 'Schedule', 'tabula' ), 'description' => esc_html__( 'day;time;day abbreviation (e.x. MON for monday);location;description', 'tabula' )
				),
				array( 'param_name' => 'shape', 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ), 
					'value' => array(
						esc_html__( 'Inherit', 'tabula' ) 			=> '',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Hard rounded', 'tabula' ) 	=> 'hard-rounded',
						esc_html__( 'Soft rounded', 'tabula' )		=> 'soft-rounded'
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr )
			))
		);
	}
}