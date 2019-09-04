<?php
/**
 * Front page hero section content
 */
?>


	<div class="container">
		<div class="hero">
			<div class="blog-row row justify-content-around text-center">
				<div class="col-lg-8">

					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<span class="bold-subtitle">The latest from Sandhills Blog</span>
								<a class="bold-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="bold-description"><?php the_excerpt(); ?></div>
								<a class="aside-button shd-button" href="<?php the_permalink(); ?>">Continue reading</a>

							</article>

						<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>

				</div>
			</div>
		</div>
	</div>
