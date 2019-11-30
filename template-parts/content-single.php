<?php
/**
 * The template used for displaying page content
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php do_action( 'themedd_entry_article_start' ); ?>

		<?php
		if ( has_post_thumbnail() ) {
			themedd_post_thumbnail( array( 'size' => 'themedd-featured-image' ) );
		} else {
			?>
			<img class="single-post-graphic" src="<?php echo SHD_IMAGES . 'icons/writing-icon.svg'; ?>">
			<?php
		}
		?>

		<?php  ?>

		<div class="entry-content content-wrapper">

			<?php do_action( 'themedd_entry_content_start' ); ?>

			<?php the_content(); ?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'themedd' ),
				'after'  => '</div>',
			) );
			?>

			<?php do_action( 'themedd_entry_content_end' ); ?>

		</div>

		<?php do_action( 'themedd_entry_article_end' ); ?>

	</article>