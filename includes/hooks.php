<?php
/**
 * General actions and filters
 */


/**
 * Conditionally add body classes to the site structure
 *
 * @param $classes Already-applied body classes
 *
 * @return array
 */
function shd_body_classes_front_end( $classes ) {

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	$page_body_classes = array( 'projects', 'about', 'careers', 'contact' );

	foreach ( $page_body_classes as $page ) {

		if ( is_page( $page ) ) {
			$classes[] = $page . '-page';
		}
	}

	return $classes;
}
add_action( 'body_class', 'shd_body_classes_front_end' );


/**
 * Control the blog post excerpt length
 *
 * @param $length
 *
 * @return int
 */
function shd_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'shd_excerpt_length', 999 );


/**
 * Remove the post excerpt More Link
 */
function shd_post_excerpt_more_link() {
	return ' ...';
}
add_filter( 'excerpt_more', 'shd_post_excerpt_more_link' );


/**
 * Override themedd_header to add custom title and subtitle functions
 */
function shd_themedd_header( $header ) {
	$header['title']    = shd_get_the_title();
	$header['subtitle'] = shd_get_the_subtitle();
	return $header;
}
add_filter( 'themedd_header_args', 'shd_themedd_header' );


/**
 * Tweak singular featured images
 */
function shd_post_thumbnail( $defaults ) {
	$defaults['classes'][] = 'shd-featured-image';
	return $defaults;
}
add_filter( 'themedd_post_thumbnail_defaults', 'shd_post_thumbnail' );