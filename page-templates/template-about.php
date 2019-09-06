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
					<div class="col-lg-8">
						<h1 class="bold-title">About <span class="title-highlight">Sandhills</span></h1>
						<p class="bold-description">Time is our single most valuable and limited asset. Our goal is not to waste it. We work to live, for time is one thing we cannot waste. ⏳</p>
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
							<div class="small-content-aside-split row justify-content-between">
								<div class="col-lg-3 col-sm-2 col-3 small-aside-split">
									<div class="small-aside-inner">
										<img class="about-icon" src="<?php echo SHD_IMAGES . 'icons/toast-icon.svg'; ?>">
									</div>
								</div>
								<div class="col-lg-9 col-sm-10 col-9 small-content-split">
									<div class="small-content-inner">
										<span class="small-content-title title-border"><?php echo shd_get_years_in_business(); ?> years in business</span>
										<p class="small-content-description">As a self-funded company, we're proud of our humble beginnings and excited for our future growth.</p>
									</div>
								</div>
							</div>
							<div class="fact-wrap small-content-aside-split row justify-content-between">
								<div class="col-lg-3 col-sm-2 col-3 small-aside-split">
									<div class="small-aside-inner">
										<img class="about-icon" src="<?php echo SHD_IMAGES . 'icons/brick-and-mortar-icon.svg'; ?>">
									</div>
								</div>
								<div class="col-lg-9 col-sm-10 col-9 small-content-split">
									<div class="small-content-inner">
										<span class="small-content-title title-border"><?php echo count( shd_get_our_people() ); ?> team members</span>
										<p class="small-content-description">Every day, our team of passionate, dedicated humans come together to build a company we truly believe in.</p>
									</div>
								</div>
							</div>
							<div class="fact-wrap small-content-aside-split row justify-content-between">
								<div class="col-lg-3 col-sm-2 col-3 small-aside-split">
									<div class="small-aside-inner">
										<img class="about-icon" src="<?php echo SHD_IMAGES . 'icons/globally-distributed-icon.svg'; ?>">
									</div>
								</div>
								<div class="col-lg-9 col-sm-10 col-9 small-content-split">
									<div class="small-content-inner">
										<span class="small-content-title title-border">7 different countries</span>
										<p class="small-content-description">Sandhills is a globally-distributed company with team members on 4 different continents.</p>
									</div>
								</div>
							</div>
							<div class="fact-wrap small-content-aside-split row justify-content-between">
								<div class="col-lg-3 col-sm-2 col-3 small-aside-split">
									<div class="small-aside-inner">
										<img class="about-icon" src="<?php echo SHD_IMAGES . 'icons/location-icon.svg'; ?>">
									</div>
								</div>
								<div class="col-lg-9 col-sm-10 col-9 small-content-split">
									<div class="small-content-inner">
										<span class="small-content-title title-border">Headquartered In "Hutch"</span>
										<p class="small-content-description">Hutch is located in a region of Kansas known for its prairies and hills called the Sandhills. Get it?</p>
									</div>
								</div>
							</div>
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

	<section class="quick-info did-you-know border-on-top">
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
						<span class="our-people-title bold-title section-title">Meet our <span class="title-highlight">Team</span></span>
						<p class="bold-description">We're a team of many talents, working daily to help each other grow professionally. We employ writers, designers, support technicians, developers, marketers, and most importantly, people who care.</p>
					</div>
				</div>
			</div>
			<div class="our-people-row row">
				<?php get_template_part( 'template-parts/content', 'our-humans' ); ?>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="sandhills-member row no-gutters">
						<div class="col">
							<div class="member-wrap">
								<div class="member-graphic">
								</div>
								<div class="member-info">
									<p class="member-img"><span class="member-img-placeholder"></span></p>
									<p class="member-name">You, perhaps?</p>
									<p class="member-role"><a href="<?php echo home_url( '/careers/' ); ?>">Submit an application</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="quick-info did-you-know border-on-bottom">
		<div class="container">
			<div class="row">
				<div class="col">
					<span class="quick-detail camera"><i class="fad fa-camera-retro"></i><strong>Did you know:</strong> Our microbrewery, Sandhills Brewing, has an awesome Instagram profile full of beer and good times. <a class="quick-info-link" href="https://www.instagram.com/sandhillsbrewing/" target="_blank">Check it out &rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

	<section class="timeline-section">
		<div class="timeline-background-wrap">
			<div class="container">
				<div class="sandhills-history-row row justify-content-around text-center">
					<div class="col-lg-8">
						<h1 class="bold-title">Sandhills <span class="title-highlight">History</span></h1>
						<p class="bold-description">From 7 different countries around the world, we've slowly come <em>together</em> to create what we believe in, and what makes our customers' lives better.</p>
						<p class="bold-description-secondary">Here's how we did it.</p>
					</div>
				</div>
				<div class="sandhills-timeline-row row justify-content-around">
					<div class="col-lg-10">
						<div class="timeline-wrap">

							<div class="row start-row">
								<div class="col-md-6"></div>
								<div class="col-md-6"></div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event">
									<div class="new-year-date purple">
										<span class="the-year">2009</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description">Fueled by coffee and interrupted by school work, Pippin begins building the foundation of what would eventually become Sandhills Development, LLC.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">Over a few years, custom solutions built for clients begin to take shape as standalone WordPress plugins.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Pippin graduated from the University of Kansas with a bachelor's degree in Linguistics.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event order-md-2">
									<div class="new-year-date">
										<span class="the-year">2011</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col order-md-2">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://pippinsplugins.com/">Pippin's Plugins</a> launches as a resource for WordPress developers and a place to distribute Pippin's WordPress plugins.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event">
									<div class="new-year-date gold">
										<span class="the-year">2012</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://restrictcontentpro.com/">Restrict Content Pro</a> launches as a membership solution for WordPress.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://easydigitaldownloads.com/">Easy Digital Downloads</a> launches as an eCommerce solution for selling digital products on WordPress.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://sugarcalendar.com/">Sugar Calendar</a> launches as an event calendar plugin for WordPress.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Take a look at some of our projects in their early stages. <a href="https://pippinsplugins.com/2012-a-year-in-review/">2012 in review</a></p>
										</div>
										<div class="additional-event">
											<p>Fun fact: the company wasn't always called Sandhills Development. Read <a href="https://pippinsplugins.com/2013-review/">2013 in review</a> to see the original name.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event order-md-2">
									<div class="new-year-date green">
										<span class="the-year">2014</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col order-md-2">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://affiliatewp.com/">AffiliateWP</a> launches as an affiliate program solution for WordPress sites.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">Not yet under the Sandhills umbrella, Phil D. launches <a href="https://wpsimplepay.com/">WP Simple Pay</a> as a Stripe Payments plugin for WordPress.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">Sandhills hires its first official team member, <span class="member">Sean</span>, who joined as a support technician and theme developer.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Read <a href="https://pippinsplugins.com/2014-review/">2014 in review</a> for a glimpse into our significant growth as a company.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event">
									<div class="new-year-date red">
										<span class="the-year">2015</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Chris</span> joins the team as a co-lead developer for Easy Digital Downloads. <span class="member">Andrew</span>, co-founder of AffiliateWP, joins the team to focus on AffiliateWP and Easy Digital Downloads. <span class="member">John P.</span> (not pictured above) joins the team as a developer. <span class="member">Michael</span> joins the team as a support technician.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>The Sandhills team meets up in Las Vegas twice this year.</p>
										</div>
										<div class="additional-event">
											<p>This year, we began confronting one of our biggest challenges as a company. Check out <a href="https://pippinsplugins.com/2015-year-review/">2015 in review</a> for the scoop.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event order-md-2">
									<div class="new-year-date teal">
										<span class="the-year">2016</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col order-md-2">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Lisa</span> joins the team as a support technician. <span class="member">Drew</span> joins the team as a developer to focus primarily on AffiliateWP.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Company meet-up held in Tempe, Arizona.</p>
										</div>
										<div class="additional-event">
											<p>This year, we made a significant change to our business model. See <a href="https://pippinsplugins.com/2016-in-review/">2016 in review</a> if you're curious how it worked out.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event">
									<div class="new-year-date pink">
										<span class="the-year">2017</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description">Sugar Calendar re-launches as an event calendar plugin for WordPress.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Ashley</span>, <span class="member">Phil J.</span>, and <span class="member">John</span> join the company as developers. <span class="member">Ginger</span> and <span class="member">Keri</span> join to focus on customer support and documentation. <span class="member">Kyle</span> joins the team as a marketer.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Sean</span>, <span class="member">Chris</span>, <span class="member">Andrew</span>, and <span class="member">John P.</span> officially join <span class="member">Pippin</span> as Partners in Sandhills Development.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Annual company meet-up, now known as Sandhills Summit, held in Keystone, Colorado.</p>
										</div>
										<div class="additional-event">
											<p>Read <a href="https://pippinsplugins.com/2017-in-review/">2017 in review</a> to learn about some of our growing pains this year.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event order-md-2">
									<div class="new-year-date purple">
										<span class="the-year">2018</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col order-md-2">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><a href="https://sandhillsbrewing.com/">Sandhills Brewing</a> opens its doors as one of very few microbreweries in Hutchinson, Kansas! Sandhills Brewing now has a location in Hutch, as well as Mission, Kansas.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Phil D.</span> joins the team, bringing with him <a href="https://wpsimplepay.com/">WP Simple Pay</a>. What a great day!</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Daniel</span> and <span class="member">Mihai</span> join the team to focus on support. <span class="member">Tyler</span> joins the company to manage social outreach and help with administration efforts. <span class="member">Mandy</span> joins as a dedicated copy-writer. <span class="member">Tunbosun</span> joins as a developer to focus on AffiliateWP.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">Sandhills purchases its first plot of land in Hutch with a goal of preserving nature in a quickly growing city.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col order-md-1">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>It's not official until there's a blog, right? Watch Sandhills Brewing do its thing over time. <a href="https://sandhillsbrewing.com/blog/">Sandhills Brewing blog</a></p>
										</div>
										<div class="additional-event">
											<p><a href="https://sellbird.com/">Sellbird</a>, an under-construction service for facilitating digital product and media sales, reaches its mature development stage.</p>
										</div>
										<div class="additional-event">
											<p>Sandhills Summit held in Port St. Lucie, Florida.</p>
										</div>
										<div class="additional-event">
											<p>Who knew we'd benefit from establishing a real marketing team? Take a look at <a href="https://pippinsplugins.com/2018-year-in-review/">2018 in review</a> to see what we learned about marketing this year.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row new-year-row">
								<div class="col-md-6 events-col new-year-event">
									<div class="new-year-date pink">
										<span class="the-year">2019</span>
									</div>
									<div class="events-inner">
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 events-col">
									<div class="events-inner">
										<div class="single-event-wrap">
											<p class="event-description"><span class="member">Andrew</span> and <span class="member">Adam</span> join the rockstar support crew. <span class="member">Spencer</span> and <span class="member">Alex</span> join as much needed developers for our fleet of software products. <span class="member">Michael</span>, previously part-time, becomes a full-time team member.</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">We bid farewell to <span class="member">John P.</span>, Partner and long-time developer. We appreciate his efforts to breathe new life into Restrict Content Pro during his time as Product Lead. He will be missed!</p>
										</div>
										<div class="single-event-wrap">
											<p class="event-description">Sandhills purchases the building that houses our headquarters office as well as the Hutch microbrewery and tap room. With this purchase, we also become property managers, renting storefront space to a yoga studio.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 additional-info-col">
									<div class="additional-info-inner">
										<div class="additional-event">
											<p>Sandhills Summit held in Rockford, Illinois.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="row end-row">
								<div class="col-md-6"></div>
								<div class="col-md-6"></div>
							</div>

						</div>
					</div>
				</div>
				<div class="timeline-end text-center">
					<p>That's <?php echo shd_get_years_in_business(); ?> years and counting. Cheers! 🥂 Here's what to expect in the future.</p>
				</div>
				<div class="sandhills-future-timeline">
					<div class="sandhills-future-timeline-item row justify-content-around">
						<div class="col-lg-6 future-event-col">
							<div class="future-event">
								<p>Paying your affiliates shouldn't be so hard! We're building an integrated payouts service for AffiliateWP to make paying your affiliates partners through ACH transfers seamless and easy. <a href="https://payouts.sandhillsdev.com/">Check it out</a>.</p>
							</div>
						</div>
					</div>
					<div class="sandhills-future-timeline-item row justify-content-around">
						<div class="col-lg-6 future-event-col">
							<div class="future-event">
								<p>Though Sellbird is currently under development, <a href="https://sellbird.com/">you can sign up</a> to receive updates and information as the project takes flight.</p>
							</div>
						</div>
					</div>
					<div class="sandhills-future-timeline-item row justify-content-around">
						<div class="col-lg-6 future-event-col">
							<div class="future-event">
								<p>The development team is working diligently on Easy Digital Downloads 3.0, the most significant update the eCommerce plugin has ever received. Stay up to date with our <a href="https://easydigitaldownloads.com/development/">development blog</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
