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
 * Modify queries
 *
 * @param $query
 */
function shd_modify_queries( $query ) {

	if ( $query->is_main_query() && $query->is_home() ) {

		$query->set( 'posts_per_page', 1 );
		$query->set( 'ignore_sticky_posts', true );

		// modify blog home queries - part 1
		// https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination
	} elseif ( ! $query->is_main_query() && is_home() ) {

		$offset        = 1;
		$post_per_page = 15;

		if ( $query->is_paged ) {

			$blog_offset = $offset + ( ( $query->query_vars['paged']-1 ) * $post_per_page );
			$query->set( 'offset', $blog_offset );

		} else {

			$query->set( 'offset', $offset );

		}
	}
}
add_action( 'pre_get_posts', 'shd_modify_queries', 99999999 );


/**
 * Modify blog home queries - part 2
 * https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination
 *
 * @param $found_posts
 * @param $query
 *
 * @return int
 */
function shd_adjust_offset_pagination( $found_posts, $query ) {

	$offset = 1;

	if ( ! $query->is_main_query() && $query->is_home() ) {
		return $found_posts - $offset;
	}

	return $found_posts;
}
add_filter( 'found_posts', 'shd_adjust_offset_pagination', 1, 2 );


/**
 * Control the blog post excerpt length
 *
 * @param $length
 *
 * @return int
 */
function shd_excerpt_length( $length ) {

	if ( is_front_page() ) {
		return 50;
	}

	return 30;
}
add_filter( 'excerpt_length', 'shd_excerpt_length', 999 );


/**
 * Add graphic to single blog posts
 */
function shd_single_post_graphic() {

	if ( is_singular( 'post' ) ) {
		?>
		<img class="single-post-graphic" src="<?php echo SHD_IMAGES . 'icons/main-blog-graphic.svg'; ?>">
		<?php
	}
}
add_action( 'themedd_entry_article_start', 'shd_single_post_graphic' );