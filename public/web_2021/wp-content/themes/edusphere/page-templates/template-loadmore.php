<?php
/**
 * Template Name:Loadmore
 *
 * @package edusphere
 */
get_header();

?>

<div class="woocommerce-pagetitle blogtitle">	
       							<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?> </h1>
       						    </div>
<div class="container">
<div class="rt-masonry blog-posts">
 
<?php

 $args = array( 'post_type' => 'post', 'paged' => 1, 'orderby'   => 'menu_order', 'order' => 'desc' );
  query_posts($args);
  while ( have_posts() ) : the_post(); 
get_template_part( 'template-parts/content-blog-two', get_post_format() );
?>
  <?php endwhile;  ?>
  </div>


<div class="blog-posts1"></div>
	<div class="loadmore"><div class="rtloadmore"><?php echo esc_html__( 'Load More', 'edusphere' ); ?>...</div></div>
	<div class="rt-no-more-post"><?php echo esc_html__( 'No More Post to Display', 'edusphere' ); ?></div>	



</div>

	<?php
	
get_footer();