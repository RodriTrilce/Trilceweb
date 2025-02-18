<?php
/**
 * Template for Blog Two
 *
 * @package edusphere
 */

?><div class="woocommerce-pagetitle blogtitle">	
       							<h1 class="woocommerce-products-header__title page-title"><?php $blog_id                 = get_option( 'page_for_posts' );

echo esc_html( get_post_meta( $blog_id, 'banner_title', true ) ); ?> </h1>
       						    </div>
<div class="container">
<div class="rt-masonry blog-posts">

<?php
if ( have_posts() ) :
						/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content-blog-two', get_post_format() );
		?>


		<?php
  endwhile;
endif;
?>
  </div>
		<?php
		if ( 'pagination' == radiantthemes_global_var( 'blog-showing', '', false ) ) {
			radiantthemes_pagination();
		} elseif ( 'loadmore' == radiantthemes_global_var( 'blog-showing', '', false ) ) {
			?>
							<div class="blog-posts1"></div>
						<div class="loadmore"><div class="rtloadmore"><?php echo esc_html__( 'Load More', 'edusphere' ); ?>...</div></div>
					<?php } else { ?>
						<div class="loadmore"><div class="rtlazyload"><?php echo esc_html__( 'Load More', 'edusphere' ); ?> ..<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/loder.gif"></div></div>
					<?php } ?>
					<div class="rt-no-more-post"><?php echo esc_html__( 'No More Post to Display', 'edusphere' ); ?></div>



</div>