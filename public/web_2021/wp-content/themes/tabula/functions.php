<?php

// Register action/filter callbacks

add_action( 'after_setup_theme', 'tabula_register_menus' );
add_action( 'wp_enqueue_scripts', 'tabula_enqueue_scripts_styles' );
add_action( 'tgmpa_register', 'tabula_register_plugins' );
add_action( 'wp_enqueue_scripts', 'tabula_load_fonts' );
add_action( 'admin_init', 'tabula_theme_add_editor_styles' );
add_action( 'admin_enqueue_scripts', 'tabula_load_fonts' );
add_action( 'admin_enqueue_scripts', 'tabula_load_admin_style' );

add_action( 'widgets_init', 'tabula_widget_area' );

add_filter( 'bt_bb_color_scheme_arr', 'tabula_color_schemes' );

add_filter( 'body_class', 'tabula_body_class' );

add_filter( 'tiny_mce_before_init', 'tabula_editor_dynamic_styles' );

add_theme_support( 'customize-selective-refresh-widgets' );

// Default values

// callbacks

/**
 * Register navigation menus
 */
if ( ! function_exists( 'tabula_register_menus' ) ) {
	function tabula_register_menus() {
		register_nav_menus( array (
			'primary' => esc_html__( 'Primary Menu', 'tabula' ),
			'footer'  => esc_html__( 'Footer Menu', 'tabula' )
		));
	}
}

/**
 * Enqueue scripts and styles
 */
if ( ! function_exists( 'tabula_enqueue_scripts_styles' ) ) {
	function tabula_enqueue_scripts_styles() {
		
		BoldThemesFramework::$crush_vars_def = array( 'accentColor', 'alternateColor', 'bodyFont', 'menuFont', 'headingFont', 'headingSuperTitleFont', 'headingSubTitleFont', 'logoHeight', 'crestWidth'  );
		
		// Custom accent color and font style
		$boldthemes_add_override_css = false;		
		
		$accent_color = boldthemes_get_option( 'accent_color' );
		$alternate_color = boldthemes_get_option( 'alternate_color' );
		$body_font = urldecode( boldthemes_get_option( 'body_font' ) );
		$menu_font = urldecode( boldthemes_get_option( 'menu_font' ) );
		$heading_font = urldecode( boldthemes_get_option( 'heading_font' ) );
		$heading_supertitle_font = urldecode( boldthemes_get_option( 'heading_supertitle_font' ) );
		$heading_subtitle_font = urldecode( boldthemes_get_option( 'heading_subtitle_font' ) );
		$logo_height = urldecode( boldthemes_get_option( 'logo_height' ) );
		$crest_width = urldecode( boldthemes_get_option( 'crest_width' ) );

		if ( $accent_color != '' ) {
			BoldThemesFramework::$crush_vars['accentColor'] = $accent_color;
			if ( $accent_color != BoldThemes_Customize_Default::$data['accent_color'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $alternate_color != '' ) {
			BoldThemesFramework::$crush_vars['alternateColor'] = $alternate_color;
			if ( $alternate_color != BoldThemes_Customize_Default::$data['alternate_color'] ) {
				$boldthemes_add_override_css = true;
			}
		}
		if ( $body_font != '' ) {
			if ( $body_font == 'no_change' ) {
				$body_font = BoldThemes_Customize_Default::$data['body_font'];
			}
			BoldThemesFramework::$crush_vars['bodyFont'] = $body_font;
			if ( $body_font != BoldThemes_Customize_Default::$data['body_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $menu_font != '' ) {
			if ( $menu_font == 'no_change' ) {
				$menu_font = BoldThemes_Customize_Default::$data['menu_font'];
			}
			BoldThemesFramework::$crush_vars['menuFont'] = $menu_font;
			if ( $menu_font != BoldThemes_Customize_Default::$data['menu_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_font != '' ) {
			if ( $heading_font == 'no_change' ) {
				$heading_font = BoldThemes_Customize_Default::$data['heading_font'];
			}
			BoldThemesFramework::$crush_vars['headingFont'] = $heading_font;
			if ( $heading_font != BoldThemes_Customize_Default::$data['heading_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_supertitle_font != '' ) {
			if ( $heading_supertitle_font == 'no_change' ) {
				$heading_supertitle_font = BoldThemes_Customize_Default::$data['heading_supertitle_font'];
			}
			BoldThemesFramework::$crush_vars['headingSuperTitleFont'] = $heading_supertitle_font;
			if ( $heading_supertitle_font != BoldThemes_Customize_Default::$data['heading_supertitle_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $heading_subtitle_font != '' ) {
			if ( $heading_subtitle_font == 'no_change' ) {
				$heading_subtitle_font = BoldThemes_Customize_Default::$data['heading_subtitle_font'];
			}
			BoldThemesFramework::$crush_vars['headingSubTitleFont'] = $heading_subtitle_font;
			if ( $heading_subtitle_font != BoldThemes_Customize_Default::$data['heading_subtitle_font'] ) {
				$boldthemes_add_override_css = true;
			}
		}
		
		if ( $logo_height != '' ) {
			BoldThemesFramework::$crush_vars['logoHeight'] = $logo_height;
			if ( $logo_height != BoldThemes_Customize_Default::$data['logo_height'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		if ( $crest_width != '' ) {
			BoldThemesFramework::$crush_vars['crestWidth'] = $crest_width;
			if ( $crest_width != BoldThemes_Customize_Default::$data['crest_width'] ) {
				$boldthemes_add_override_css = true;
			}
		}

		// Create override file without local settings

		if ( function_exists( 'boldthemes_csscrush_file' ) ) {
			boldthemes_csscrush_file( get_theme_file_path( 'style.crush.css' ), array( 'source_map' => true, 'minify' => false, 'output_file' => 'style', 'formatter' => 'block', 'boilerplate' => false, 'vars' => BoldThemesFramework::$crush_vars, 'plugins' => array( 'loop', 'ease' ) ) );
		}

		// custom theme css
		wp_enqueue_style( 'tabula-style', get_parent_theme_file_uri( 'style.css' ), array(), false, 'screen' );
		wp_enqueue_style( 'tabula-print', get_parent_theme_file_uri( 'print.css' ), array(), false, 'print' );

		// external js
		wp_enqueue_script( 'fancySelect', get_parent_theme_file_uri( 'framework/js/fancySelect.js' ), array( 'jquery' ), '', true );
		
		// customized external js
		// wp_enqueue_script( 'tabula-modernizr', get_parent_theme_file_uri( 'framework/js/modernizr.custom.js' ), array( 'jquery' ), '', false );

		// custom theme js
		wp_enqueue_script( 'tabula-header', get_parent_theme_file_uri( 'framework/js/header.misc.js' ), array( 'jquery' ), '', true );
		wp_enqueue_script( 'tabula-misc', get_parent_theme_file_uri( 'framework/js/misc.js' ), array( 'jquery' ), '', true );
		
		wp_add_inline_script( 'tabula-header', boldthemes_set_global_uri(), 'before' );
		
		// wp_dequeue_style( 'bt_cc_style' );
		
		if ( file_exists( get_parent_theme_file_path( 'css-override.php' ) ) && $boldthemes_add_override_css ) {
			require_once( get_parent_theme_file_path( 'css-override.php' ) );
			wp_add_inline_style( 'tabula-style', $css_override );
		}
		
		if ( file_exists( get_parent_theme_file_path( 'icons.php' ) ) ) {
			require_once( get_parent_theme_file_path( 'icons.php' ) );
			wp_add_inline_style( 'tabula-style', $icons );
		}

		if ( boldthemes_get_option( 'custom_js' ) != '' ) {
			wp_add_inline_script( 'tabula-misc', boldthemes_get_option( 'custom_js' ) );
		}	
		
	}
}

/**
 * Register the required plugins for this theme
 */
if ( ! function_exists( 'tabula_register_plugins' ) ) {
	function tabula_register_plugins() {

		$plugins = array(
	 
			array(
				'name'               => esc_html__( 'Tabula', 'tabula' ), // The plugin name.
				'slug'               => 'tabula', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/tabula.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '1.0.1', ///!do not change this comment! E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Cost Calculator', 'tabula' ), // The plugin name.
				'slug'               => 'bt' . '_cost_calculator', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/' . 'bt' . '_cost_calculator.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '1.2.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Bold Builder', 'tabula' ), // The plugin name.
				'slug'               => 'bold-page-builder', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'BoldThemes WordPress Importer', 'tabula' ), // The plugin name.
				'slug'               => 'bt' . '_wordpress_importer', // The plugin slug (typically the folder name).
				'source'             => get_parent_theme_file_path( 'plugins/' . 'bt' . '_wordpress_importer.zip' ), // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '1.0.6', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'               => esc_html__( 'Meta Box', 'tabula' ), // The plugin name.
				'slug'               => 'meta-box', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'Contact Form 7', 'tabula' ), // The plugin name.
				'slug'               => 'contact-form-7', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			),
			array(
				'name'               => esc_html__( 'WooSidebars', 'tabula' ), // The plugin name.
				'slug'               => 'woosidebars', // The plugin slug (typically the folder name).
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			)
		);
	 
		$config = array(
			'default_path' => '',                      // Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'tabula' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'tabula' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'tabula' ), // %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'tabula' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tabula' ), // %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tabula' ), // %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'tabula' ), // %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tabula' ), // %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tabula' ), // %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'tabula' ), // %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tabula' ), // %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'tabula' ), // %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'tabula' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'tabula' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'tabula' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'tabula' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'tabula' ), // %s = dashboard link.
				'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);
	 
		tgmpa( $plugins, $config );
	 
	}
}

/**
 * Loads custom Google Fonts
 */
if ( ! function_exists( 'tabula_load_fonts' ) ) {
	function tabula_load_fonts() {
		$body_font = urldecode( boldthemes_get_option( 'body_font' ) );
		$heading_font = urldecode( boldthemes_get_option( 'heading_font' ) );
		$menu_font = urldecode( boldthemes_get_option( 'menu_font' ) );
		$heading_subtitle_font = urldecode( boldthemes_get_option( 'heading_subtitle_font' ) );
		$heading_supertitle_font = urldecode( boldthemes_get_option( 'heading_supertitle_font' ) );
		
		$font_families = array();
		
		if ( $body_font != '' ) {
			if ( $body_font == 'no_change' ) {
				$body_font = BoldThemes_Customize_Default::$data['body_font'];
			}
			$font_families[] = $body_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$body_font_state = _x( 'on', 'Lato font: on or off', 'tabula' );
			if ( 'off' !== $body_font_state ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}
		
		if ( $heading_font != '' ) {
			if ( $heading_font == 'no_change' ) {
				$heading_font = BoldThemes_Customize_Default::$data['heading_font'];
			}
			$font_families[] = $heading_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$heading_font_state = _x( 'on', 'Lato font: on or off', 'tabula' );
			if ( 'off' !== $heading_font_state ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}
		
		if ( $menu_font != '' ) {
			if ( $menu_font == 'no_change' ) {
				$menu_font = BoldThemes_Customize_Default::$data['menu_font'];
			}
			$font_families[] = $menu_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$menu_font_state = _x( 'on', 'Lato font: on or off', 'tabula' );
			if ( 'off' !== $menu_font_state ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( $heading_subtitle_font != '' ) {
			if ( $heading_subtitle_font == 'no_change' ) {
				$heading_subtitle_font = BoldThemes_Customize_Default::$data['heading_subtitle_font'];
			}
			$font_families[] = $heading_subtitle_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$heading_subtitle_font_state = _x( 'on', 'Lato font: on or off', 'tabula' );
			if ( 'off' !== $heading_subtitle_font_state ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( $heading_supertitle_font != '' ) {
			if ( $heading_supertitle_font == 'no_change' ) {
				$heading_supertitle_font = BoldThemes_Customize_Default::$data['heading_supertitle_font'];
			}
			$font_families[] = $heading_supertitle_font . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		} else {
			$heading_supertitle_font_state = _x( 'on', 'Lato font: on or off', 'tabula' );
			if ( 'off' !== $heading_supertitle_font_state ) {
				$font_families[] = 'Lato' . ':100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
			}
		}

		if ( count( $font_families ) > 0 ) {
			$query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);
			$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
			wp_enqueue_style( 'boldthemes-fonts', $font_url, array(), '1.0.0' );
			add_editor_style( $font_url );
		}
	}
}

if ( ! function_exists( 'tabula_load_admin_style' ) ) {
	function tabula_load_admin_style() {
		if ( function_exists( 'boldthemes_csscrush_file' ) ) {
			boldthemes_csscrush_file( get_theme_file_path( 'admin-style.crush.css' ), array( 'source_map' => true, 'minify' => false, 'output_file' => 'admin-style', 'formatter' => 'block', 'boilerplate' => false, 'vars' => BoldThemesFramework::$crush_vars, 'plugins' => array( 'loop', 'ease' ) ) );
		}
		wp_enqueue_style( 'tabula-style', get_parent_theme_file_uri( 'admin-style.css' ) );
		require_once( get_parent_theme_file_path( 'admin-style.php' ) );
		wp_add_inline_style( 'tabula-style', $admin_style );
	}
}

/**
 * TinyMCE style
 */
if ( ! function_exists( 'tabula_theme_add_editor_styles' ) ) {
	function tabula_theme_add_editor_styles() {
	    add_editor_style( 'admin-style.css' );
	}
}

/**
 * Add Quote to TinyMCE editor
 */

if ( ! function_exists( 'tabula_editor_dynamic_styles' ) ) {
	function tabula_editor_dynamic_styles( $mceInit ) {
	    $styles = '@font-face{font-family:\"Quote\";src:url(\"' . get_parent_theme_file_uri( 'fonts/Quote.woff' ) . '\") format(\"woff\"),url(\"' . get_parent_theme_file_uri( 'fonts/Quote.ttf' ) . '\") format(\"truetype\");}';
	    if ( isset( $mceInit['content_style'] ) ) {
	        $mceInit['content_style'] .= ' ' . ( $styles ) . ' ';
	    } else {
	        $mceInit['content_style'] = $styles . ' ';
	    }
	    return $mceInit;
	}
}

/**
 * Add class to body
 *
 * @return string 
 */
if ( ! function_exists( 'tabula_body_class' ) ) {
	function tabula_body_class( $extra_class ) {
		if ( boldthemes_get_option( 'default_heading_weight' ) ) {
			$extra_class[] =  'btHeadingWeight_' . boldthemes_get_option( 'default_heading_weight' );
		}
		if ( boldthemes_get_option( 'heading_dash' ) ) {
			$extra_class[] =  'btHeadingDash_' . boldthemes_get_option( 'heading_dash' );
		}
		if ( boldthemes_get_option( 'default_menu_weight' ) ) {
			$extra_class[] =  'btMenuWeight_' . boldthemes_get_option( 'default_menu_weight' );
		}
		if ( boldthemes_get_option( 'capitalize_main_menu' ) ) {
			$extra_class[] = 'btCapitalizeMainMenuItems';
		}
		if ( boldthemes_get_option( 'crest' ) ) {
			$extra_class[] =  'btHasCrest';
		}
		if ( boldthemes_get_option( 'logo' ) ) {
			$extra_class[] =  'btHasLogo';
		} else {
			$extra_class[] =  'btNoLogo';
		}
		if ( boldthemes_get_option( 'page_width' ) == 'boxed_1500' ) {
			$extra_class[] = 'btBoxedPage1500';
		}
		return $extra_class;
	}
}

/**
 * Shop sidebar
 */
if ( ! function_exists( 'tabula_widget_area' ) ) {
	function tabula_widget_area() {
		if ( class_exists( 'woocommerce' ) ) {
			register_sidebar( array (
				'name' 			=> esc_html__( 'Shop Sidebar', 'tabula' ),
				'id' 			=> 'bt_shop_sidebar',
				'description'   => 'WooCommerce sidebar',
				'before_widget' => '<div class="btBox %2$s">',
				'after_widget' 	=> '</div>',
				'before_title' 	=> '<h4><span>',
				'after_title' 	=> '</span></h4>',
			));
		}
	}
}

require_once( get_parent_theme_file_path( 'php/before_framework.php' ) );
require_once( get_parent_theme_file_path( 'framework/framework.php' ) );
require_once( get_parent_theme_file_path( 'php/config.php' ) );
require_once( get_parent_theme_file_path( 'php/after_framework.php' ) );