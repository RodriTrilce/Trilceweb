<?php 

if ( get_option( 'page_for_posts' ) ) {
	BoldThemesFramework::$page_for_header_id = get_option( 'page_for_posts' );
}

$blog_list_view = boldthemes_get_option( 'blog_list_view' );
$image_size = ( $blog_list_view == "columns" ? "boldthemes_medium_rectangle" : "boldthemes_large_rectangle" );

get_header();

if ( have_posts() ) {
	
	while ( have_posts() ) {
	
		the_post();

		$featured_image = '';
		if ( has_post_thumbnail() ) {
			$post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$image = wp_get_attachment_image_src( $post_thumbnail_id, $image_size  );
			$featured_image = $image[0];		
		}
		
		$images = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_images', 'type=image&size=' . $image_size );
		if ( $images == null ) $images = array();
		$video = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_video' );
		$audio = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_audio' );
		
		$link_title = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_link_title' );
		$link_url = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_link_url' );
		$quote = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_quote' );
		$quote_author = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_quote_author' );
		
		$permalink = get_permalink();

		BoldThemesFrameworkTemplate::$media_html = boldthemes_get_new_media_html( array( 'video' => $video, 'audio' => $audio, 'images' => $images, 'size' => 'boldthemes_large_rectangle', 'link_title' => $link_title, 'link_url' => $link_url, 'quote' => $quote, 'quote_author' => $quote_author, 'gallery_type' => 'carousel', 'featured_image' => $featured_image, 'permalink' => $permalink, 'title' => get_the_title() ) );
		
		BoldThemesFrameworkTemplate::$post_format = get_post_format();
		
		$content_html = apply_filters( 'the_content', get_the_content( '', false ) );
		$content_html = str_replace( ']]>', ']]&gt;', $content_html );
		
		BoldThemesFrameworkTemplate::$categories_html = boldthemes_get_post_categories();
		
		if ( is_search() ) $share_html = '';
		
		BoldThemesFrameworkTemplate::$blog_author = boldthemes_get_option( 'blog_author' );
		BoldThemesFrameworkTemplate::$blog_date = boldthemes_get_option( 'blog_date' );		
		
		BoldThemesFrameworkTemplate::$blog_side_info = boldthemes_get_option( 'blog_side_info' );
		BoldThemesFrameworkTemplate::$blog_use_dash = boldthemes_get_option( 'blog_use_dash' );
		
		BoldThemesFrameworkTemplate::$class_array = array( 'btArticleListItem', 'animate', 'bt_bb_animation_fade_in', 'bt_bb_animation_move_up' );
		
		if ( BoldThemesFrameworkTemplate::$blog_side_info ) BoldThemesFrameworkTemplate::$class_array[] = 'btHasAuthorInfo';
		if ( BoldThemesFrameworkTemplate::$media_html == '' ) BoldThemesFrameworkTemplate::$class_array[] = 'btNoMedia';
		
		BoldThemesFrameworkTemplate::$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );

		$comments_open = comments_open();
		$comments_number = get_comments_number();
		BoldThemesFrameworkTemplate::$show_comments_number = true;
		if ( ! $comments_open && $comments_number == 0 ) {
			BoldThemesFrameworkTemplate::$show_comments_number = false;
		}

		$post_type = get_post_type();
		
		BoldThemesFrameworkTemplate::$content_final_html = '<p>' . get_the_excerpt() . '</p>';

		if ( $blog_list_view == 'columns' && !is_search() ) {
			get_template_part( 'views/post/list/columns' );
		} else if ( $blog_list_view == 'simple' || is_search() ) {
			get_template_part( 'views/post/list/simple' );
		} else {
			get_template_part( 'views/post/list/standard' );
		}

	}
	
	boldthemes_pagination();
	
} else {
	if ( is_search() ) { ?>
		<section class="btNoSearchResults bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large gutter">
			<div class="bt_bb_port">
				<div class="bt_bb_cell">
					<div class="bt_bb_cell_inner">
						<div class="bt_bb_row">
							<div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal animated" data-width="12">
								<div class="bt_bb_column_content">
									<?php 
									echo boldthemes_get_heading_html(
										array(
											'headline' => esc_html__( 'We are sorry, no results for: ', 'tabula' ) . get_search_query(),
											'subheadline' => '',
											'size' => 'large'
										)
									);
									?>
									<div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
									<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<input type="search" value="<?php echo esc_attr( get_search_query() )  ?>" placeholder="<?php echo esc_attr__( 'Enter search term', 'tabula')  ?>" name="s" id="s" >
										<input type="submit" value="<?php echo esc_attr__( 'Search', 'tabula')  ?>">
									</form>
									<div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
									<?php
										echo boldthemes_get_button_html( 
											array (
												'url' => home_url( '/' ), 
												'text' => esc_html__( 'BACK TO HOME', 'tabula' ), 
												'style' => 'clean',
												'color_scheme' => 'accent-light-skin',
												'size' => 'small',
												'icon' => 'fa_f061'
											)
										);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php }
}
 
?>

<?php

get_footer();

?>