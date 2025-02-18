<?php
/**
 * Template for displaying register form.
 *
 * This template can be overridden by copying it to yourtheme/edusphere/checkout/form-register.php.
 *
 * @author   ThimPress
 * @package  edusphere/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( is_user_logged_in() ) {
	return;
}
?>

<div id="learn-press-checkout-register" class="learn-press-form register">

	<?php
	/**
	 * @deprecated
	 */
	do_action( 'learn_press_checkout_before_user_register_form' );

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/before-checkout-form-register' );
	?>

     <div id="checkout-form-register">

		<?php
		$profile = LP_Global::profile();

		if ( ! $profile->get_user()->is_guest() ) {
			return;
		}

		if ( ! $fields = $profile->get_register_fields() ) {
			return;
		}

		learn_press_get_template( 'global/form-register.php', array( 'fields' => $fields ) );
		?>

        
    </div>

	<?php
	// @deprecated
	do_action( 'learn_press_checkout_after_user_register_form' );

	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/after-checkout-form-register' );
	?>

</div>

