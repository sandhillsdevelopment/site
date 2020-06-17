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
			'role'        => 'Founder',
			'year_joined' => '2009',
			'country'     => 'usa',
		),
		'sean'     => array(
			'name'        => 'Sean Davis',
			'role'        => 'Partner, Design Lead',
			'year_joined' => '2014',
			'country'     => 'usa',
		),
		'chris'    => array(
			'name'        => 'Chris Klosowski',
			'role'        => 'Partner, CTO, Dev Lead',
			'year_joined' => '2015',
			'country'     => 'usa',
		),
		'andrew'   => array(
			'name'        => 'Andrew Munro',
			'role'        => 'Partner, Product Lead',
			'year_joined' => '2015',
			'country'     => 'new_zealand',
		),
		'phil_d'   => array(
			'name'        => 'Phil Derksen',
			'role'        => 'Partner, Product Lead',
			'nickname'    => 'Phil D.',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'michael'  => array(
			'name'        => 'Michael Beil',
			'role'        => 'Support Technician',
			'year_joined' => '2015',
			'country'     => 'germany',
		),
		'lisa'     => array(
			'name'        => 'Lisa Gibson',
			'role'        => 'Marketing Lead',
			'year_joined' => '2016',
			'country'     => 'new_zealand',
		),
		'drew'     => array(
			'name'        => 'Drew Jaynes',
			'role'        => 'Product Dev Lead',
			'year_joined' => '2016',
			'country'     => 'usa',
		),
		'ashley'   => array(
			'name'        => 'Ashley Gibson',
			'role'        => 'Product Dev Lead',
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
			'role'        => 'Support Technician',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'keri'     => array(
			'name'        => 'Keri Jacoby',
			'role'        => 'Support Lead',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'john_j'     => array(
			'name'        => 'John Jacoby',
			'nickname'    => 'John J.',
			'role'        => 'Product Lead',
			'year_joined' => '2017',
			'country'     => 'usa',
		),
		'tyler'    => array(
			'name'        => 'Tyler Lau',
			'role'        => 'Administration, Marketer',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'daniel'   => array(
			'name'        => 'Daniel Goldak',
			'role'        => 'Support Technician',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'joldis'   => array(
			'name'        => 'Joldis Mihai Alexandru',
			'role'        => 'Support Technician',
			'nickname'    => 'Mihai',
			'year_joined' => '2018',
			'country'     => 'romania',
		),
		'mandy'    => array(
			'name'        => 'Mandy Jones',
			'role'        => 'Content creator',
			'year_joined' => '2018',
			'country'     => 'usa',
		),
		'tunbosun' => array(
			'name'        => 'Tunbosun Ayinla',
			'role'        => 'Developer',
			'year_joined' => '2018',
			'country'     => 'nigeria',
		),
		'spencer'  => array(
			'name'        => 'Spencer Finnell',
			'role'        => 'Developer',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'andrea'   => array(
			'name'        => 'Andrea Whitmer',
			'role'        => 'Support Technician',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'alex'     => array(
			'name'        => 'Alex Standiford',
			'role'        => 'Developer',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'adam'     => array(
			'name'        => 'Adam Lea',
			'role'        => 'Support Technician',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'joe'     => array(
			'name'        => 'Joe Wells',
			'role'        => 'Content creator',
			'year_joined' => '2019',
			'country'     => 'usa',
		),
		'shayne'  => array(
			'name'        => 'Shayne Sanderson',
			'role'        => 'Support Technician',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
		'robin'  => array(
			'name'        => 'Robin Cornett',
			'role'        => 'Developer',
			'year_joined' => '2020',
			'country'     => 'usa',
		),
		'lisa_c' => array(
			'name'        => 'Lisa Canini',
			'role'        => 'Developer',
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
