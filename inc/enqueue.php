<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
        wp_enqueue_style( 'countdown-styles', get_template_directory_uri() . '/css/countdown.css', array(), $the_theme->get( 'Version' ) );
        wp_enqueue_style( 'fa-styles', get_stylesheet_directory_uri() . '/web-fonts-with-css/css/fontawesome-all.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'global-styles', get_template_directory_uri() . '/css/global.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'splash-styles', get_template_directory_uri() . '/css/splash.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'nav-styles', get_template_directory_uri() . '/css/nav.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'scheduletabs-styles', get_template_directory_uri() . '/css/schedule-tabs.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'mobile-menu-styles', get_template_directory_uri() . '/css/mobile-menu.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'nav-scrolled-styles', get_template_directory_uri() . '/css/nav-scrolled.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'alert-styles', get_template_directory_uri() . '/css/alert.css', array(), '8.3' );
		wp_enqueue_style( 'flickity', get_template_directory_uri() . '/css/flickity.css', array(), $the_theme->get( 'Version' ) );
        
        wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), true);
		wp_enqueue_style( 'default-styles', get_template_directory_uri() . '/css/default.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'attend-styles', get_template_directory_uri() . '/css/attend.css?v=1.0', array() );
		wp_enqueue_style( 'exhibit-styles', get_template_directory_uri() . '/css/exhibit.css', array(), $the_theme->get( 'Version' ) );
        wp_enqueue_style( 'register-styles', get_template_directory_uri() . '/css/register.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'footer-styles', get_template_directory_uri() . '/css/footer.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array(), true);
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
