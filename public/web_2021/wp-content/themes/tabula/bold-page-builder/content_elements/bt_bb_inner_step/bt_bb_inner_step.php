<?php

class bt_bb_inner_step extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'title' 			=> '',
			'html_tag'      	=> 'h3',
			'text' 				=> '',
			'image' 			=> ''
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

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$output = '';
		$output .= '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>';

			// CONTENT
			$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content bt_bb_animation_fade_in animate">';
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_holder">';
					if ( $title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode ) . '_title">' . $title . '</' . $html_tag . '>';
					if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_text">' . $text . '</div>';
					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_inner_content">';
						if ( $content != '' ) $output .=  wpautop( wptexturize( do_shortcode( $content ) ) );
					$output .= '</div>';
				$output .= '</div>';
			$output .= '</div>';

			// IMAGES
			if ( $image != '' ) $output .=  '<div class="' . esc_attr( $this->shortcode . '_image bt_bb_animation_fade_in animate') . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" size="medium"]' ) . '</div>';

		$output .= '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
		
		return $output;

	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Inner step', 'tabula' ), 'description' => esc_html__( 'Inner step element', 'tabula' ), 'as_child' => array( 'only' => 'bt_bb_step_line' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_separator' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'tabula' ),
					'value' => array(
						esc_html__( 'h1', 'tabula' ) => 'h1',
						esc_html__( 'h2', 'tabula' ) => 'h2',
						esc_html__( 'h3', 'tabula' ) => 'h3',
						esc_html__( 'h4', 'tabula' ) => 'h4',
						esc_html__( 'h5', 'tabula' ) => 'h5',
						esc_html__( 'h6', 'tabula' ) => 'h6'
				) ),
				array( 'param_name' => 'text', 'type' => 'textarea', 'heading' => esc_html__( 'Text', 'tabula' ) ),
				array( 'param_name' => 'image', 'type' => 'attach_image', 'heading' => esc_html__( 'Image', 'tabula' ) )				
			)
		) );
	}
}