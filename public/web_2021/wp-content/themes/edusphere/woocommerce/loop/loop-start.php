<?php
/**
 * Template Loop Start
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.7.1
 */
if (empty($_REQUEST['sidebar'])) {
    $_REQUEST['sidebar']=0;
}
?>

<div class="clearfix"></div>

<!-- radiantthemes-shop -->
<?php if ( is_singular( 'product' ) ) { ?>
	<div class="radiantthemes-shop four-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">

<?php } elseif ( 'shop-style-three-column' === radiantthemes_global_var( 'shop-style', '', false ) || $_REQUEST['sidebar'] ) { ?>
	<div class="radiantthemes-shop three-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">
<?php } elseif ( 'shop-style-four-column' === radiantthemes_global_var( 'shop-style', '', false ) ) { ?>
	<div class="radiantthemes-shop four-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">	
<?php } elseif ( 'shop-style-five-column' === radiantthemes_global_var( 'shop-style', '', false ) ) { ?>
	<div class="radiantthemes-shop five-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">
<?php } elseif ( 'shop-style-six-column' === radiantthemes_global_var( 'shop-style', '', false ) ) { ?>
	<div class="radiantthemes-shop six-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">
<?php } else { ?>
	<div class="radiantthemes-shop four-column <?php echo esc_attr( radiantthemes_global_var( 'shop_box_style', '', false ) ); ?>">
<?php } ?>