<?php
/**
 * Functions specific to our team of people
 */


/**
 * All team members
 */
function shd_get_team_members() {

	$team_member_args = array(
		'post_type'      => 'team_member',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'order'          => 'ASC',
	);
	$team_members     = get_posts( $team_member_args );

	return $team_members;
}


/**
 * The number of currently employed team members
 */
function shd_get_team_members_count() {
	return count( shd_get_team_members() );
}


/**
 * The number of countries in which we live
 */
function shd_get_team_members_country_count() {

	$team_member_countries = array();
	$team_members          = shd_get_team_members();

	// Get all the countries
	foreach ( $team_members as $member ) {
		$team_member_countries[] = get_field( 'country_of_residence', $member->ID );
	}

	// Get a count of the non-duplicate countries
	$total_countries = array_unique( $team_member_countries );

	return is_countable( $total_countries ) ? count( $total_countries ) : 0;
}
