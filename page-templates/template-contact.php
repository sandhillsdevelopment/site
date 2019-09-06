<?php
/**
 * Template Name: Contact
 */

get_header();
themedd_header();
?>

	<div class="<?php echo themedd_output_classes( themedd_wrapper_classes() ); ?>">
		<div id="primary" class="content-area<?php echo themedd_primary_classes(); ?>">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php
						do_action( 'themedd_entry_article_start' );
						?>

						<div class="entry-content content-wrapper">
							<?php
							do_action( 'themedd_entry_content_start' );
							the_content();
							do_action( 'themedd_entry_content_end' );
							?>
						</div>

						<?php do_action( 'themedd_entry_article_end' ); ?>

					</article>

				<?php endwhile; ?>

			</main>
		</div>
	</div>

<?php
get_footer();