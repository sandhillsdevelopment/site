<?php
/**
 * The template used for displaying page content
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		do_action( 'themedd_entry_article_start' );

		// Output the author avatar on all posts
		$author_bio_avatar_size = apply_filters( 'themedd_author_bio_avatar_size', 80 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', get_the_author_meta( 'display_name' ), array( 'class' => 'rounded-circle single-post-graphic' ) );
		?>

		<div class="entry-content content-wrapper">

			<?php do_action( 'themedd_entry_content_start' );

			// Post thumbnail goes in the content if it exists
			if ( has_post_thumbnail() ) {
				themedd_post_thumbnail();
			}

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'themedd' ),
				'after'  => '</div>',
			) );

			do_action( 'themedd_entry_content_end' );
			?>

		</div>

		<?php do_action( 'themedd_entry_article_end' ); ?>

	</article>