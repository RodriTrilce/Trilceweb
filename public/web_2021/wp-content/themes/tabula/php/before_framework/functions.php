<?php

/**
 * Default header dash
 */
/*if ( ! function_exists( 'boldthemes_header_headline_dash' ) ) {
	function boldthemes_header_headline_dash() {
		return ""; // 
	}
}
add_filter( 'boldthemes_header_headline_dash', 'boldthemes_header_headline_dash' );
*/


// HEADER HEADLINE SIZE
if ( ! function_exists( 'boldthemes_header_headline_size' ) ) {
	function boldthemes_header_headline_size( $size ) {
		return 'extralarge';
	}
}
add_filter( 'boldthemes_header_headline_size', 'boldthemes_header_headline_size' );


// HEADER HEADLINE DASH
if ( ! function_exists( 'boldthemes_header_headline_dash' ) ) {
	function boldthemes_header_headline_dash( $size ) {
		return 'top_bottom';
	}
}
add_filter( 'boldthemes_header_headline_dash', 'boldthemes_header_headline_dash' );


// SINGLE PRODUCT SIZE
if ( ! function_exists( 'boldthemes_product_headline_size' ) ) {
	function boldthemes_product_headline_size( $size ) {
		return 'large';
	}
}
add_filter( 'boldthemes_product_headline_size', 'boldthemes_product_headline_size' );


// PRODUCT LIST HEADLINE SIZE
if ( ! function_exists( 'boldthemes_product_list_headline_size' ) ) {
	function boldthemes_product_list_headline_size ( ) {
		return 'small';
	}
}
add_filter( 'boldthemes_product_list_headline_size', 'boldthemes_product_list_headline_size' );

// PRODUCT HEADLINE DASH
if ( ! function_exists( 'boldthemes_product_headline_dash' ) ) {
	function boldthemes_product_headline_dash( $size ) {
		return '';
	}
}
add_filter( 'boldthemes_product_headline_dash', 'boldthemes_product_headline_dash' );



// HEADER HEADLINE GRADIENT
if ( ! function_exists( 'boldthemes_header_headline_gradient' ) ) {
	function boldthemes_header_headline_gradient( $size ) {
		return '';
	}
}
add_filter( 'boldthemes_header_headline_gradient', 'boldthemes_header_headline_gradient' );


// DEFAULT HEADLINE SKIN
if ( ! function_exists( 'boldthemes_header_headline_skin' ) ) {
	function boldthemes_header_headline_skin( $size ) {
		if ( boldthemes_get_option( 'default_header_skin' ) == 'dark' ) {
			return 'btDarkSkin';	
		} else {
			return 'btLightSkin';
		}
	}
}
add_filter( 'boldthemes_header_headline_skin', 'boldthemes_header_headline_skin' );


/**
 * Header headline output
 */

if ( ! function_exists( 'boldthemes_header_headline' ) ) {
	function boldthemes_header_headline( $arg = array() ) {

		$extra_class = 'btPageHeadline';
		
		$dash  = '';
		$use_dash = boldthemes_get_option( 'sidebar_use_dash' );
		if ( is_singular( 'post' ) ) {
			$use_dash = boldthemes_get_option( 'blog_use_dash' );
		} else if ( is_singular( 'product' ) ) {
			$use_dash = boldthemes_get_option( 'shop_use_dash' );
		}  else if ( is_singular( 'portfolio' ) ) {
			$use_dash = boldthemes_get_option( 'pf_use_dash' );
		} 
		if ( $use_dash ) $dash  = apply_filters( 'boldthemes_header_headline_dash', 'top' );
		if ( is_front_page() ) {
			$title = get_bloginfo( 'description' );
		} else if ( is_singular() ) {
			$title = get_the_title();
		} else {
			$title = wp_title( '', false );
		}
		
		$excerpt = '';
		
		if ( BoldThemesFramework::$page_for_header_id != '' ) {
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id( BoldThemesFramework::$page_for_header_id ) );
			
			$excerpt = boldthemes_get_the_excerpt( BoldThemesFramework::$page_for_header_id );
			if ( ! $feat_image ) {
				if ( is_singular() && ! is_singular( 'product' ) ) {
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
				} else {
					$feat_image = false;
				}
			}
		} else {
			if ( is_singular() ) {
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
			} else {
				$feat_image = false;
			}
			if ( is_singular() ) {
				$excerpt = boldthemes_get_the_excerpt( get_the_ID() );
			}
		}
		
		$parallax = isset( $arg['parallax'] ) ? $arg['parallax'] : apply_filters( 'boldthemes_header_headline_parallax', '0.8' );
		$parallax_class = 'bt_bb_parallax';
		if ( wp_is_mobile() ) {
			$parallax = 0;
			$parallax_class = '';
		}
		
		$supertitle = '';
		$subtitle = $excerpt;
		
		$breadcrumbs = isset( $arg['breadcrumbs'] ) ? $arg['breadcrumbs'] : true;
		
		if ( $breadcrumbs ) {
			$heading_args = boldthemes_breadcrumbs( false, $title, $subtitle );
			$supertitle = $heading_args['supertitle'];
			$title = $heading_args['title'];
			$subtitle = $heading_args['subtitle'];
		}
		
		if ( $title != '' || $supertitle != '' || $subtitle != '' ) {
			$extra_class .= $feat_image ? ' bt_bb_background_image ' . apply_filters( 'boldthemes_header_headline_gradient', 'bt_bb_background_overlay_dark_solid' ) . ' ' . $parallax_class . ' ' . apply_filters( 'boldthemes_header_headline_skin', 'btDarkSkin' ) . ' ' : ' ';
			echo '<section class="bt_bb_section gutter bt_bb_vertical_align_top ' . esc_attr( $extra_class ) . '" style="background-image:url(' . esc_url( $feat_image ) . ')" data-parallax="' . esc_attr( $parallax ) . '" data-parallax-offset="0">';
				echo '<div class="bt_bb_port port">';
					echo '<div class="bt_bb_cell">';
						echo '<div class="bt_bb_cell_inner">';
							echo '<div class = "bt_bb_row">';
								echo '<div class="bt_bb_column">';
									echo '<div class="bt_bb_column_content">';
										echo boldthemes_get_heading_html( 
											array(
												'superheadline' => $supertitle,
												'headline' => $title,
												'subheadline' => $subtitle,
												'html_tag' => "h1",
												'size' => apply_filters( 'boldthemes_header_headline_size', 'large' ),
												'dash' => $dash,
												'dash_color_scheme' => 'accent-dark-skin',
												'el_style' => '',
												'el_class' => ''
											)
										);
										echo '</div><!-- /rowItemContent -->' ;
									echo '</div><!-- /rowItem -->';
							echo '</div><!-- /boldRow -->';
						echo '</div><!-- boldCellInner -->';	
					echo '</div><!-- boldCell -->';			
				echo '</div><!-- port -->';
			echo '</section>';
		}
		
	}
}


/**
 * Returns heading HTML
 *
 * @param string $superheadline
 * @param string $headline
 * @param string $subheadline
 * @param string $headline_size // small/medium/large/extralarge
 * @param string $dash // no/top/bottom
 * @param string $el_class
 * @param string $el_style
 * @return string
 */
 
 if ( ! function_exists( 'boldthemes_get_heading_html' ) ) {
	function boldthemes_get_heading_html( $args ) {

		if ( !is_array($args) ) return "OLD HEADLINE";
		
		$superheadline = isset ( $args[ "superheadline" ] ) ? $args[ "superheadline" ] : ""; 
		$headline = isset ( $args[ "headline" ] ) ? $args[ "headline" ] : "";
		$subheadline = isset ( $args[ "subheadline" ] ) ? $args[ "subheadline" ] : "";
		$font = isset ( $args[ "font" ] ) ? $args[ "font" ] : "";
		$font_size = isset ( $args[ "font_size" ] ) ? $args[ "font_size" ] : "";
		$color_scheme = isset ( $args[ "color_scheme" ] ) ? $args[ "color_scheme" ] : "";
		$dash_color_scheme = isset ( $args[ "dash_color_scheme" ] ) ? $args[ "dash_color_scheme" ] : "";
		$color = isset ( $args[ "color" ] ) ? $args[ "color" ] : "";
		$align = isset ( $args[ "align" ] ) ? $args[ "align" ] : "";
		$url = isset ( $args[ "url" ] ) ? $args[ "url" ] : "";
		$target = isset ( $args[ "target" ] ) ? $args[ "target" ] : "_self";
		$html_tag = isset ( $args[ "html_tag" ] ) ? $args[ "html_tag" ] : "h2";
		$size = isset ( $args[ "size" ] ) ? $args[ "size" ] : "";
		$dash = isset ( $args[ "dash" ] ) ? $args[ "dash" ] : "";
		$el_id = isset ( $args[ "el_id" ] ) ? $args[ "el_id" ] : "";
		$el_class = isset ( $args[ "el_class" ] ) ? $args[ "el_class" ] : "";
		$el_style = isset ( $args[ "el_style" ] ) ? $args[ "el_style" ] : "";
		
		$supertitle_position = boldthemes_get_option( 'supertitle_position' );
		if ( $supertitle_position ) {
			$supertitle_position_str = ' supertitle_position="outside"'; 
		} else {
			$supertitle_position_str = ''; 
		}
                
		if ( shortcode_exists( 'bt_bb_headline' ) ) {

			$superheadline = htmlentities( $superheadline, ENT_QUOTES, 'UTF-8' );
			$subheadline = htmlentities( $subheadline, ENT_QUOTES, 'UTF-8' );
			$headline = htmlentities( $headline, ENT_QUOTES, 'UTF-8' );

			$output = do_shortcode( '[bt_bb_headline superheadline="' . $superheadline . '" headline="' . $headline . '" subheadline="' . $subheadline . '" font="' . $font . '" font_size="' . $font_size . '" color_scheme="' . $color_scheme . '" dash_color_scheme="' . $dash_color_scheme . '" color="' . $color . '" align="' . $align . '" url="' . $url . '" target="' . $target . '" html_tag="' . $html_tag . '" size="' . $size . '" dash="' . $dash . '" el_id="' . $el_id . '" el_class="' . $el_class . '" el_style="' . $el_style . '" ' . $supertitle_position_str . ']' );

		} else {
			$shortcode = "bt_bb_headline";
			$class[] = "bt_bb_headline";
			$prefix = "bt_bb_";
			
			if ( $el_class != '' ) {
				$class[] = $el_class;
			}

			$id_attr = '';
			if ( $el_id != '' ) {
				$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
			}

			if ( $font != '' && $font != 'inherit' ) {
				$el_style = $el_style . ';' . 'font-family:\'' . urldecode( $font ) . '\'';
			}

			$html_tag_style = '';
			if ( $font_size != '' ) {
				$html_tag_style = ' ' . 'style="font-size:' . $font_size . '"';
			}
			
			if ( $color_scheme != '' && function_exists( 'bt_bb_get_color_scheme_id' ) ) {
				$class[] = $prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
			}

			if ( $color != '' ) {
				$el_style = $el_style . ';' . 'color:' . $color . ';border-color:' . $color . ';';
			}

			if ( $dash != '' ) {
				$class[] = $prefix . 'dash' . '_' . $dash;
			}
			
			if ( $size != '' ) {
				$class[] = $prefix . 'size' . '_' . $size;
			}

			if ( $superheadline != '' ) {
				$class[] = $prefix . 'superheadline';
				$superheadline = '<span class="' . esc_attr( $shortcode ) . '_superheadline">' . $superheadline . '</span>';
			}
			
			if ( $subheadline != '' ) {
				$class[] = $prefix . 'subheadline';
				$subheadline = '<div class="' . esc_attr( $shortcode ) . '_subheadline">' . $subheadline . '</div>';
			}

			$style_attr = '';
			if ( $el_style != '' ) {
				$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
			}

			if ( $align != '' ) {
				$class[] = $prefix . 'align' . '_' . $align;
			}
			
			$headline = nl2br( $headline );

			if ( $url != '' ) {
				$headline = '<a href="' . esc_url( $url ) . '" target="' . esc_attr( $target ) . '">' . $headline . '</a>';
			}		

			$headline = '<span class="' . esc_attr( $shortcode ) . '_content"><span>' . $headline . '</span></span>';

			$output = '<header' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '><' . $html_tag . $html_tag_style . '>' . $superheadline . $headline . '</' . $html_tag . '>' . $subheadline . '</header>';
		}

		return $output;

	}
}
