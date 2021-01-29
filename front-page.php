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
					<span class="quick-detail shd-founded"><i class="fad fa-lightbulb"></i><strong>Founded in 2009</strong><span class="temp-hide"> by Pippin Williamson.</span></span>
					<span class="quick-detail shd-global"><i class="fad fa-globe-americas"></i><span class="temp-hide"><?php echo shd_get_team_members_count(); ?> </span><strong>globally-distributed team</strong><span class="temp-hide"> members.</span></span>
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
					<?php
					if ( have_rows( 'projects_section' ) ) {

						while ( have_rows( 'projects_section' ) ) {
							the_row();

							$projects_section  = get_field( 'projects_section' );
							$projects_title    = get_sub_field( 'title' );
							$projects_subtitle = get_sub_field( 'subtitle' );

							if ( ! empty( $projects_title ) ) {
								?>
								<span class="bold-title">
									<?php echo shd_title_with_highlight( 'projects', $projects_title ); ?>
								</span>
								<?php
							}

							if ( ! empty( $projects_subtitle ) ) {
								?>
								<p class="bold-description"><?php echo $projects_subtitle; ?></p>
								<?php
							}
						}

						reset_rows();
					}
					?>
				</div>
			</div>
			<div class="projects-row row justify-content-around">

				<div class="projects-col col">

					<div class="projects-wrapper">
						<div class="row justify-content-between no-gutters">
							<?php
							$projects = shd_get_projects();

							foreach ( $projects as $project ) {
								$project_type    = get_field( 'project_type', $project->ID );
								$project_status  = get_field( 'project_status', $project->ID );
								$project_url     = get_field( 'project_url', $project->ID );
								?>

								<div class="<?php echo $project->post_name . '-col'; ?> project-col col-lg-6">
									<a class="<?php echo $project->post_name . '-url'; ?>" href="<?php echo $project_url; ?>">
										<div class="<?php echo $project->post_name . '-project'; ?> project">
											<div class="row">
												<div class="col-sm-3 <?php echo $project->post_name . '-mascot-col'; ?>">
													<?php echo get_the_post_thumbnail( $project->ID, 'full', array( 'class' => $project->post_name . '-mascot mascot' ) ); ?>
												</div>
												<div class="col-sm-9 <?php echo $project->post_name . '-info-col'; ?>">
													<span class="project-type generic-heading"><?php echo $project_type; ?></span>
													<?php if ( 'Acquired' === $project_status ) { ?>
														<span class="project-status generic-heading">(Project <?php echo $project_status; ?>)</span>
													<?php } ?>
													<span class="project-title generic-heading"><?php echo $project->post_title; ?><span class="external-project-link"><i class="fad fa-external-link"></i></span></span>
													<p class="project-description"><?php echo $project->post_excerpt; ?></p>
												</div>
											</div>
										</div>
									</a>
								</div>

								<?php
							}
							?>

						</div>
					</div>

				</div>

			</div>

			<?php
			if ( have_rows( 'projects_section' ) ) {

				while ( have_rows( 'projects_section' ) ) {
					the_row();

					// Get the button content
					$projects_button_url  = get_sub_field( 'button_url' );
					$projects_button_text = get_sub_field( 'button_text' );

					// Only output a button if it exists.
					if ( ! empty( $projects_button_url ) && ! empty( $projects_button_text ) ) {
						?>

						<div class="more-projects-row row text-center">
							<div class="col">
								<a class="shd-button more-project-details" href="<?php echo $projects_button_url; ?>"><?php echo $projects_button_text; ?></a>
							</div>
						</div>

						<?php
					}
				}
			}
			?>

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

	<?php
	if ( have_rows( 'team_careers_section' ) ) {

		while ( have_rows( 'team_careers_section' ) ) {
			the_row();
			?>

			<section class="team-section">
				<div class="container">
					<div class="row justify-content-around text-center">
						<div class="col-md-9">
							<div class="our-people">
								<span class="generic-heading"><?php echo get_sub_field( 'team_title' ); ?></span>
								<p><?php echo get_sub_field( 'team_content' ); ?></p>
								<p><a class="shd-button" href="<?php echo get_sub_field( 'team_button_url' ); ?>"><?php echo get_sub_field( 'team_button_text' ); ?></a></p>
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
								<span class="generic-heading"><?php echo get_sub_field( 'careers_title' ); ?></span>
								<p><?php echo get_sub_field( 'careers_content' ); ?></p>
								<p><a class="shd-button" href="<?php echo get_sub_field( 'careers_button_url' ); ?>"><?php echo get_sub_field( 'careers_button_text' ); ?></a></p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php
		}
	}

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

					$recent_posts = get_posts( array( 'numberposts' => 5, 'offset'=> 1 ) );
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
