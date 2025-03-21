<?php
	/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package edusphere
	 */

	get_header();
?>

<section class="case-studies-single-content">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="row">
				<?php the_content(); ?>
			</div>
			<div class="row case-studies-single-pagination">
				<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
					<div class="case-studies-single-previous-post">
						<?php
						$prev_post = get_previous_post();
						if ( $prev_post ) {
							$prev_title = wp_strip_all_tags( str_replace( '"', '', $prev_post->post_title ) );
							?>
							<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
								<span class="case-studies-single-previous-post-title"><?php echo esc_html__( 'Previous Post', 'edusphere' ); ?> </span>
								<span class="case-studies-single-previous-post-name"><?php echo esc_html( $prev_title ); ?></span>
							</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
					<div class="case-studies-single-post-back-btn"><a href="/case-studies/"></a></div>
				</div>
				<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
					<div class="case-studies-single-next-post">
						<?php
						$next_post = get_next_post();
						if ( $next_post ) {
							$next_title = wp_strip_all_tags( str_replace( '"', '', $next_post->post_title ) );
							?>
							<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
								<span class="case-studies-single-previous-post-title"><?php echo esc_html__( 'Next Post', 'edusphere' ); ?></span>
								<span class="case-studies-single-previous-post-name"><?php echo esc_html( $next_title ); ?></span>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php endwhile; // End of the loop. ?>
	</div>
</section>

<?php
get_footer();
