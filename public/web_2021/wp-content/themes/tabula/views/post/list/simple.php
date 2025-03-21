<?php

	$share_html = '<div class="btIconRow">' . boldthemes_get_share_html( get_permalink(), 'blog', 'small' ) . '</div>';

	$dash = BoldThemesFrameworkTemplate::$blog_use_dash ? 'bottom' : '';

	$meta_html = '';
	if ( BoldThemesFrameworkTemplate::$blog_author || BoldThemesFrameworkTemplate::$blog_date || BoldThemesFrameworkTemplate::$show_comments_number ) {
		$meta_html .= '';
		if ( BoldThemesFrameworkTemplate::$blog_date ) $meta_html .= boldthemes_get_post_date();
		if ( BoldThemesFrameworkTemplate::$blog_author ) $meta_html .= boldthemes_get_post_author();
		if ( BoldThemesFrameworkTemplate::$show_comments_number ) $meta_html .= boldthemes_get_post_comments();
	}

	echo '<article class="' . implode( ' ', get_post_class( BoldThemesFrameworkTemplate::$class_array ) ) . ' gutter btPostListSimple">';
		echo '<div class="port">';
			echo '<div class="btArticleContentHolder">';

				if ( BoldThemesFrameworkTemplate::$blog_side_info ) {
					echo '<div class="articleSideGutter">';
					$avatar_html = get_avatar( get_the_author_meta( 'ID' ), 144 ); 					
					if ( $avatar_html != '' ) {
						echo '<div class="asgItem avatar"><a href="' . esc_url( BoldThemesFrameworkTemplate::$author_url ) . '">' . wp_kses_post( $avatar_html ) . '</a></div>';
					}					
					echo '</div>';
				}
				echo '<div class="btArticleTextContent">';
					echo boldthemes_get_heading_html(
						array(
							'superheadline' 	=> BoldThemesFrameworkTemplate::$categories_html,
							'headline' 			=> get_the_title(),
							'subheadline' 		=> $meta_html,
							'url' 				=> esc_url( get_permalink() ),
							'dash' 				=> $dash,
							'size' 				=> 'normal'
						)									 
					);
					if ( is_search() ) {
						echo '<div class="btArticleTextExcerpt">' . get_the_excerpt() . '</div>';
					}
				echo '</div>' ;
					
			echo '</div><!-- /btArticleContentHolder -->';			
		echo '</div><!-- /port -->';
	echo '</article><!-- /btPostListSimple -->';