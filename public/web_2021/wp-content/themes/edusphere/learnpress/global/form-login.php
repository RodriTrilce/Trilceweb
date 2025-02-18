<?php
/**
 * Template for displaying template of login form.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/global/form-login.php.
 *
 * @author  ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$profile = LP_Global::profile();
$fields  = $profile->get_login_fields();
?>
<div class="col-md-5">
	<?php do_action( 'learn-press/before-form-login' ); ?>
	<div class="learn-press-form-login learn-press-form">
		<h3><?php echo _x( 'Login', 'login-heading', 'edusphere' ); ?></h3>
		<form name="learn-press-login" method="post" action="">

			<?php do_action( 'learn-press/before-form-login-fields' ); ?>

			<ul class="form-fields">
				<?php foreach ( $fields as $field ) { ?>
					<li class="form-field">
						<?php LP_Meta_Box_Helper::show_field( $field ); ?>
					</li>
				<?php } ?>
			</ul>

			<?php do_action( 'learn-press/after-form-login-fields' ); ?>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p>
						<label>
							<input type="checkbox" name="rememberme"/>
							<?php esc_html_e( 'Remember me', 'edusphere' ); ?>
						</label>
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p>
						<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'edusphere' ); ?></a>
					</p>
				</div>
			</div>
			<p>
				<input type="hidden" name="learn-press-login-nonce" value="<?php echo wp_create_nonce( 'learn-press-login' ); ?>">
				<button type="submit"><?php esc_html_e( 'Login', 'edusphere' ); ?></button>
			</p>			
		</form>		
	</div>
	<?php do_action( 'learn-press/after-form-login' ); ?>

	
</div>
