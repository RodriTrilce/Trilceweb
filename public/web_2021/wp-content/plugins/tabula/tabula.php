<?php

/**
 * Plugin Name: Tabula Plugin
 * Description: Shortcodes and widgets by BoldThemes.
 * Version: 1.0.1
 * Author: BoldThemes
 * Author URI: http://bold-themes.com
 */

require_once( 'framework_bt_plugin/framework.php' );

$bt_plugin_dir = plugin_dir_path( __FILE__ );

function bt_load_plugin_textdomain() {

	$domain = 'bt_plugin';
	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

	load_plugin_textdomain( $domain, false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

}
add_action( 'plugins_loaded', 'bt_load_plugin_textdomain' );

function bt_widget_areas() {
	register_sidebar( array (
		'name' 			=> esc_html__( 'Header Left Widgets', 'bt_plugin' ),
		'id' 			=> 'header_left_widgets',
		'before_widget' => '<div class="btTopBox %2$s">', 
		'after_widget' 	=> '</div>'
	));
	register_sidebar( array (
		'name' 			=> esc_html__( 'Header Right Widgets', 'bt_plugin' ),
		'id' 			=> 'header_right_widgets',
		'before_widget' => '<div class="btTopBox %2$s">',
		'after_widget' 	=> '</div>'
	));
	register_sidebar( array (
		'name' 			=> esc_html__( 'Header Menu Widgets', 'bt_plugin' ),
		'id' 			=> 'header_menu_widgets',
		'before_widget' => '<div class="btTopBox %2$s">',
		'after_widget' 	=> '</div>'
	));
	register_sidebar( array (
		'name' 			=> esc_html__( 'Header Logo Widgets', 'bt_plugin' ),
		'id' 			=> 'header_logo_widgets',
		'before_widget' => '<div class="btTopBox %2$s">',
		'after_widget' 	=> '</div>'
	));
	register_sidebar( array (
		'name' 			=> esc_html__( 'Footer Widgets', 'bt_plugin' ),
		'id' 			=> 'footer_widgets',
		'before_widget' => '<div class="btBox %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4><span>',
		'after_title' 	=> '</span></h4>',
	));
}
add_action( 'widgets_init', 'bt_widget_areas', 30 );

/* Portfolio */

if ( ! function_exists( 'bt_create_portfolio' ) ) {
	function bt_create_portfolio() {
		register_post_type( 'portfolio',
			array(
				'labels' => array(
					'name'          => __( 'Portfolio', 'bt_plugin' ),
					'singular_name' => __( 'Portfolio Item', 'bt_plugin' )
				),
				'public'        => true,
				'has_archive'   => true,
				'menu_position' => 5,
				'supports'      => array( 'title', 'editor', 'thumbnail', 'author', 'comments', 'excerpt' ),
				'rewrite'       => array( 'with_front' => false, 'slug' => 'portfolio' )
			)
		);
		register_taxonomy( 'portfolio_category', 'portfolio', array( 'hierarchical' => true, 'label' => __( 'Portfolio Categories', 'bt_plugin' ) ) );
	}
}
add_action( 'init', 'bt_create_portfolio' );

if ( ! function_exists( 'bt_rewrite_flush' ) ) {
	function bt_rewrite_flush() {
		// First, we "add" the custom post type via the above written function.
		// Note: "add" is written with quotes, as CPTs don't get added to the DB,
		// They are only referenced in the post_type column with a post entry, 
		// when you add a post of this CPT.
		bt_create_portfolio();

		// ATTENTION: This is *only* done during plugin activation hook in this example!
		// You should *NEVER EVER* do this on every page load!!
		flush_rewrite_rules();
	}
}
register_activation_hook( __FILE__, 'bt_rewrite_flush' );


/* BB BUTTON */

if ( ! class_exists( 'BB_Button_Widget' ) ) {

	class BB_Button_Widget extends WP_Widget {

		function __construct() {
			parent::__construct(
				'bb_button_widget', // Base ID
				__( 'BB Button', 'bt_plugin' ), // Name
				array( 
					'description' => __( 'Button with icon, text and link.', 'bt_plugin' ), 
					'classname' => 'widget_bb_button_widget' 
				) 
			);
		}

		public function widget( $args, $instance ) {

			$icon = ! empty( $instance['icon'] ) ? $instance['icon'] : '';
			$text = ! empty( $instance['text'] ) ? $instance['text'] : '';
			$url = ! empty( $instance['url'] ) ? $instance['url'] : '';
			$target = ! empty( $instance['target'] ) ? $instance['target'] : '_self';
			$style = ! empty( $instance['style'] ) ? $instance['style'] : 'default';
			$extra_class = '';
			
			if ( $style == 'default' ) {
				$extra_class .= 'btDefaultStyle';
			} else if ( $style == 'accent-light' ) {
				$extra_class .= 'btAccentLightButton';
			} else if ( $style == 'light-accent' ) {
				$extra_class .= 'btLightAccentButton';
			} else if ( $style == 'alternate-light' ) {
				$extra_class .= 'btAlternateLightButton';
			} else if ( $style == 'light-alternate' ) {
				$extra_class .= 'btLightAlternateButton';
			} else if ( $style == 'dark-accent' ) {
				$extra_class .= 'btDarkAccentButton';
			} else if ( $style == 'light-dark-outline' ) {
				$extra_class .= 'btLightDarkOutlineButton';
			}

			$wrap_start_tag = '<div class="btButtonWidget ' . $extra_class . '">';
			$wrap_end_tag = '</div>';

			if ( $url != '' ) {
				$extra_class .= ' btWithLink';
				if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https'  && substr( $url, 0, 6 ) != 'mailto' ) {
					$link = boldthemes_get_permalink_by_slug( $url );
				} else {
					$link = $url;
				}
				$wrap_start_tag = '<div class="btButtonWidget ' . $extra_class . '"><a href="' . $link . '" target="' . $target . '" class="btButtonWidgetLink">';
				$wrap_end_tag = '</a></div>';
			}

			echo $wrap_start_tag;
			if ( $icon != '' && $icon != 'no_icon' ) {
					echo '<div class="btIconWidgetIcon">';
						echo bt_bb_icon::get_html( $icon );
					echo '</div>';
				}
				if ( $text != '' ) {
					echo '<span class="btButtonWidgetText">' . $text . '</span>';
				}
			echo $wrap_end_tag;
		}

		public function form( $instance ) {
			$icon = ! empty( $instance['icon'] ) ? $instance['icon'] : '';
			$text = ! empty( $instance['text'] ) ? $instance['text'] : '';
			$url = ! empty( $instance['url'] ) ? $instance['url'] : '';
			$target = ! empty( $instance['target'] ) ? $instance['target'] : '';
			$style = ! empty( $instance['style'] ) ? $instance['style'] : 'default';

			if ( function_exists( 'boldthemes_get_icon_fonts_bb_array' ) ) {
				$icon_arr = boldthemes_get_icon_fonts_bb_array();
			} else {
				require_once( dirname(__FILE__) . '/../../content_elements_misc/fa_icons.php' );
				require_once( dirname(__FILE__) . '/../../content_elements_misc/s7_icons.php' );
				$icon_arr = array( 'Font Awesome' => bt_bb_fa_icons(), 'S7' => bt_bb_s7_icons() );
			}

			$clear_display = $icon != '' ? 'block' : 'none';
			
			$icon_set = '';
			$icon_code = '';
			$icon_name = '';

			if ( $icon != '' ) {
				$icon_set = substr( $icon, 0, -5 );
				$icon_code = substr( $icon, -4 );
				$icon_code = '&#x' . $icon_code;
				foreach( $icon_arr as $k => $v ) {
					foreach( $v as $k_inner => $v_inner ) {
						if ( $icon == $v_inner ) {
							$icon_name = $k_inner;
						}
					}
				}
			}

			?>
			<div class="bt_bb_iconpicker_widget_container">
				<label for="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>"><?php _e( 'Icon:', 'bold-builder' ); ?></label>
				<div class="bt_bb_iconpicker">
					<input type="hidden" id="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon' ) ); ?>">
					<div class="bt_bb_iconpicker_select">
						<div class="bt_bb_icon_preview bt_bb_icon_preview_<?php echo $icon_set; ?>" data-icon="<?php echo $icon; ?>" data-icon-code="<?php echo $icon_code; ?>"></div>
						<div class="bt_bb_iconpicker_select_text"><?php echo $icon_name; ?></div>
						<i class="fa fa-close bt_bb_iconpicker_clear" style="display:<?php echo $clear_display; ?>"></i>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="bt_bb_iconpicker_filter_container">
						<input type="text" class="bt_bb_filter" placeholder="<?php _e( 'Filter...', 'bold-builder' ); ?>">
					</div>
					<div class="bt_bb_iconpicker_icons">
						<?php
						$icon_content = '';
						foreach( $icon_arr as $k => $v ) {
							$icon_content .= '<div class="bt_bb_iconpicker_title">' . $k . '</div>';
							foreach( $v as $k_inner => $v_inner ) {
								$icon = $v_inner;
								$icon_set = substr( $icon, 0, -5 );
								$icon_code = substr( $icon, -4 );
								$icon_content .= '<div class="bt_bb_icon_preview bt_bb_icon_preview_' . esc_attr( $icon_set ) . '" data-icon="' . esc_attr( $icon ) . '" data-icon-code="&#x' . esc_attr( $icon_code ) . '" title="' . esc_attr( $k_inner ) . '"></div>';
							}
						}
						echo $icon_content;
						?>
					</div>
				</div>
			</div>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( 'Text:', 'bt_plugin' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>">
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'style' ) ); ?>"><?php _e( 'Style:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'style' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'style' ) ); ?>">
					<option value=""></option>;
					<?php
					$style_arr = array("Default" => "default", "Accent font, Light background" => "accent-light", "Light font, Accent background" => "light-accent", "Alternate font, Light background" => "alternate-light", "Light font, Alternate background" => "light-alternate", "Dark font, Accent background" => "dark-accent", "Light font - Outline" => "light-dark-outline" );
					foreach( $style_arr as $key => $value ) {
						if ( $value == $style ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"><?php _e( 'URL or slug:', 'bt_plugin' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>"><?php _e( 'Target:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>">
					<option value=""></option>;
					<?php
					$target_arr = array("Self" => "_self", "Blank" => "_blank", "Parent" => "_parent", "Top" => "_top");
					foreach( $target_arr as $key => $value ) {
						if ( $value == $target ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
			<?php 
		}

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['icon'] = ( ! empty( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : strip_tags( $old_instance['icon'] );
			$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
			$instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
			$instance['target'] = ( ! empty( $new_instance['target'] ) ) ? strip_tags( $new_instance['target'] ) : '';
			$instance['style'] = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';

			return $instance;
		}
	}	
}


/* Register widgets */


if ( ! function_exists( 'tabula_register_widgets' ) ) {
	function tabula_register_widgets() {
		register_widget( 'BB_Button_Widget' );
	}
}
add_action( 'widgets_init', 'tabula_register_widgets' );