<?php

class bt_bb_image extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'image'  							=> '',
			'size'   							=> '',
			'shape'  							=> '',
			'lazy_load'  						=> 'no',
			'image_height'  					=> '',
			'align'  							=> '',
			'caption'    						=> '',
			'url'    							=> '',
			'target' 							=> '',
			'hover_style'  						=> '',
			'content_display'  					=> '',
			'content_background_color' 			=> '',
			'content_background_opacity'	    => '',
			'content_align'						=> ''
		) ), $atts, $this->shortcode ) );
		
		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}
		
		if ( $hover_style == 'scroll' ) {
			$el_id = 'bt_bb_random_id_' . rand();
		}

		$style_attr = '';
		
		if ( $image_height != '' ) {
			$el_style .= 'height:' . $image_height . '; overflow: hidden;';
		}
		
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}	
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		
		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		if ( $align != '' ) {
			$class[] = $this->prefix . 'align' . '_' . $align;
		}
		
		if ( $hover_style != '' ) {
			$class[] = $this->prefix . 'hover_style' . '_' . $hover_style;
		}
		
		if ( $content_display != '' ) {
			$class[] = $this->prefix . 'content_display' . '_' . $content_display;
		}

		if ( $content_align != '' ) {
			$class[] = $this->prefix . 'content_align' . '_' . $content_align;
		}
		

		$alt = $caption;
		$title = $caption;
			
		if ( $image != '' && is_numeric( $image ) ) {
			$post_image = get_post( $image );
			if ( $post_image == '' ) return;
			
			if ( $alt == '' ) {
				$alt = get_post_meta($post_image->ID, '_wp_attachment_image_alt', true);
			}
			if ( $alt == '' ) {
				$alt = $post_image->post_excerpt;
			}
			if ( $title == '' ) {
				$title = $post_image->post_title;
			}
			
			$image = wp_get_attachment_image_src( $image, $size );
			$image = $image[0];
			if ( $alt == '' ) {
				$alt = $image;
			}
		}
		
		if ( $title != '' ) {
			$title = ' title="' . esc_attr( $title ) . '"';	
		}
		$content = do_shortcode( $content );
		
		if ( $content != '' ) {
			$class[] = $this->prefix . 'content_exists';
		}
		
		$output = '';
		
		if ( ! empty( $image ) ) {
			if ( $lazy_load == 'yes' ) {
				$output .= '<img src = "' . BT_BB_Root::$path . 'img/blank.gif" data-image_src="' . esc_url( $image ) . '"' . $title . ' alt="' . esc_attr( $alt ) . '" class="btLazyLoadImage">';
			} else {
				$output .= '<img src="' . esc_url( $image ) . '"' . $title . ' alt="' . esc_attr( $alt ) . '">';
			}
		}
		
		$link = bt_bb_get_url( $url );
		
		if ( ! empty( $link ) ) {
			$output = '<a href="' . esc_url( $link ) . '"  target="' . esc_attr( $target ) . '"' . $title . '>' . $output . '</a>';
		} else {
			$output = '<span>' . $output . '</span>';
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output ;
		if ( $content != '' ) {
			$content_background_style = '';
			if ( $content_background_color != '' ) {
				$content_background_color = bt_bb_image::hex2rgb( $content_background_color );
				if ( $content_background_opacity == '' ) {
					$content_background_opacity = 1;
				}
				$content_background_style .= ' style="background-color: rgba(' . $content_background_color[0] . ', ' . $content_background_color[1] . ', ' . $content_background_color[2] . ', ' . $content_background_opacity . ');"';
			}
			$output .= '<div class="bt_bb_image_content"' . $content_background_style . '><div class="bt_bb_image_content_flex"><div class="bt_bb_image_content_inner">' . $content . '</div></div></div>';
		}
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
		
		return $output;

	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Image', 'tabula' ), 'description' => esc_html__( 'Single image', 'tabula' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_button' => true, 'bt_bb_icon' => true, 'bt_bb_text' => true, 'bt_bb_headline' => true, 'bt_bb_floating_image' => true, 'bt_bb_separator' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'heading' => esc_html__( 'Image', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'tabula' ), 'preview' => true,
					'value' => bt_bb_get_image_sizes()
				),
				array( 'param_name' => 'image_height', 'type' => 'textfield', 'heading' => esc_html__( 'Image height', 'tabula' )),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'tabula' ),
					'value' => array(
						esc_html__( 'Square', 'tabula' ) 		=> 'square',
						esc_html__( 'Soft Rounded', 'tabula' ) => 'soft-rounded',
						esc_html__( 'Hard Rounded', 'tabula' ) => 'hard-rounded'
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load this image', 'tabula' ),
					'value' => array(
						esc_html__( 'No', 'tabula' ) 	=> 'no',
						esc_html__( 'Yes', 'tabula' ) 	=> 'yes'
					)
				),
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Alignment', 'tabula' ),
					'value' => array(
						esc_html__( 'Inherit', 'tabula' ) 	=> 'inherit',
						esc_html__( 'Left', 'tabula' ) 	=> 'left',
						esc_html__( 'Right', 'tabula' ) 	=> 'right'
					)
				),
				array( 'param_name' => 'caption', 'type' => 'textfield', 'heading' => esc_html__( 'Caption', 'tabula' ) ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'tabula' ), 'group' => esc_html__( 'URL', 'tabula' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'tabula' ), 'group' => esc_html__( 'URL', 'tabula' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'tabula' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'tabula' ) => '_blank'
					)
				),
				array( 'param_name' => 'hover_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Mouse hover style', 'tabula' ), 'group' => esc_html__( 'URL', 'tabula' ),
					'value' => array(
						esc_html__( 'Simple', 'tabula' ) 					=> 'simple',
						esc_html__( 'Flip', 'tabula' ) 					=> 'flip',
						esc_html__( 'Zoom in', 'tabula' ) 					=> 'zoom-in',
						esc_html__( 'To grayscale', 'tabula' ) 			=> 'to-grayscale',
						esc_html__( 'From grayscale', 'tabula' ) 			=> 'from-grayscale',
						esc_html__( 'Zoom in to grayscale', 'tabula' ) 	=> 'zoom-in-to-grayscale',
						esc_html__( 'Zoom in from grayscale', 'tabula' ) 	=> 'zoom-in-from-grayscale',
						esc_html__( 'Scroll', 'tabula' ) 					=> 'scroll'
					)
				),
				array( 'param_name' => 'content_display', 'type' => 'dropdown', 'heading' => esc_html__( 'Show content', 'tabula' ), 'description' => esc_html__( 'Add selected elements and show them over the image', 'tabula' ), 'group' => esc_html__( 'Content', 'tabula' ),
					'value' => array(
						esc_html__( 'Always', 'tabula' ) => 'always',
						esc_html__( 'Show on hover', 'tabula' ) => 'show-on-hover',
						esc_html__( 'Hide on hover', 'tabula' ) => 'hide-on-hover'
					)
				),
				array( 'param_name' => 'content_background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Content background color', 'tabula' ), 'group' => esc_html__( 'Content', 'tabula' ) ),
				array( 'param_name' => 'content_background_opacity', 'type' => 'textfield', 'heading' => esc_html__( 'Content background opacity (e.g. 0.4)', 'tabula' ), 'group' => esc_html__( 'Content', 'tabula' ) ),
				array( 'param_name' => 'content_align', 'type' => 'dropdown', 'heading' => esc_html__( 'Content Alignment', 'tabula' ), 'group' => esc_html__( 'Content', 'tabula' ),
					'value' => array(
						esc_html__( 'Middle', 'tabula' ) 	=> 'middle',
						esc_html__( 'Top', 'tabula' ) 		=> 'top',						
						esc_html__( 'Bottom', 'tabula' ) 	=> 'bottom'
					)
				)
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