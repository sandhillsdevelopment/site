<?php
/**
 * Functions specific to our team of people
 */


/**
 * Get all of the team members. If they go by a specific name, say so.
 *
 * @return array All team members and information about their year joined and names
 */
function shd_get_our_people() {

	$our_people = array(
		'pippin'   => array(
			'name'        => 'Pippin Williamson',
			'role'        => 'Managing Director',
			'year_joined' => '2009',
			'country'     => 'usa',
		),
		'sean'     => array(
			'name'        => 'Sean Davis',
			'role'        => 'Director of Design',
			'year_joined' => '2014',
			'country'     => 'usa',
		),
		'chris'    => array(
			'name'        => 'Chris Klosowski',
			'role'        => 'Director of Technology',
			'year_joined' => '2015',
			'country'     => 'usa',
		),
		'andrew'   => array(
			'name'        => 'Andrew Munro',
			'role'        => 'Product Manager',
			'year_joined' => '2015',
			'country'     => 'new_zealand',
		),
		'phil_d'   => array(
			'name'        => 'Phil Derksen',
			'role'        => 'Product Manager',
			'nickname'    => 'Phil D.',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'lisa'     => array(
			'name'        => 'Lisa Gibson',
			'role'        => 'Director of Marketing',
			'year_joined' => '2016',
			'country'     => 'new_zealand',
		),
		'drew'     => array(
			'name'        => 'Drew Jaynes',
			'role'        => 'Development Manager',
			'year_joined' => '2016',
			'country'     => 'usa',
		),
		'ashley'   => array(
			'name'        => 'Ashley Gibson',
			'role'        => 'Product Manager',
			'year_joined' => '2017',
			'country'     => 'uk',
		),
		'kyle'     => array(
			'name'        => 'Kyle Maurer',
			'role'        => 'Director of Operations',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'ginger'   => array(
			'name'        => 'Ginger Coolidge',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'keri'     => array(
			'name'        => 'Keri Jacoby',
			'role'        => 'Director of Support',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'john_j'     => array(
			'name'        => 'John Jacoby',
			'nickname'    => 'John J.',
			'role'        => 'Product Manager',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'tyler'    => array(
			'name'        => 'Tyler Lau',
			'role'        => 'Partnership Specialist',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'daniel'   => array(
			'name'        => 'Daniel Goldak',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'joldis'   => array(
			'name'        => 'Joldis Mihai Alexandru',
			'role'        => 'Application Support Specialist',
			'nickname'    => 'Mihai',
			'year_joined' => '2018',
			'country'     => 'romania',
		),
		'mandy'    => array(
			'name'        => 'Mandy Jones',
			'role'        => 'Product Marketing Specialist',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'tunbosun' => array(
			'name'        => 'Tunbosun Ayinla',
			'role'        => 'Senior Developer',
			'year_joined' => '2018',
			'country'     => 'nigeria',
		),
		'spencer'  => array(
			'name'        => 'Spencer Finnell',
			'role'        => 'Senior Developer',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'andrea'   => array(
			'name'        => 'Andrea Whitmer',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'alex'     => array(
			'name'        => 'Alex Standiford',
			'role'        => 'Senior Developer',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'adam'     => array(
			'name'        => 'Adam Lea',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'joe'     => array(
			'name'        => 'Joe Wells',
			'role'        => 'Product Marketing Specialist',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'shayne'  => array(
			'name'        => 'Shayne Sanderson',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
		'robin'  => array(
			'name'        => 'Robin Cornett',
			'role'        => 'Junior Developer',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
		'lisa_c' => array(
			'name'        => 'Lisa Canini',
			'role'        => 'Junior Developer',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
		'taylor' => array(
			'name'        => 'Taylor Jackson',
			'role'        => 'Application Support Specialist',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
	);

	return (array) $our_people;
}


/**
 * The number of countries in which we live
 */
function shd_get_our_countries_count() {

	$countries  = array();
	$our_people = shd_get_our_people();

	// Get all the countries
	foreach ( $our_people as $person ) {
		$countries[] = $person['country'];
	}

	// Get a count of the non-duplicate countries
	$countries     = array_unique( $countries );
	$country_count = is_countable( $countries ) ? count( $countries ) : 0;

	return $country_count;

}
