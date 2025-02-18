<?php

class bt_bb_event extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'event_day'        		=> '',
			'event_month'        	=> '',
			'event_title'        	=> '',
			'html_tag'      		=> 'h3',
			'title_size'        	=> '',
			'event_image'        	=> '',
			'event_description'     => '',
			'shape'     			=> ''
		) ), $atts, $this->shortcode ) );

		$event_title = html_entity_decode( $event_title, ENT_QUOTES, 'UTF-8' );

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

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		if ( $title_size != '' ) {
			$class[] = $this->prefix . 'title_size' . '_' . $title_size;
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$content = do_shortcode( $content );
	
		$output = '';

		$output .= '<div class="' . esc_attr( $this->shortcode ) . '">';
			if ( $event_image != '' ) $output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $event_image ) . '" size="medium"]' ) . '</div>';

			$output .= '<div class="' . esc_attr( $this->shortcode . '_content' ) . '">';
				if ( ( $event_month != '' ) || ( $event_day != '' ) ) $output .= '<div class="' . esc_attr( $this->shortcode . '_date' ) . '">';
					if ( $event_month != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_date_month' ) . '">' . wp_kses_post( $event_month ) . '</div>';
					if ( $event_day != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_date_day' ) . '">' . wp_kses_post( $event_day ) . '</div>';
				$output .= '</div>';

				if ( $event_title != '' ) $output .= '<'. $html_tag .' class="' . esc_attr( $this->shortcode . '_content_title' ) . '">' . wp_kses_post( $event_title ) . '</' . $html_tag . '>';
				if ( $event_description != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_content_description' ) . '">' . wp_kses_post( nl2br( $event_description ) ) . '</div>';
				if ( $content != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_content_inner' ) . '">' . ( $content ) . '</div>';

			$output .= '</div>';
		$output .= '</div>';

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Event', 'tabula' ), 'description' => esc_html__( 'Event with description and image', 'tabula' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_separator' => true, 'bt_bb_text' => true, 'bt_bb_headline' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'event_image', 'type' => 'attach_image', 'heading' => esc_html__( 'Image', 'tabula' ) ),
				array( 'param_name' => 'event_month', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'Month', 'tabula' ) ),
				array( 'param_name' => 'event_day', 'type' => 'textfield', 'preview' => true, 'heading' => esc_html__( 'Day', 'tabula' ) ),
				array( 'param_name' => 'event_title', 'preview' => true, 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'default' => 'h3', 'heading' => esc_html__( 'HTML tag', 'tabula' ), 
					'value' => array(
						esc_html__( 'h1', 'tabula' ) => 'h1',
						esc_html__( 'h2', 'tabula' ) => 'h2',
						esc_html__( 'h3', 'tabula' ) => 'h3',
						esc_html__( 'h4', 'tabula' ) => 'h4',
						esc_html__( 'h5', 'tabula' ) => 'h5',
						esc_html__( 'h6', 'tabula' ) => 'h6'
				) ),
				array( 'param_name' => 'title_size', 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Title size', 'tabula' ), 
					'value' => array(
						esc_html__( 'Small', 'tabula' ) 			=> 'small',
						esc_html__( 'Normal', 'tabula' ) 			=> '',
						esc_html__( 'Large', 'tabula' ) 			=> 'large'
				) ),
				array( 'param_name' => 'event_description', 'type' => 'textarea', 'heading' => esc_html__( 'Description', 'tabula' ) ),
				array( 'param_name' => 'shape', 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ), 
					'value' => array(
						esc_html__( 'Inherit', 'tabula' ) 			=> '',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Hard rounded', 'tabula' ) 	=> 'hard-rounded',
						esc_html__( 'Soft rounded', 'tabula' )		=> 'soft-rounded'
					)
				)
			)
		) );
	}
}