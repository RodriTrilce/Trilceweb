<?php

	$share_html = boldthemes_get_share_html( get_permalink(), 'blog', 'xsmall' );

	$meta_html = '';
	if ( BoldThemesFrameworkTemplate::$blog_author || BoldThemesFrameworkTemplate::$blog_date || BoldThemesFrameworkTemplate::$show_comments_number ) {
		$meta_html .= '';
		if ( BoldThemesFrameworkTemplate::$blog_date && ! BoldThemesFrameworkTemplate::$blog_side_info ) $meta_html .= boldthemes_get_post_date(); 
		if ( BoldThemesFrameworkTemplate::$blog_author && ! BoldThemesFrameworkTemplate::$blog_side_info ) $meta_html .= boldthemes_get_post_author();
		if ( BoldThemesFrameworkTemplate::$show_comments_number ) {
			if ( $meta_html != '' ) {
				$meta_html .= boldthemes_get_post_comments();
			} else {
				BoldThemesFrameworkTemplate::$categories_html .= boldthemes_get_post_comments();
			}
		}
	}

	
	echo '<article class="btPostListColumns gutter ' . esc_attr( implode( ' ', get_post_class( BoldThemesFrameworkTemplate::$class_array ) ) ) . '">';
		echo '<div class="port">';
			echo '<div class="btArticleContentHolder">';
				if ( BoldThemesFrameworkTemplate::$blog_side_info ) {
					echo '<div class="articleSideGutter">';
					$avatar_html = get_avatar( get_the_author_meta( 'ID' ), 144 ); 
						
					if ( $avatar_html != '' ) {
						echo '<div class="asgItem avatar"><a href="' . esc_url( BoldThemesFrameworkTemplate::$author_url ) . '">' . wp_kses_post( $avatar_html ) . '</a></div>';
					}
					if ( BoldThemesFrameworkTemplate::$blog_author ) {
						echo '<div class="asgItem title"><span>' . boldthemes_get_post_author() . '</span></div>';
					}
					if ( BoldThemesFrameworkTemplate::$blog_date ) {
						echo '<div class="asgItem date"><small>' . boldthemes_get_post_date( array( 'prefix' => '', 'suffix' => '' ) ) . '</small></div>';
					}	
					
					echo '</div>';
				}
					
								
				if ( BoldThemesFrameworkTemplate::$media_html != '' ) {
					$extra_class = '';
					if ( BoldThemesFrameworkTemplate::$post_format == 'link' && BoldThemesFrameworkTemplate::$media_html == '' ) {
						$extra_class = ' linkOrQuote';
					}
					echo '<div class="btArticleMedia ' . esc_attr( $extra_class ) . '">';
					echo ' ' . BoldThemesFrameworkTemplate::$media_html;
					echo '</div><!-- /btArticleMedia -->';
				}
				

				echo '<div class="btArticleTextContent">';
					echo '<div class="btArticleHeadline">';
					echo boldthemes_get_heading_html(
						array(
							'superheadline' => BoldThemesFrameworkTemplate::$categories_html,
							'headline' => get_the_title(),
							'subheadline' => $meta_html,
							'url' => get_permalink(),
							'size' => 'medium',
							'html_tag' => 'h2',
							'el_style' => '',
							'el_class' => ''
						)									 
					);
					echo '</div><!-- /btArticleHeadline -->';
					if ( ! boldthemes_get_option( 'sidebar' ) ) {
						echo '<div class="btArticleContent">' .BoldThemesFrameworkTemplate::$content_final_html . '</div>';	
					}
						
					if ( $share_html != '') echo '<div class="btShareRow">' . wp_kses_post( $share_html ) . '</div><!-- /btShareRow -->';
				echo '</div><!-- /btArticleTextContent -->';
					
				
			echo '</div><!-- /btContent -->' ;
		echo '</div><!-- /port -->';	
	echo '</article>';

?>