<?php
/**
 * SHD Site front page
 */
get_header();
?>

	<section class="quick-info about-info border-on-bottom">
		<div class="container">
			<div class="row">
				<div class="col">
					<span class="quick-detail shd-founded"><i class="fad fa-lightbulb"></i><strong>Founded in 2009</strong><span class="temp-hide"> by CEO Pippin Williamson.</span></span>
					<span class="quick-detail shd-global"><i class="fad fa-globe-americas"></i><span class="temp-hide"><?php echo count( shd_get_our_people() ); ?> </span><strong>globally-distributed team</strong><span class="temp-hide"> members.</span></span>
					<span class="quick-detail shd-headquarters"><i class="fad fa-map-marker-alt"></i><span class="temp-hide">Headquartered in </span><strong>Hutchinson, Kansas</strong>.</span>
					<span class="quick-detail"><a class="quick-info-link" href="<?php echo home_url( '/about/' ); ?>">More<span class="temp-hide">&nbsp;about&nbsp;Sandhills</span>&nbsp;&rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

	<section class="projects-section">
		<div class="container">
			<div class="projects-header row justify-content-around text-center">
				<div class="col-xl-8 col-lg-10">
					<span class="bold-title">Our <span class="title-highlight">projects</span></span>
					<p class="bold-description">Whether it's a software designed to enhance your business, or a Berliner-style Weisse perfect for sunny days outside, we create with passion and intent.</p>
				</div>
			</div>
			<div class="projects-row row justify-content-around">
				<div class="projects-col col">
					<div class="projects-wrapper">
						<div class="row justify-content-between no-gutters">
							<?php get_template_part( 'template-parts/content', 'our-projects' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="more-projects-row row text-center">
				<div class="col">
					<a class="shd-button more-project-details" href="<?php echo home_url( '/projects/' ); ?>">Full project details</a>
				</div>
			</div>
		</div>
	</section>

	<section class="quick-info projects-info border-on-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<span class="quick-detail email-us"><i class="fad fa-inbox-in"></i>Need to <strong>contact us</strong> directly, or inquire about one of our projects? <a class="quick-info-link" href="<?php echo home_url( '/contact/' ); ?>">Get&nbsp;in&nbsp;touch&nbsp;&rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

	<section class="team-section">
		<div class="container">
			<div class="row justify-content-around text-center">
				<div class="col-md-9">
					<div class="our-people">
						<span class="generic-heading">Our global team</span>
						<p>Freedom is important to us. We work from the comfort of our own homes, or wherever we find ourselves happy and productive. We do our best work when we prioritize healthy workplaces. Our globally-distributed team consists of <?php echo count( shd_get_our_people() ); ?> professionals located in 7 countries across the globe.</p>
						<p><a class="shd-button" href="<?php echo home_url( '/about/' ); ?>">About Sandhills</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apply-section">
		<div class="container">
			<div class="row justify-content-around text-center">
				<div class="col-md-9">
					<div class="our-commitment">
						<span class="generic-heading">Sandhills careers</span>
						<p>We're committed to the well-being of our people. That allows us to collectively focus our efforts on positive experiences for our customers, and freeing up time for us all. If you're interested in being part of our team, do not hesitate to submit an application for consideration.</p>
						<p><a class="shd-button" href="<?php echo home_url( '/careers/' ); ?>">Work at Sandhills</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	// Get latest post
	$last_post = get_posts( array( 'numberposts' => 1 ) );
	if ( ! empty( $last_post ) ) {
		?>

		<section class="blog-section">
			<div class="container">
				<div class="blog-row row content-aside-split">
					<?php
					foreach ( $last_post as $post ) {
						setup_postdata( $post );
						?>
						<div class="col-lg-8 content-split">
							<div class="content-inner">
								<span class="content-subtitle">The latest from Sandhills blog</span>
								<a class="content-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php the_excerpt(); ?>
								<a class="aside-button shd-button" href="<?php the_permalink(); ?>">Continue reading</a>
							</div>
						</div>
						<?php
						wp_reset_query();
					}

					$recent_posts = get_posts( array( 'numberposts' => 3, 'offset'=> 1 ) );
					if ( ! empty( $recent_posts ) ) {
						?>
						<div class="col-lg-4 aside-split">
							<div class="aside-inner d-flex flex-column">
								<span class="aside-title">More from the blog</span>
								<ul class="aside-links">
									<?php
									foreach ( $recent_posts as $recent_post ) {
										?>
										<li><a class="aside-link" href="<?php echo get_the_permalink( $recent_post ); ?>"><?php echo get_the_title( $recent_post ); ?></a></li>
										<?php
									}
									?>
								</ul>
								<div class="aside-cta mt-auto">
									<a class="aside-link-cta" href="<?php echo home_url( '/blog/' ); ?>">Visit the blog &rarr;</a>
								</div>
								<a href="<?php echo home_url( '/blog/' ); ?>">
									<img class="more-posts-graphic" src="<?php echo SHD_IMAGES . 'icons/writing-icon.svg'; ?>">
								</a>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</section>

		<?php
	}

get_footer();