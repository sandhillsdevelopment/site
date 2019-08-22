<?php
/**
 * General theme functions
 */

/**
 * Conditionally add body classes to the site structure
 *
 * @param $classes
 *
 * @return array
 */
function shd_body_classes_front_end( $classes ) {

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	return $classes;
}
add_action( 'body_class', 'shd_body_classes_front_end' );

/**
 * Get all of our projects.
 */
function shd_get_our_projects() {

	$our_projects = array(
		'awp'  => array(
			'name' => 'AffiliateWP',
			'desc' => 'A full-featured affiliate program solution for WordPress sites.',
			'url'  => 'https://affiliatewp.com/'
		),
		'edd'  => array(
			'name' => 'Easy Digital Downloads',
			'desc' => 'A complete eCommerce solution for selling digital products on WordPress.',
			'url'  => 'https://easydigitaldownloads.com/'
		),
		'rcp'  => array(
			'name' => 'Restrict Content Pro',
			'desc' => 'A full-featured, powerful membership solution for WordPress.',
			'url'  => 'https://restrictcontentpro.com/'
		),
		'sc'   => array(
			'name' => 'Sugar Calendar',
			'desc' => 'A sweet, simple event calendar plugin for WordPress.',
			'url'  => 'https://sugarcalendar.com/'
		),
		'wpsp' => array(
			'name' => 'WP Simple Pay',
			'desc' => 'The #1 Stripe Payments Plugin for WordPress.',
			'url'  => 'https://wpsimplepay.com/'
		),
		'sb'   => array(
			'name' => 'Sellbird',
			'desc' => 'Helping your digital product and media sales take flight.',
			'url'  => 'http://sellbird.com/'
		),
		'pp'   => array(
			'name' => 'Pippin\'s Plugins',
			'desc' => 'Finely crafted WordPress plugins, tutorials, reviews and more.',
			'url'  => 'https://pippinsplugins.com/'
		),
		'beer' => array(
			'name' => 'Sandhills Brewing',
			'desc' => 'Central Kansas brewery focusing on barrel aged wild ales.',
			'url'  => 'https://sandhillsbrewing.com/'
		),
	);

	return (array) $our_projects;
}


/**
 * Get all of the team members. If they go by a specific name, say so. Also indicate if
 * they were the first person to join the company in a calendar year.
 *
 * @return array All team members and information about their year joined and names
 */
function shd_get_our_people() {

	$our_people = array(
		'pippin'   => array( 'name' => 'Pippin Williamson', 'year_joined' => '2009' ),
		'sean'     => array( 'name' => 'Sean Davis', 'year_joined' => '2014' ),
		'andrew'   => array( 'name' => 'Andrew Munro', 'year_joined' => '2015' ),
		'chris'    => array( 'name' => 'Chris Klosowski' ),
		'lisa'     => array( 'name' => 'Lisa Gibson', 'year_joined' => '2016' ),
		'drew'     => array( 'name' => 'Drew Jaynes' ),
		'ashley'   => array( 'name' => 'Ashley Gibson', 'year_joined' => '2017' ),
		'kyle'     => array( 'name' => 'Kyle Maurer' ),
		'ginger'   => array( 'name' => 'Ginger Coolidge' ),
		'phil_j'   => array( 'name' => 'Phil Johnston', 'nickname' => 'Phil J.' ),
		'keri'     => array( 'name' => 'Keri Jacoby' ),
		'john'     => array( 'name' => 'John Jacoby' ),
		'tyler'    => array( 'name' => 'Tyler Lau', 'year_joined' => '2018' ),
		'daniel'   => array( 'name' => 'Daniel Goldak' ),
		'joldis'   => array( 'name' => 'Joldis Mihai Alexandru', 'nickname' => 'Mihai' ),
		'mandy'    => array( 'name' => 'Mandy Jones' ),
		'tunbosun' => array( 'name' => 'Tunbosun Ayinla' ),
		'phil_d'   => array( 'name' => 'Phil Derksen', 'nickname' => 'Phil D.' ),
		'michael'  => array( 'name' => 'Michael Beil', 'year_joined' => '2019' ),
		'spencer'  => array( 'name' => 'Spencer Finnell' ),
		'andrea'   => array( 'name' => 'Andrea Whitmer' ),
		'alex'     => array( 'name' => 'Alex Standiford' ),
		'adam'     => array( 'name' => 'Adam Lea' ),
	);

	return (array) $our_people;
}

/**
 * Calculate how long SHD has been in business. Founded in 2009.
 *
 * @return false|int|string
 */
function shd_get_years_in_business() {
	return $years_in_business = date( 'Y' ) - 2009;
}