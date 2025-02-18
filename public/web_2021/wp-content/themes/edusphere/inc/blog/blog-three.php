<?php
/**
 * Template for Blog Three
 *
 * @package edusphere
 */

?><div class="woocommerce-pagetitle blogtitle">	
       							<h1 class="woocommerce-products-header__title page-title"><?php $blog_id                 = get_option( 'page_for_posts' );

echo esc_html( get_post_meta( $blog_id, 'banner_title', true ) ); ?> </h1>
       						    </div>
<!-- wraper_blog_main -->
<div class="wraper_blog_main style-three morden-box-layout">
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if ( 'nosidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php } else { ?>
				<?php if ( 'leftsidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
					<?php if ( 'three-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
					<?php } elseif ( 'four-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
					<?php } elseif ( 'five-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pull-right">
					<?php } ?>
				<?php } elseif ( 'rightsidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
					<?php if ( 'three-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-left">
					<?php } elseif ( 'four-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-left">
					<?php } elseif ( 'five-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
						<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pull-left">
					<?php } ?>
				<?php } else { ?>
					<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<?php } ?>
			<?php } ?>
					<!-- blog_main -->
					<div class="blog_main blog element-one blog-modern">
						<div class="blog-posts rt-modern">
							
							
							<?php
                                if ( have_posts() ) :
                                						/* Start the Loop */
                                	while ( have_posts() ) :
                                		the_post();
                                		get_template_part( 'template-parts/content-blog-three', get_post_format() );
								
								endwhile;
							else :
								get_template_part( 'template-parts/content', 'none' );
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
                     <div class="rt-no-more-post"><?php echo esc_html__( 'No more post to display.', 'edusphere' ); ?></div>
					</div>
					<!-- blog_main -->
				</div>
				<?php if ( 'nosidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
				<?php } else { ?>
					<?php if ( 'leftsidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
						<?php if ( 'three-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left">
						<?php } elseif ( 'four-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
						<?php } elseif ( 'five-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pull-left">
						<?php } ?>
					<?php } elseif ( 'rightsidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
						<?php if ( 'three-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-right">
						<?php } elseif ( 'four-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
						<?php } elseif ( 'five-grid' === radiantthemes_global_var( 'blog-layout-sidebar-width', '', false ) ) { ?>
							<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pull-right">
						<?php } ?>
					<?php } else { ?>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<?php } ?>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_blog_main -->