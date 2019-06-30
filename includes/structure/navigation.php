<?php
/**
 * Custom navigation functions
 */

function shd_secondary_navigation_alt( $args = array() ) {

	$defaults = array(
		'menu_classes' => array()
	);

	$args = wp_parse_args( $args, $defaults );

	// Add any default menu classes that cannot be overridden.
	$args['menu_classes'][] = 'navbar-nav';

	ob_start();

	wp_nav_menu(
		array(
			'theme_location'  => 'nav_secondary_alt',
			'depth'           => 2,
			'container'	      => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_id'         => 'menu-secondary-alt',
			'menu_class'      => implode( ' ', $args['menu_classes'] ),
			'fallback_cb'     => '',
			'walker'          => new WP_Bootstrap_Navwalker()
		)
	);

	return ob_get_clean();
}