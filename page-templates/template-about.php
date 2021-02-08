<?php
/**
 * Template Name: About Us
 */

get_header();
?>

	<div class="about-hero">
		<div class="container">
			<div class="hero">
				<header class="row justify-content-around text-center">
					<div class="col-lg-10">
						<h1 class="bold-title"><?php echo shd_title_with_highlight( 'Sandhills', get_the_title() ); ?></h1>
						<p class="bold-description"><?php echo get_field( '_subtitle' ); ?></p>
					</div>
				</header>
			</div>
		</div>
	</div>

	<section class="about-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xl-4 col-lg-5">
					<div class="quick-facts">
						<div class="facts-wrap">
							<?php
							/**
							 * For whatever reason, standard repeater field looping isn't working here for ACF.
							 * This is an extremely simple work around, grabbing the field data using
							 * get_post_meta. It achieves the same thing.
							 */
							$fact_count = array( 'one', 'two', 'three', 'four' );
							foreach ( $fact_count as $fact ) {
								$icon    = wp_get_attachment_image(
									get_post_meta( get_the_ID(), 'quick_facts_fact_' . $fact . '_icon', true ),
									'full', false, array( 'class' => 'about-icon' )
								);
								$title   = get_post_meta( get_the_ID(), 'quick_facts_fact_' . $fact . '_title', true );
								$content = get_post_meta( get_the_ID(), 'quick_facts_fact_' . $fact . '_content', true );
								?>
								<div class="small-content-aside-split row justify-content-between">
									<div class="col-lg-3 col-sm-2 col-3 small-aside-split">
										<div class="small-aside-inner">
											<?php echo $icon; ?>
										</div>
									</div>
									<div class="col-lg-9 col-sm-10 col-12 small-content-split">
										<div class="small-content-inner">
											<span class="small-content-title title-border"><?php echo $title; ?></span>
											<p class="small-content-description"><?php echo $content; ?></p>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="slow-facts">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="quick-info did-you-know">
		<div class="container">
			<div class="row">
				<div class="col">
					<span class="quick-detail nature"><i class="fad fa-trees"></i><strong>Did you know:</strong> Sandhills owns 3 acres of open land in a popular Hutch neighborhood simply to preserve nature as a communal space for people and animals alike.</span>
				</div>
			</div>
		</div>
	</section>

	<section class="team-section stars">
		<div class="container">
			<div class="row text-center justify-content-around">
				<div class="col-lg-8">
					<div class="team-sandhills section-header">
						<span class="our-people-title bold-title">
							<?php
							$team_title = get_post_meta( get_the_ID(), 'team_section_title', true );
							echo shd_title_with_highlight( 'Team', $team_title );
							?>
						</span>
						<p class="bold-description"><?php echo get_post_meta( get_the_ID(), 'team_section_subtitle', true ); ?></p>
					</div>
				</div>
			</div>
			<div class="our-people-row row mb-lg-3">
				<?php get_template_part( 'template-parts/content', 'team-members' ); ?>
			</div>
			<div class="submit-an-app-row row justify-content-around text-center">
				<div class="col-lg-4">
					<?php
					$join_button_text  = get_post_meta( get_the_ID(), 'team_section_button_text', true );
					$join_button_url   = get_post_meta( get_the_ID(), 'team_section_button_url' );
					?>
					<p class="member-name"><?php echo get_post_meta( get_the_ID(), 'team_section_join_our_team', true ); ?></p>
					<a class="shd-button" href="<?php echo $join_button_url[0]['url']; ?>"><?php echo $join_button_text; ?></a>
				</div>
			</div>
		</div>
	</section>

	<section class="quick-info did-you-know">
		<div class="container">
			<div class="row">
				<div class="col">
					<span class="quick-detail camera"><i class="fad fa-camera-retro"></i><strong>Did you know:</strong> Our microbrewery, Sandhills Brewing, has an awesome Instagram profile full of beer and good times. <a class="quick-info-link" href="https://www.instagram.com/sandhillsbrewing/" target="_blank">Check&nbsp;it&nbsp;out&nbsp;&rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

	<section class="timeline-section">
		<div class="timeline-background-wrap">
			<div class="container">
				<div class="sandhills-history-row row justify-content-around text-center">
					<div class="col-lg-8">
						<h1 class="bold-title">
							<?php
							$team_title = get_post_meta( get_the_ID(), 'history_section_title', true );
							echo shd_title_with_highlight( 'History', $team_title );
							?>
						</h1>
						<p class="bold-description"><?php echo get_post_meta( get_the_ID(), 'history_section_subtitle', true ); ?></p>
						<p class="bold-description-secondary"><?php echo get_post_meta( get_the_ID(), 'history_section_timeline_leading_text', true ); ?></p>
					</div>
				</div>
				<div class="sandhills-timeline-row row justify-content-around">
					<div class="col-lg-10">
						<div class="timeline-wrap">

							<div class="row start-row">
								<div class="col-md-6"></div>
								<div class="col-md-6"></div>
							</div>

							<?php
							// Get an array of each year that has at least one published company event
							$years = shd_get_years_with_events();

							// Each iteration will set the event group row as 'odd' or 'even', enabling alternating styles
							$event_group = 'odd';

							// For each year that has published events, output the year marker,
							// all primary events, and all secondary events
							foreach ( $years as $year ) {

								// Skip non-year values, like Future events
								if ( 0 === $year ) {
									continue;
								}
								?>

								<div class="row new-year-row">
									<div class="col-md-6 events-col new-year-event">
										<div class="new-year-date">
											<span class="the-year"><?php echo $year; ?></span>
										</div>
										<div class="events-inner">
										</div>
									</div>
									<div class="col-md-6 additional-info-col">
									</div>
								</div>

								<div class="row event-group-row">

									<div class="col-md-6 events-col<?php echo $event_group === 'odd' ? '' : ' order-md-2'; ?>">
										<div class="events-inner">
											<?php
											// Get all of the Primary events for the current $year in the loop
											$primary_events = shd_get_events_by_group( $year, 'Primary event' );
											foreach ( $primary_events as $p_event ) {
												?>
												<div class="single-event-wrap">
													<p class="event-description"><?php echo $p_event->post_content; ?></p>
												</div>
												<?php
											}
											?>
										</div>
									</div>

									<div class="col-md-6 additional-info-col<?php echo $event_group === 'odd' ? '' : ' order-md-1'; ?>">
										<div class="additional-info-inner">
											<?php
											// Get all of the Secondary events for the current $year in the loop
											$secondary_events = shd_get_events_by_group( $year, 'Secondary event' );
											foreach ( $secondary_events as $s_event ) {
												?>
												<div class="additional-event">
													<p class="event-description"><?php echo $s_event->post_content; ?></p>
												</div>
												<?php
											}
											?>
										</div>
									</div>

								</div>

								<?php
								// Now swap the alignment of events as we output a new year
								$event_group = $event_group === 'odd' ? 'even' : 'odd';
							}
							?>

							<div class="row end-row">
								<div class="col-md-6"></div>
								<div class="col-md-6"></div>
							</div>

						</div>
					</div>
				</div>
				<div class="timeline-end text-center">
					<p><?php echo get_post_meta( get_the_ID(), 'history_section_timeline_trailing_text', true ); ?></p>
				</div>
				<div class="sandhills-future-timeline">

					<?php
					// Get all future events
					$future_events = shd_get_future_events();
					foreach ( $future_events as $f_event ) {
						?>
						<div class="sandhills-future-timeline-item row justify-content-around">
							<div class="col-lg-6 future-event-col">
								<div class="future-event">
									<p><?php echo $f_event->post_content; ?></p>
								</div>
							</div>
						</div>
						<?php
					}
					?>

				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
