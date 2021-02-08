<?php
/**
 * General theme functions
 */


/**
 * Conditionally add body classes to the site structure
 *
 * @param $classes Already-applied body classes
 *
 * @return array
 */
function shd_body_classes_front_end( $classes ) {

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	if ( is_front_page() || is_home() ) {
		$classes[] = 'has-stars-hero';
	}

	$page_body_classes = array( 'projects', 'about', 'careers', 'contact' );

	foreach ( $page_body_classes as $page ) {

		if ( is_page( $page ) ) {
			$classes[] = $page . '-page';
		}
	}

	return $classes;
}
add_action( 'body_class', 'shd_body_classes_front_end' );


/**
 * Calculate how long SHD has been in business. Founded in 2009.
 *
 * @return false|int|string
 */
function shd_get_years_in_business() {
	return $years_in_business = date( 'Y' ) - 2009;
}


/**
 * Control the blog post excerpt length
 *
 * @param $length
 *
 * @return int
 */
function shd_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'shd_excerpt_length', 999 );


/**
 * Remove the post excerpt More Link
 */
function shd_post_excerpt_more_link() {
	return ' ...';
}
add_filter( 'excerpt_more', 'shd_post_excerpt_more_link' );


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
remove_action( 'themedd_entry_article_end', 'themedd_show_entry_footer' );


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