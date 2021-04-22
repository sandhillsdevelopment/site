<?php
/**
 * General theme functions
 */

/**
 * Add rss image
 */
function shd_rss_featured_image() {
	global $post;

	if ( has_post_thumbnail( $post->ID ) ) {

		// get the full post thumbnail data
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

		// get the width to height ratio of the full image
		$ratio = $thumbnail[2] / $thumbnail[1];

		// maintaining the ratio, calculate a new height based on a forced 600px width
		$height = intval( 600 * $ratio );

		// get the mime type
		$mime_type = get_post_mime_type( get_post_thumbnail_id( $post->ID ) );
		?>
		<media:content url="<?php echo $thumbnail[0]; ?>" type="<?php echo $mime_type; ?>" medium="image" width="600" height="<?php echo $height; ?>"></media:content>
		<?php
	}
}
add_filter( 'rss2_item', 'shd_rss_featured_image' );
