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
										<p class="small-content-description">Hutchinson, Kansas, that is. Hutch is located in a region of Kansas known for its <em>sand</em> prairies. Get it?</p>
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
					<span class="quick-detail"><i class="fad fa-info-circle"></i><strong>Did you know:</strong> Our microbrewery, Sandhills Brewing, has a pretty cool Instagram profile. <a class="quick-info-link" href="https://www.instagram.com/sandhillsbrewing/" target="_blank">Check it out &rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

	<section class="team-section stars">
		<div class="container">
			<div class="row text-center justify-content-around">
				<div class="col-lg-8">
					<div class="team-sandhills section-header">
						<span class="our-people-title bold-title section-title">Team <span class="title-highlight">Sandhills</span></span>
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
					<span class="quick-detail"><i class="fad fa-info-circle"></i><strong>Did you know:</strong> Our microbrewery, Sandhills Brewing, has a pretty cool Instagram profile. <a class="quick-info-link" href="https://www.instagram.com/sandhillsbrewing/" target="_blank">Check it out &rarr;</a></span>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
