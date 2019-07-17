<?php
/**
 * Sandhills Development child theme functions
 */


/**
 * Definitions
 */
define( 'SHD_SITE_VERSION', '1.0.0' );

define( 'SHD_ROOT', dirname(__FILE__) );
define( 'SHD_INCLUDES', SHD_ROOT . '/includes/' );
define( 'SHD_TEMPLATE_URI', trailingslashit( get_template_directory_uri() ) );
define( 'SHD_STYLESHEET_URI', trailingslashit( get_stylesheet_directory_uri() ) );

define( 'SHD_STRUCTURE', SHD_INCLUDES . 'structure/' );
define( 'SHD_ASSETS', SHD_STYLESHEET_URI . 'includes/assets/' );
define( 'SHD_IMAGES', SHD_STYLESHEET_URI . 'includes/assets/images/' );

define( 'SHD_HOME', trailingslashit( home_url() ) );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function shd_theme_setup() {

	// Specialized functions
	include( SHD_INCLUDES . 'general.php' );

	// Site structure functions
	include( SHD_STRUCTURE . 'header.php' );
	include( SHD_STRUCTURE . 'navigation.php' );

	// Register additional menus
	register_nav_menus( array(
		'secondary_alt' => 'Secondary Menu - Alt',
	) );
}
add_action( 'after_setup_theme', 'shd_theme_setup' );


/**
 * Inherit styles from Themedd and register additional assets
 */
function shd_styles_scripts() {

	// Dequeue various stylesheets
	if ( ! is_user_logged_in() ) {
		wp_deregister_style( 'dashicons' ); // WP Dashicons
	}

	// With SCRIPT_DEBUG set to true, prepare to load unminified resources
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Resource dependencies
	$themedd            = 'themedd';
	$child_css          = 'shd-styles';
	$child_js           = 'shd-scripts';
	$google_fonts       = 'google-fonts'; // PT Sans, Open Sans
	$style_dependencies = array( $themedd, $google_fonts );

	// Enqueue parent theme stylesheet
	wp_enqueue_style( $themedd, SHD_TEMPLATE_URI . 'style.css' );

	// Register child theme stylesheet for later use
	wp_register_style( $child_css, SHD_STYLESHEET_URI . 'style.css', $style_dependencies, SHD_SITE_VERSION );

	// Register Google Fonts dependency
	wp_register_style( $google_fonts, '//fonts.googleapis.com/css?family=Open+Sans|PT+Serif&display=swap' );

	// Enqueue Bootstrap scripts
	wp_enqueue_script( 'bootstrap-js', SHD_ASSETS . 'js/bootstrap' . $suffix . '.js', array( 'jquery' ), SHD_SITE_VERSION );

	// Enqueue child theme scripts
	wp_enqueue_script( $child_js, SHD_ASSETS . 'js/theme' . $suffix . '.js', array( 'jquery' ), SHD_SITE_VERSION );

	// Enqueue child styles last so it easily overrides other styles
	wp_enqueue_style( $child_css );
}
add_action( 'wp_enqueue_scripts', 'shd_styles_scripts' );
