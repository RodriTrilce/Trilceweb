	<?php
/**
 * Wishlist page template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 2.0.12
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
?>

<?php do_action( 'yith_wcwl_before_wishlist_form', $wishlist_meta ); ?>

<form id="yith-wcwl-form" action="<?php echo esc_url( $form_action ); ?>" method="post" class="woocommerce">

	<?php wp_nonce_field( 'yith-wcwl-form', 'yith_wcwl_form_nonce' ); ?>

	<?php do_action( 'yith_wcwl_before_wishlist', $wishlist_meta ); ?>

	<!-- WISHLIST TABLE -->
	<table class="shop_table cart wishlist_table" data-pagination="<?php echo esc_attr( $pagination ); ?>" data-per-page="<?php echo esc_attr( $per_page ); ?>" data-page="<?php echo esc_attr( $current_page ); ?>" data-id="<?php echo esc_attr( $wishlist_id ); ?>" data-token="<?php echo esc_attr( $wishlist_token ); ?>">

		<?php $column_count = 2; ?>

		<thead>
		<tr>
			<?php if ( $show_cb ) : ?>

				<th class="product-checkbox">
					<input type="checkbox" value="" name="" id="bulk_add_to_cart"/>
				</th>

				<?php
				$column_count ++;
			endif;
?>

			<?php if ( $is_user_owner ) : ?>
				<th class="product-remove"></th>
				<?php
				$column_count ++;
			endif;
?>

			<th class="product-thumbnail"></th>

			<th class="product-name">
				<span class="nobr"><?php echo apply_filters( 'yith_wcwl_wishlist_view_name_heading', __( 'Product Name', 'edusphere' ) ); ?></span>
			</th>

			<?php if ( $show_price ) : ?>

				<th class="product-price">
					<span class="nobr">
						<?php echo apply_filters( 'yith_wcwl_wishlist_view_price_heading', __( 'Unit Price', 'edusphere' ) ); ?>
					</span>
				</th>

				<?php
				$column_count ++;
			endif;
?>

			<?php if ( $show_stock_status ) : ?>

				<th class="product-stock-status">
					<span class="nobr">
						<?php echo apply_filters( 'yith_wcwl_wishlist_view_stock_heading', __( 'Stock Status', 'edusphere' ) ); ?>
					</span>
				</th>

				<?php
				$column_count ++;
			endif;
?>

			<?php if ( $show_last_column ) : ?>

				<th class="product-add-to-cart"></th>

				<?php
				$column_count ++;
			endif;
?>
		</tr>
		</thead>

		<tbody>
		<?php
		if ( count( $wishlist_items ) > 0 ) :
			$added_items = array();
			foreach ( $wishlist_items as $item ) :
				global $product;

				$item['prod_id'] = yit_wpml_object_id( $item['prod_id'], 'product', true );

				if ( in_array( $item['prod_id'], $added_items ) ) {
					continue;
				}

				$added_items[] = $item['prod_id'];
				$product       = wc_get_product( $item['prod_id'] );
				$availability  = $product->get_availability();
				$stock_status  = isset( $availability['class'] ) ? $availability['class'] : false;

				if ( $product && $product->exists() ) :
					?>
					<tr id="yith-wcwl-row-<?php echo esc_textarea( $item['prod_id'] ); ?>" data-row-id="<?php echo esc_textarea( $item['prod_id'] ); ?>">
						<?php if ( $show_cb ) : ?>
							<td class="product-checkbox">
								<input type="checkbox" value="<?php echo esc_attr( $item['prod_id'] ); ?>" name="add_to_cart[]" <?php echo ( ! $product->is_type( 'simple' ) ) ? 'disabled="disabled"' : ''; ?>/>
							</td>
						<?php endif ?>

						<?php if ( $is_user_owner ) : ?>
						<td class="product-remove">
							<div>
								<a href="<?php echo esc_url( add_query_arg( 'remove_from_wishlist', $item['prod_id'] ) ); ?>" class="remove remove_from_wishlist" title="<?php echo apply_filters( 'yith_wcwl_remove_product_wishlist_message_title', __( 'Remove this product', 'edusphere' ) ); ?>"><span class="ti-close"></span></a>
							</div>
						</td>
						<?php endif; ?>

						<td class="product-thumbnail">
							<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item['prod_id'] ) ) ); ?>">
								<?php echo esc_textarea( $product->get_image() ); ?>
							</a>
						</td>

						<td class="product-name">
							<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item['prod_id'] ) ) ); ?>"><?php echo apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ); ?></a>
							<?php do_action( 'yith_wcwl_table_after_product_name', $item ); ?>
						</td>

						<?php if ( $show_price ) : ?>
							<td class="product-price">
								<?php
								$base_product = $product->is_type( 'variable' ) ? $product->get_variation_regular_price( 'max' ) : $product->get_price();
								echo esc_textarea( $base_product ? $product->get_price_html() : apply_filters( 'yith_free_text', __( 'Free!', 'edusphere' ), $product ) );
								?>
							</td>
						<?php endif ?>

						<?php if ( $show_stock_status ) : ?>
							<td class="product-stock-status">
								<?php echo esc_textarea( $stock_status == 'out-of-stock' ? '<span class="wishlist-out-of-stock">' . __( 'Out of Stock', 'edusphere' ) . '</span>' : '<span class="wishlist-in-stock">' . __( 'In Stock', 'edusphere' ) . '</span>' ); ?>
							</td>
						<?php endif ?>

						<?php if ( $show_last_column ) : ?>
						<td class="product-add-to-cart">
							<!-- Date added -->
							<?php
							if ( $show_dateadded && isset( $item['dateadded'] ) ) :
								echo '<span class="dateadded">' . sprintf( __( 'Added on : %s', 'edusphere' ), date_i18n( get_option( 'date_format' ), strtotime( $item['dateadded'] ) ) ) . '</span>';
							endif;
							?>

							<!-- Add to cart button -->
							<?php if ( $show_add_to_cart && isset( $stock_status ) && $stock_status != 'out-of-stock' ) : ?>
								<?php woocommerce_template_loop_add_to_cart(); ?>
							<?php endif ?>

							<!-- Change wishlist -->
							<?php if ( $available_multi_wishlist && is_user_logged_in() && count( $users_wishlists ) > 1 && $move_to_another_wishlist && $is_user_owner ) : ?>
							<select class="change-wishlist selectBox">
								<option value=""><?php esc_html_e( 'Move', 'edusphere' ); ?></option>
								<?php
								foreach ( $users_wishlists as $wl ) :
									if ( $wl['wishlist_token'] == $wishlist_meta['wishlist_token'] ) {
										continue;
									}

									?>
									<option value="<?php echo esc_attr( $wl['wishlist_token'] ); ?>">
										<?php
										$wl_title = ! empty( $wl['wishlist_name'] ) ? esc_html( $wl['wishlist_name'] ) : esc_html( $default_wishlsit_title );
										if ( $wl['wishlist_privacy'] == 1 ) {
											$wl_privacy = __( 'Shared', 'edusphere' );
										} elseif ( $wl['wishlist_privacy'] == 2 ) {
											$wl_privacy = __( 'Private', 'edusphere' );
										} else {
											$wl_privacy = __( 'Public', 'edusphere' );
										}

										echo sprintf( '%s - %s', $wl_title, $wl_privacy );
										?>
									</option>
									<?php
								endforeach;
								?>
							</select>
							<?php endif; ?>

							<!-- Remove from wishlist -->
							<?php if ( $is_user_owner && $repeat_remove_button ) : ?>
								<a href="<?php echo esc_url( add_query_arg( 'remove_from_wishlist', $item['prod_id'] ) ); ?>" class="remove_from_wishlist button" title="<?php echo apply_filters( 'yith_wcwl_remove_product_wishlist_message_title', __( 'Remove this product', 'edusphere' ) ); ?>"><?php _e( 'Remove', 'edusphere' ); ?></a>
							<?php endif; ?>
						</td>
					<?php endif; ?>
					</tr>
					<?php
				endif;
			endforeach;
		else :
			?>
			<tr>
				<td colspan="<?php echo esc_attr( $column_count ); ?>" class="wishlist-empty"><?php echo apply_filters( 'yith_wcwl_no_product_to_remove_message', __( 'No products were added to the wishlist', 'edusphere' ) ); ?></td>
			</tr>
			<?php
		endif;

		if ( ! empty( $page_links ) ) :
			?>
			<tr class="pagination-row">
				<td colspan="<?php echo esc_attr( $column_count ); ?>"><?php echo wp_kses( $page_links, 'post' ); ?></td>
			</tr>
		<?php endif ?>
		</tbody>

	</table>

	<?php wp_nonce_field( 'yith_wcwl_edit_wishlist_action', 'yith_wcwl_edit_wishlist' ); ?>

	<?php if ( ! $is_default ) : ?>
		<input type="hidden" value="<?php echo esc_attr( $wishlist_token ); ?>" name="wishlist_id" id="wishlist_id">
	<?php endif; ?>

	<?php do_action( 'yith_wcwl_after_wishlist', $wishlist_meta ); ?>

</form>

<?php do_action( 'yith_wcwl_after_wishlist_form', $wishlist_meta ); ?>

<?php if ( $show_ask_estimate_button && ( ! is_user_logged_in() || $additional_info ) ) : ?>
	<div id="ask_an_estimate_popup">
		<form action="<?php echo esc_url( $ask_estimate_url ); ?>" method="post" class="wishlist-ask-an-estimate-popup">
			<?php if ( ! is_user_logged_in() ) : ?>
				<label for="reply_email"><?php echo apply_filters( 'yith_wcwl_ask_estimate_reply_mail_label', __( 'Your email', 'edusphere' ) ); ?></label>
				<input type="email" value="" name="reply_email" id="reply_email">
			<?php endif; ?>
			<?php if ( ! empty( $additional_info_label ) ) : ?>
				<label for="additional_notes"><?php echo esc_html( $additional_info_label ); ?></label>
			<?php endif; ?>
			<textarea id="additional_notes" name="additional_notes"></textarea>

			<button class="btn button ask-an-estimate-button ask-an-estimate-button-popup" >
				<?php echo apply_filters( 'yith_wcwl_ask_an_estimate_icon', '<i class="fa fa-shopping-cart"></i>' ); ?>
				<?php echo apply_filters( 'yith_wcwl_ask_an_estimate_text', __( 'Ask for an estimate', 'edusphere' ) ); ?>
			</button>
		</form>
	</div>
<?php endif; ?>
