<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edusphere
 */

?>

<!-- blog-item -->
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<article class="blog-item" id="post-<?php the_ID(); ?>">
<div class="holder matchHeight">
<div class="pic">
<a class="pic-main" href="<?php the_permalink(); ?>" style="background-image:url(' <?php esc_url( the_post_thumbnail_url( 'medium_large' ) ); ?> ')"></a>
</div>
<div class="data">
<ul class="meta">
<li class="date"><?php the_time('F j, Y'); ?></li>
</ul>
<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  
<a class="btn" href="<?php the_permalink(); ?>"><span class="btn-arrow"></span><span class="rt-read-more"><?php echo esc_html__( 'Read More', 'edusphere' ) ;?></span></a>
</div>
</div>
</article>
</div>
<!-- blog-item -->