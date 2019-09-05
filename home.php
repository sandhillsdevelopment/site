<?php
/**
 * Site blog
 */

get_header();
?>

<section class="quick-info did-you-know border-on-bottom">
	<div class="container">
		<div class="row">
			<div class="col">
				<span class="quick-detail feather-pen"><i class="fad fa-feather-alt"></i><strong>Did you know:</strong> We also publish project-specific content on our individual product sites. <a class="quick-info-link" href="<?php echo home_url( '/projects/' ); ?>">Check them out &rarr;</a></span>
			</div>
		</div>
	</div>
</section>

<section class="older-posts-section">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-lg-10">

				<?php
				$args      = array(
					'posts_per_page' => 999,
					'paged'          => get_query_var( 'paged' ),
				);
				$latest_posts = new WP_query ( $args );

				if ( $latest_posts->have_posts() ) :
					while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
						?>

						<div class="blog-row row content-item-wrap">
							<div class="col-md-2 content-item-graphic">
								<div class="content-item-graphic-inner">
									<a class="content-item-title" href="<?php the_permalink(); ?>"><span class="item-graphic-placeholder"></span></a>
								</div>
							</div>
							<div class="col-md-10 content-item-text">
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-item-text-inner'); ?>>
									<a class="content-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;<i class="fad fa-link"></i></a>
									<?php the_excerpt(); ?>
									<a class="content-item-text-link" href="<?php the_permalink(); ?>">Continue reading</a>
								</article>
							</div>
						</div>

					<?php
					endwhile;
				else :
					?>

					<div class="py-10 text-center">
						<span class="more-coming-soon generic-heading">More coming soon. Stay tuned.</span>
					</div>

					<?php
				endif;
				?>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();