<?php
/**
 * Sandhills Development child theme.
 */
function sd_styles() {

	$parent_style = 'themedd';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'sd-child',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'sd_styles' );
