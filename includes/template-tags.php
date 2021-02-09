<?php
/**
 * Custom functions to be used across theme templates
 */


/**
 * Calculate how long SHD has been in business. Founded in 2009.
 *
 * @return false|int|string
 */
function shd_get_years_in_business() {
	return $years_in_business = date( 'Y' ) - 2009;
}


/**
 * Get the title, with SHD site enhancements. Only to be used as main page title
 *
 * See shd_title_with_highlight() for all other titles with SHD enhancements.
 *
 * @param null $page_id
 *
 * @return string|string[]
 */
function shd_get_the_title( $page_id = NULL ) {

	if ( is_archive() ) {
		return shd_archive_page_title();
	}

	if ( isset( $page_id ) ) {
		return shd_title_with_highlight( get_field( 'title_highlight', $page_id ), get_the_title( $page_id ) );
	}

	return shd_title_with_highlight( get_field( 'title_highlight' ), get_the_title() );
}


/**
 * Simple wrapper for getting the page subtitle
 *
 * @param null $page_id
 *
 * @return string|string[]
 */
function shd_get_the_subtitle( $page_id = NULL ) {

	if ( is_archive() ) {
		return shd_term_description();
	}

	if ( isset( $page_id ) ) {
		return get_field( '_subtitle', $page_id );
	}

	return get_field( '_subtitle' );
}


/**
 * Post written by - for blog posts bylines
 */
function shd_get_written_by() {

	$post_author_id   = get_post_field( 'post_author', get_the_ID() );
	$post_author_name = get_the_author_meta( 'display_name', $post_author_id );

	return 'Written by <strong>' . $post_author_name . '</strong>' ;
}


/**
 * Get the terms for a post, full HTML output. Used at the bottom of post content.
 */
function shd_get_post_terms() {

	ob_start();
	?>

	<span class="entry-terms">

		<?php
		$categories = get_the_category_list( ', ' );
		$tags = get_the_tag_list( '', ', ' );

		if ( $categories ) :
			?>
			<span class="entry-categories">Filed under <?php echo $categories; echo $tags ? '' : '.'; ?></span>
		<?php
		endif;

		if ( $tags ) :
			?>
			<span class="entry-tags"> with focus on <?php echo $tags; ?></span>.
		<?php
		endif;
		?>

	</span>

	<?php
	return ob_get_clean();
}


/**
 * Wrap a specific string of text in a span for styling purposes
 */
function shd_title_with_highlight( $highlight, $title ) {

	// Bail if no highlighting is needed
	if ( empty( $highlight ) ) {
		return $title;
	}

	// Wrap the specified text in a span
	$title = str_replace(
		$highlight,
		'<span class="title-highlight">' . $highlight . '</span>',
		$title
	);

	return $title;
}


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