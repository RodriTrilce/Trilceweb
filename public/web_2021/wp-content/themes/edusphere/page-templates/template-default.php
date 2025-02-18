<?php
/**
 * Template Name: Blog Default
 *
 * @package edusphere
 */
get_header();

?><div class="woocommerce-pagetitle blogtitle">
	<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?> </h1>
</div>
<!-- wraper_blog_main -->
<div class="wraper_blog_main style-default">
	<div class="container">
		<div class="row">
		<!-- row -->
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<?php } else { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php } ?>
				<!-- blog_main -->
				<div class="blog_main">
					<?php


					$wp_query = new WP_Query(
						array(
							'post_type' => 'post',
							'order'     => 'asc',       // name of post type.
							'paged'     => get_query_var( 'paged' ) ?: 1,

						)
					);


					while ( $wp_query->have_posts() ) :
						$wp_query->the_post();
						get_template_part( 'template-parts/content-default', get_post_format() );
						?>
					<?php endwhile; ?>

					<?php radiantthemes_pagination(); ?>
				</div>
				<!-- blog_main -->
			</div>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-sidebar">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_blog_main -->


	<?php

	get_footer();
