<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edusphere
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'style-default' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
		</div><!-- .post-thumbnail -->
	<?php } ?>

<div class="entry-date-category">
	<?php if ( true == radiantthemes_global_var( 'display_categries', '', false ) ) : ?>
	<ul class="entry-meta">
		<li class="post-date-add">


			<?php
			$category_detail = get_the_category( get_the_id() );
			$result          = '';
			foreach ( $category_detail as $item ) :
				$category_link = get_category_link( $item->cat_ID );
				$result       .= '  <a href = "' . esc_url( $category_link ) . '">' . $item->name . '</a>';
			endforeach;
			echo wp_kses( $result, 'post' );
			?>


		</li>


	</ul><!-- .entry-meta -->
		<?php endif; ?>
</div><!--entry-date-category-->

	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-main">

		<i class="far fa-user"></i></span>
		<span class="author"><?php echo get_the_author_link(); ?></span>
		<span class="date"><span class="meta-icon"><i class="far fa-calendar"></i></span><?php echo get_the_date(); ?></span>

		<div class="entry-content">
			<?php echo wp_kses( substr( wp_strip_all_tags( get_the_excerpt() ), 0, 400 ), 'post' ) . '...'; ?>
		</div><!-- .entry-content -->
		<div class="entry-extra">
			<div class="pull-left">
				<div class="entry-extra-item">

					<div class="post-read-more">
						<a class="btn" href="<?php the_permalink(); ?>" data-hover="<?php esc_attr_e( 'Read More', 'edusphere' ); ?>"><?php esc_html_e( 'Read More', 'edusphere' ); ?></a>
					</div><!-- .post-read-more -->

				</div><!-- .entry-extra-item -->
			</div><!--pull-left-->
			<div class="pull-right">
				<div class="entry-extra-item">
					<?php if ( true == radiantthemes_global_var( 'display_social_sharing', '', false ) ) : ?>
						<?php echo do_shortcode( '[rt_social_links]' ); ?>
					<?php endif; ?>
				</div><!-- .entry-extra-item -->
			</div><!--pull-right-->
		</div><!-- .entry-extra -->
	</div><!-- .entry-main -->


</article><!-- #post-## -->
