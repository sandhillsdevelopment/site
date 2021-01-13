<?php
/**
 * Functions specific to our company information
 */


/**
 * Quick company facts
 */
function shd_quick_facts() {

	$facts = array(
		'years_in_business' => array(
			'icon'  => 'toast',
			'title' => shd_get_years_in_business() . ' years in business',
			'desc'  => 'As a self-funded company, we\'re proud of our humble beginnings and excited for our future growth.',
		),
		'team_members'      => array(
			'icon'  => 'brick-and-mortar',
			'title' => shd_get_team_members_count() . ' team members',
			'desc'  => 'Every day, our team of passionate, dedicated humans come together to build a company we truly believe in.',
		),
		'countries'         => array(
			'icon'  => 'globally-distributed',
			'title' => shd_get_team_members_country_count() . ' different countries',
			'desc'  => 'Sandhills is a globally-distributed company with team members on 4 different continents.',
		),
		'headquarters'      => array(
			'icon'  => 'location',
			'title' => 'Headquartered In "Hutch"',
			'desc'  => 'Hutch is located in a region of Kansas known for its prairies and hills called the Sandhills. Get it?',
		),
	);

	return $facts;
}