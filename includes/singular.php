<?php
/**
 * Functions pertaining to singulars, like Posts
 */




/**
 * Archive page title, displayed like a Themedd page title
 */
function shd_archive_page_title() {

	ob_start();

	if ( is_category() ) :
		echo 'Category: '; echo '<span class="title-highlight">'; single_cat_title(); echo '</span>';
	elseif ( is_tag() ) :
		echo 'Tag: '; echo '<span class="title-highlight">'; single_tag_title(); echo '</span>';
	elseif ( is_author() ) :

		/**
		 * Queue the first post, that way we know
		 * what author we're dealing with (if that is the case).
		 */
		the_post();
		echo 'Author: <span class="title-highlight">' . get_the_author() . '</span>';

		/**
		 * Since we called the_post() above, we need to
		 * rewind the loop back to the beginning that way
		 * we can run the loop properly, in full.
		 */
		rewind_posts();

	elseif ( is_day() ) :
		echo 'Day: <span class="title-highlight">' . get_the_date() . '</span>';
	elseif ( is_month() ) :
		echo 'Month: <span class="title-highlight">' . get_the_date( 'F Y' ) . '</span>';
	elseif ( is_year() ) :
		echo 'Year: <span class="title-highlight">' . get_the_date( 'Y' ) . '</span>';
	else :
		echo 'Archives';
	endif;

	return ob_get_clean();
}


/**
 * Archive page description, displayed like a Themedd page lead
 */
function shd_term_description() {

	// Show an optional term description.
	$term_description = term_description();
	if ( ! empty( $term_description ) ) {
		return $term_description;
	} else {
		return sprintf( 'Never miss an update! Sign up for our <a href="%s">email newsletter</a>. 📥', home_url( 'subscribe' ) );
	}
}


/**
 * Tweak singular featured images
 */
function shd_post_thumbnail( $defaults ) {
	$defaults['classes'][] = 'shd-featured-image';
	return $defaults;
}
add_filter( 'themedd_post_thumbnail_defaults', 'shd_post_thumbnail' );