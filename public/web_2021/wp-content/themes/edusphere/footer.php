<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package edusphere
	 */

?>

		</div>
		<!-- #content -->
	</div>
	<!-- #page -->

<?php
if ( ! class_exists( 'Redux' ) || ( is_404() ) || ( is_search() ) ) {
	include get_parent_theme_file_path( 'inc/footer/footer-style-default.php' );
} else {
	wp_reset_postdata();

	if ( get_post_type( get_the_ID() ) == 'elementor_library' ) {

	} else {
		$footerBuilder_id = esc_html( get_post_meta( $post->ID, 'custom_footer', true ) );
		if ( $footerBuilder_id ) {
			$template = get_page_by_path( $footerBuilder_id, OBJECT, 'elementor_library' );
			echo '<!-- wraper_footer -->';
			echo "<div class='container'>";
			echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $template->ID );
			echo '</div>';
			echo '</footer>';
			echo '<!-- wraper_footer -->';
		} else {
			include get_parent_theme_file_path( 'inc/footer/footer-style-default.php' );
		}
	}
}
?>

	</div>
<!-- radiantthemes-website-layout -->

<?php wp_footer(); ?>

	</body>
</html>
