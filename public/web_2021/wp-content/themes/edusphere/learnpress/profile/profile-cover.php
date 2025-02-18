<?php
/**
 * Template for displaying user profile cover image.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/profile/profile-cover.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$profile = LP_Profile::instance();

$user    = $profile->get_user();
$user_id = $user->get_id();
?>

<div id="learn-press-profile-header" class="lp-profile-header">
	<div class="row">
		<div class="col-md-5 col-sm-6 col-xs-12">
			<div class="lp-profile-cover">
				<div class="lp-profile-avatar">
					<?php
					echo wp_kses(
						$user->get_profile_picture( '', 470 ),
						array(
							'img' => array(
								'id'     => array(),
								'class'  => array(),
								'style'  => array(),
								'src'    => array(),
								'width'  => array(),
								'height' => array(),
								'alt'    => array(),
								'srcset' => array(),
								'sizes'  => array(),
							),
						)
					);
					?>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-push-1">
			<div class="lp-profile-info">
				<?php echo '<h3 class="profile-name">' . esc_html( $user->get_display_name() ) . '</h3>'; ?>
				<?php radiantthemes_get_author_meta_career( $user_id ); ?>
				<?php echo '<div class="author-bio">' . esc_html( $user->get_description() ) . '</div>'; ?>
				<h5 class="profile-contact-info"><?php esc_html_e( 'Contact', 'edusphere' ); ?></h5>
				<div class="profile-author-meta">
					<?php radiantthemes_get_author_meta_phone_number( $user_id ); ?>
					<?php radiantthemes_get_author_meta_email( $user_id ); ?>
				</div>
				<?php radiantthemes_get_author_socials( $user_id ); ?>
			</div>
		</div>
	</div>
</div>
