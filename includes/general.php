<?php
/**
 * General theme functions
 */


function shd_body_classes_front_end( $classes ) {

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	return $classes;
}
add_action( 'body_class', 'shd_body_classes_front_end' );