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
	<ul class="entry-meta">
		<li class="post-date-add">
			<?php echo get_the_date(); ?>
		</li>
		<?php $categories_list = get_the_category_list( __( ', ', 'edusphere' ) ); ?>
		<?php if ( $categories_list && ( true == radiantthemes_global_var( 'display_categries', '', false ) || ( ! class_exists( 'Redux' ) ) ) ) : ?>
			<li class="post-slash">
				<?php esc_html_e( '/', 'edusphere' ); ?>
			</li>
			<li class="category-list">
				<?php
				if ( 'post' === get_post_type() ) {
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'edusphere' ) );
					if ( $categories_list && radiantthemes_categorized_blog() ) {
						printf(
							wp_kses( '<span class="category">', 'post' ) .
							/* translators: used between list items, there is a space after the comma */
							esc_html( ' %1$s' ) .
							wp_kses( '</span>', 'post' ),
							wp_kses( $categories_list, 'post' )
						);
					}
				}
				?>
			</li><!-- .entry-category -->
		<?php endif; ?>
	</ul><!-- .entry-meta -->
</div><!--entry-date-category-->

	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-main">
		<div class="entry-content">
			<?php echo wp_kses( substr( wp_strip_all_tags( get_the_excerpt() ), 0, 400 ), 'post' ) . '...'; ?>
		</div><!-- .entry-content -->
		<div class="entry-extra">
			<div class="pull-left">
				<div class="entry-extra-item">
					<?php
					if ( true == radiantthemes_global_var( 'display_tags', '', false ) ) {

							$tags = get_the_tags( $post->ID );
						if ( ! empty( $tags ) ) {
							?>
							<!-- post-tags -->
							<div class="post-tags">
							<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', ' ' );
							if ( $tags_list ) {
								printf(
									wp_kses( '<strong class="tags-title">Tags:</strong> ', 'post' ) .
									/* translators: used between list items, there is a space after the comma */
									esc_html( '%1$s' ) .
									'',
									wp_kses( $tags_list, 'post' )
								);
							}
							?>
							</div>
							<!-- post-tags -->
							<?php
						}
					} else {
						?>
					<div class="post-read-more">
						<a class="btn" href="<?php the_permalink(); ?>" data-hover="<?php esc_attr_e( 'Read More', 'edusphere' ); ?>"><span><?php esc_html_e( 'Read More', 'edusphere' ); ?></span></a>
					</div><!-- .post-read-more -->
					<?php } ?>
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
