<?php
/**
 * The template used for displaying page content
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		do_action( 'themedd_entry_article_start' );

		if ( is_singular( 'project' ) ) {

			echo '<div class="project-logo-wrap">' . get_the_post_thumbnail() . '</div>';

		} else {

			// Output the author avatar on all posts
			$author_bio_avatar_size = apply_filters( 'themedd_author_bio_avatar_size', 80 );

			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', get_the_author_meta( 'display_name' ), array( 'class' => 'rounded-circle single-post-graphic' ) );
		}
		?>

		<div class="entry-content content-wrapper">

			<?php do_action( 'themedd_entry_content_start' );

			// Post thumbnail goes in the content if it exists
			if ( has_post_thumbnail() && ! is_singular( 'project' ) ) {
				themedd_post_thumbnail();
			}

			$the_content = get_the_content();

			if ( is_singular( 'project' ) && empty( $the_content ) ) {
				echo get_field( 'project_description' );
			} else {
				echo $the_content;
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'themedd' ),
				'after'  => '</div>',
			) );

			do_action( 'themedd_entry_content_end' );

			if ( is_singular( 'project' ) ) {
				$project_url = get_field( 'project_url' );
				?>
				<div class="single-project-footer">
					<a class="shd-button" href="<?php echo $project_url; ?>">Learn more about <?php echo get_the_title(); ?></a>
				</div>
				<?php
			}
			?>



		</div>

		<?php do_action( 'themedd_entry_article_end' ); ?>

	</article>