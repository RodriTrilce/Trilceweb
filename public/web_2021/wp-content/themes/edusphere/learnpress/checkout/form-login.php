<?php
/**
 * Template for displaying log in form.
 *
 * This template can be overridden by copying it to yourtheme/edusphere/checkout/form-login.php.
 *
 * @author   ThimPress
 * @package  edusphere/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php
if ( is_user_logged_in() ) {
	return;
}
?>

<div id="learn-press-checkout-login" class="learn-press-form login">

	<?php
	/**
	 * @deprecated
	 */
	do_action( 'learn_press_checkout_before_user_login_form' );

	?>

    
	<?php
	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/before-checkout-form-login-fields' );

	?>
    <div id="checkout-form-login">
        <?php if(0===1){?>
        <ul class="form-fields">

			<?php
			/**
			 * @deprecated
			 */
			do_action( 'learn_press_checkout_user_login_before_form_fields' );

			/**
			 * @since 3.0.0
			 */
			do_action( 'learn-press/begin-checkout-form-login-fields' );

			?>

            <li class="form-field">
                <label for="user_login">
                    <span class="field-label"><?php esc_html_e( 'Username', 'edusphere' ); ?></span>
                    <span class="required">*</span>
                </label>
                <input class="field-input" type="text" name="username"/>
            </li>
            <li class="form-field">
                <label for="user_password">
                    <span class="field-label"><?php esc_html_e( 'Password', 'edusphere' ); ?></span>
                    <span class="required">*</span>
                </label>
                <input class="field-input" type="password" name="password"/>
            </li>

			<?php
			/**
			 * @since 3.0.0
			 */
			do_action( 'learn-press/end-checkout-form-login-fields' );

			/**
			 * @deprecated
			 */
			do_action( 'learn_press_checkout_user_login_after_form_fields' );
			?>

        </ul>



		<?php


		/**
		 * @since 3.0.0
		 */
		do_action( 'learn-press/before-checkout-form-login-button' );
		?>
        <p>
			<?php wp_nonce_field( 'learn-press-login', 'learn-press-login-nonce' ); ?>
            <button id="learn-press-checkout-login-button"><?php _e( 'Login', 'edusphere' ); ?></button>
            <a href="" class="checkout-form-login-toggle" data-toggle="hide"><?php _e( 'Cancel', 'edusphere' ); ?></a>
        </p>
        <?php }?>


        <?php learn_press_get_template('global/form-login.php');?>
    

    </div>
	<?php
	/**
	 * @since 3.0.0
	 */
	do_action( 'learn-press/after-checkout-form-login-fields' );

	/**
	 * @deprecated
	 */
	do_action( 'learn_press_checkout_after_user_login_form' );
	?>

</div>
