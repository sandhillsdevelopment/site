<?php
/**
 * Archive.php
 * controls styling for categories, tags etc
 */

get_header(); ?>

	<section class="archive-posts-section">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-10">
						<?php
						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								* Include the post format-specific template for the content. If you want to
								* use this in a child theme, then include a file called called content-___.php
								* (where ___ is the post format) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							themedd_paging_nav();

						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
