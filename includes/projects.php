<?php
/**
 * Functions specific to our projects
 */

/**
 * All company projects
 */
function shd_get_projects() {

	$project_args = array(
		'post_type'      => 'project',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'order'          => 'ASC',
	);
	return get_posts( $project_args );
}