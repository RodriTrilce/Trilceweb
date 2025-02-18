<?php
/**
 * Template Name: Classic
 *
 * @package edusphere
 */
get_header();

?><div class="woocommerce-pagetitle blogtitle">	
       							<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?> </h1>
       						    </div>
<!-- wraper_blog_main -->
<div class="wraper_blog_main style-one clasic-box-layout">
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if ( 'nosidebar' === radiantthemes_global_var( 'blog-layout', '', false ) ) { ?>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
					<div class="blog_main">
						<div class="blog-posts">
						<?php
$wp_query = new WP_Query( array(
    'post_type' => 'post',
    'order'=> 'asc',
    // name of post type.
    'paged' => get_query_var('paged') ?: 1,
    
) ); 
    
$count = 1;
while ( $wp_query->have_posts() ) : $wp_query->the_post();
$count++;
get_template_part( 'template-parts/content-blog-one', get_post_format() );
?>
  <?php endwhile;  ?>

						</div>


					<?php
				
						radiantthemes_pagination();
				
						?>
					
					</div>
					<!-- blog_main -->
				</div>
				
					
					
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-sidebar">
					
						<?php get_sidebar(); ?>
					</div>
				
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_blog_main -->

	<?php
	
get_footer();