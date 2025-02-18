<?php

class bt_bb_latest_posts extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'rows'            	=> '',
			'columns'         	=> '',
			'gap'             	=> '',
			'category'        	=> '',
			'target'          	=> '',
			'image_shape'     	=> '',
			'show_category'   	=> '',
			'show_date'       	=> '',
			'show_author'     	=> '',
			'show_comments'   	=> '',
			'show_excerpt'    	=> '',
			'lazy_load'  		=> 'no'
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
		
		if ( $columns != '' ) {
			$class[] = $this->prefix . 'columns' . '_' . $columns;
		}
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}
		
		if ( $image_shape != '' ) {
			$class[] = $this->prefix . 'image_shape' . '_' . $image_shape;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$number = $rows * $columns;
		
		$posts = bt_bb_get_posts( $number, 0, $category );
		
		$output = '';

		foreach( $posts as $post_item ) {

			$post_thumbnail_id = get_post_thumbnail_id( $post_item['ID'] );
			if ( $post_thumbnail_id != '' ) {
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item">';
					
					
						$img = wp_get_attachment_image_src( $post_thumbnail_id, $size = 'boldthemes_large_vertical_rectangle' );
						if ( $lazy_load == 'yes' ) {
							$img_src = BT_BB_Root::$path . 'img/blank.gif';
							$img_class = 'btLazyLoadImage';
							$data_img = ' data-image_src="' . esc_attr( $img[0] ) . '"';
						} else {
							$img_src = $img[0];
							$img_class = '';
							$data_img = '';
						}
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_image"><a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '"><img src="' . esc_url( $img_src ) . '" alt="' . esc_attr( $post_item['title'] ) . '" title="' . esc_attr( $post_item['title'] ) . '" class="' . esc_attr( $img_class ) . '" ' . $data_img .  '></a></div>';
					

					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_content">';
						if ( $show_date == 'show_date' || $show_author == 'show_author' || $show_author == 'show_comments' || $show_category == 'show_category' ) {
							$meta_output = '<div class="' . esc_attr( $this->shortcode ) . '_item_meta">';
								if ( $show_date == 'show_date' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date">';
										$meta_output .= get_the_date( '', $post_item['ID'] );
									$meta_output .= '</span>';
								}
								
								if ( $show_category == 'show_category' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_category">';
										$meta_output .= $post_item['category_list'];
									$meta_output .= '</span>';
								}
								if ( $show_author == 'show_author' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_author">';
										$meta_output .= esc_html__( 'by', 'tabula' ) . ' ' . $post_item['author'];
									$meta_output .= '</span>';
								}
								if ( $show_comments == 'show_comments' && $post_item['comments'] != '' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_comments">';
										$meta_output .= $post_item['comments'];
									$meta_output .= '</span>';
								}
							$meta_output .= '</div>';
							$output .= $meta_output;
						}
						$output .= '<h3 class="' . esc_attr( $this->shortcode ) . '_item_title">';
							$output .= '<a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . $post_item['title'] . '</a>';
						$output .= '</h3>';
						if ( $show_excerpt == 'show_excerpt' ) {
							$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_excerpt">';
								$output .= $post_item['excerpt'];
							$output .= '</div>';
						}
					$output .= '</div>';
				$output .= '</div>';

			} else {
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item btNoImage">';
					$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_content">';
						if ( $show_date == 'show_date' || $show_author == 'show_author' || $show_author == 'show_comments' || $show_category == 'show_category' ) {
							$meta_output = '<div class="' . esc_attr( $this->shortcode ) . '_item_meta">';
								if ( $show_date == 'show_date' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date">';
										$meta_output .= get_the_date( '', $post_item['ID'] );
									$meta_output .= '</span>';
								}
								if ( $show_category == 'show_category' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_category">';
										$meta_output .= $post_item['category_list'];
									$meta_output .= '</span>';
								}
								if ( $show_author == 'show_author' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_author">';
										$meta_output .= esc_html__( 'by', 'tabula' ) . ' ' . $post_item['author'];
									$meta_output .= '</span>';
								}
								
								if ( $show_comments == 'show_comments' && $post_item['comments'] != '' ) {
									$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_comments">';
										$meta_output .= $post_item['comments'];
									$meta_output .= '</span>';
								}
							$meta_output .= '</div>';
							$output .= $meta_output;
						}
						$output .= '<h3 class="' . esc_attr( $this->shortcode ) . '_item_title">';
							$output .= '<a href="' . esc_url( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . $post_item['title'] . '</a>';
						$output .= '</h3>';
						if ( $show_excerpt == 'show_excerpt' ) {
							$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_excerpt">';
								$output .= $post_item['excerpt'];
							$output .= '</div>';
						}
					$output .= '</div>';
				$output .= '</div>';
			}
		}

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Latest Posts', 'tabula' ), 'description' => esc_html__( 'List of latest posts', 'tabula' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'rows', 'type' => 'textfield', 'value' => '1', 'heading' => esc_html__( 'Rows', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'value' => '3', 'heading' => esc_html__( 'Columns', 'tabula' ), 'preview' => true,
					'value' => array(
						esc_html__( '1', 'tabula' ) => '1',
						esc_html__( '2', 'tabula' ) => '2',
						esc_html__( '3', 'tabula' ) => '3',
						esc_html__( '4', 'tabula' ) => '4',
						esc_html__( '6', 'tabula' ) => '6'
					)
				),
				array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'tabula' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Normal', 'tabula' ) => 'normal',
						esc_html__( 'No gap', 'tabula' ) => 'no_gap',
						esc_html__( 'Small', 'tabula' ) => 'small',
						esc_html__( 'Large', 'tabula' ) => 'large'
					)
				),				
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'tabula' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'tabula' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'tabula' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'tabula' ) => '_blank',
					)
				),
				array( 'param_name' => 'image_shape', 'group' => esc_html__( 'Content', 'tabula' ), 'type' => 'dropdown', 'heading' => esc_html__( 'Image shape', 'tabula' ),
					'value' => array(
						esc_html__( 'Square', 'tabula' ) => 'square',
						esc_html__( 'Rounded', 'tabula' ) => 'rounded',
						esc_html__( 'Round', 'tabula' ) => 'round'
					)
				),
				array( 'param_name' => 'show_category', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'tabula' ) => 'show_category' ), 'group' => esc_html__( 'Content', 'tabula' ), 'heading' => esc_html__( 'Show category', 'tabula' ), 'preview' => true
				),
				array( 'param_name' => 'show_date', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'tabula' ) => 'show_date' ), 'group' => esc_html__( 'Content', 'tabula' ), 'heading' => esc_html__( 'Show date', 'tabula' ), 'preview' => true
				),
				array( 'param_name' => 'show_author', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'tabula' ) => 'show_author' ), 'group' => esc_html__( 'Content', 'tabula' ), 'heading' => esc_html__( 'Show author', 'tabula' ), 'preview' => true
				),
				array( 'param_name' => 'show_comments', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'tabula' ) => 'show_comments' ), 'group' => esc_html__( 'Content', 'tabula' ), 'heading' => esc_html__( 'Show number of comments', 'tabula' ), 'preview' => true
				),
				array( 'param_name' => 'show_excerpt', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'tabula' ) => 'show_excerpt' ), 'group' => esc_html__( 'Content', 'tabula' ), 'heading' => esc_html__( 'Show excerpt', 'tabula' ), 'preview' => true
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'group' => esc_html__( 'Content', 'tabula' ), 'default' => 'yes', 'heading' => esc_html__( 'Lazy load images', 'tabula' ),
					'value' => array(
						esc_html__( 'No', 'tabula' ) => 'no',
						esc_html__( 'Yes', 'tabula' ) => 'yes'
					)
				)
			)
		) );
	} 
}