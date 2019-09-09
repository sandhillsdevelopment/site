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
			'role'        => 'Founder, CEO',
			'year_joined' => '2009',
		),
		'sean'     => array(
			'name'        => 'Sean Davis',
			'role'        => 'Partner, Design Lead',
			'year_joined' => '2014',
		),
		'chris'    => array(
			'name'        => 'Chris Klosowski',
			'role'        => 'Partner, CTO, Dev Lead',
			'year_joined' => '2015',
		),
		'andrew'   => array(
			'name'        => 'Andrew Munro',
			'role'        => 'Partner, Product Lead',
			'year_joined' => '2015',
		),
		'phil_d'   => array(
			'name'        => 'Phil Derksen',
			'role'        => 'Partner, Product Lead',
			'nickname'    => 'Phil D.',
			'year_joined' => '2018',
		),
		'michael'  => array(
			'name'        => 'Michael Beil',
			'role'        => 'Support Technician',
			'year_joined' => '2015',
		),
		'lisa'     => array(
			'name'        => 'Lisa Gibson',
			'role'        => 'Marketing Lead',
			'year_joined' => '2016',
		),
		'drew'     => array(
			'name'        => 'Drew Jaynes',
			'role'        => 'Product Dev Lead',
			'year_joined' => '2016',
		),
		'ashley'   => array(
			'name'        => 'Ashley Gibson',
			'role'        => 'Product Dev Lead',
			'year_joined' => '2017',
		),
		'kyle'     => array(
			'name'        => 'Kyle Maurer',
			'role'        => 'Director of Operations',
			'year_joined' => '2017',
		),
		'ginger'   => array(
			'name'        => 'Ginger Coolidge',
			'role'        => 'Support Technician',
			'year_joined' => '2017',
		),
		'phil_j'   => array(
			'name'        => 'Phil Johnston',
			'nickname'    => 'Phil J.',
			'role'        => 'Developer',
			'year_joined' => '2017',
		),
		'keri'     => array(
			'name'        => 'Keri Jacoby',
			'role'        => 'Support Lead',
			'year_joined' => '2017',
		),
		'john_j'     => array(
			'name'        => 'John Jacoby',
			'nickname'    => 'John J.',
			'role'        => 'Product Lead',
			'year_joined' => '2017',
		),
		'tyler'    => array(
			'name'        => 'Tyler Lau',
			'role'        => 'Administration, Marketer',
			'year_joined' => '2018',
		),
		'daniel'   => array(
			'name'        => 'Daniel Goldak',
			'role'        => 'Support Technician',
			'year_joined' => '2018',
		),
		'joldis'   => array(
			'name'        => 'Joldis Mihai Alexandru',
			'role'        => 'Support Technician',
			'nickname'    => 'Mihai',
			'year_joined' => '2018',
		),
		'mandy'    => array(
			'name'        => 'Mandy Jones',
			'role'        => 'Content creator',
			'year_joined' => '2018',
		),
		'tunbosun' => array(
			'name'        => 'Tunbosun Ayinla',
			'role'        => 'Developer',
			'year_joined' => '2018',
		),
		'spencer'  => array(
			'name'        => 'Spencer Finnell',
			'role'        => 'Developer',
			'year_joined' => '2019',
		),
		'andrea'   => array(
			'name'        => 'Andrea Whitmer',
			'role'        => 'Support Technician',
			'year_joined' => '2019',
		),
		'alex'     => array(
			'name'        => 'Alex Standiford',
			'role'        => 'Developer',
			'year_joined' => '2019',
		),
		'adam'     => array(
			'name'        => 'Adam Lea',
			'role'        => 'Support Technician',
			'year_joined' => '2019',
		),
		'joe'     => array(
			'name'        => 'Joe Wells',
			'role'        => 'Content creator',
			'year_joined' => '2019',
		),
	);

	return (array) $our_people;
}