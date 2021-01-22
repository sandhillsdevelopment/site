<?php
/**
 * Functions specific to our company events timeline
 */


/**
 * Get company events based on year and type
 */
function shd_get_events_by_group( $year = 0, $type = null ) {

	$event_args = array(
		'post_type'      => 'event',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'meta_query'     => array(
			'relation' => 'AND',
			array(
				'key'   => 'year_occurred',
				'value' => $year,
			),
			array(
				'key'   => 'event_type',
				'value' => $type,
			),
		),
	);
	$events     = get_posts( $event_args );

	return $events;
}


/**
 * Get all future company events
 */
function shd_get_future_events() {

	$future_event_args = array(
		'post_type'      => 'event',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'meta_key'       => 'event_type',
		'meta_value'     => 'Future event',
	);
	$future_events     = get_posts( $future_event_args );

	return $future_events;
}


/**
 * Get a list of the years that have published company events
 */
function shd_get_years_with_events() {

	$event_args = array(
		'post_type'      => 'event',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'meta_key'       => 'event_type',
		'meta_value'     => array( 'Primary event', 'Secondary event' ),
	);
	$events     = get_posts( $event_args );

	foreach ( $events as $event ) {
		$event_years[] = (int) get_field( 'year_occurred', $event->ID );
	}

	$years = array_unique( $event_years );
	sort( $years, SORT_NUMERIC );

	return $years;
}