<?php
/**
 * Themedd child theme.
 */
function themedd_child_styles() {

    $parent_style = 'themedd';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'themedd-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'themedd_child_styles' );

/**
 * Place any custom functionality/code snippets below.
 */
