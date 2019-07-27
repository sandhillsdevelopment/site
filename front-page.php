<?php
/**
 * SHD Site front page
 */
get_header();
?>

	<div class="hero">

		<div class="container">

			<section class="row justify-content-between">
				<div class="tagline-container col-6">
					<h1 class="tagline-heading">Crafting Ingenuity</h1>
					<div class="tagline">
						<p>Founded in 2009 by CEO Pippin Williamson, Sandhills Development, LLC is a self-funded, globally distributed company with team members in seven different countries. 🌍</p>
						<p>With <a class="commitments" href="<?php echo home_url( '/commitments/' ); ?>">commitment</a> and a deep appreciation for the human element, we aim to craft superior experiences through ingenuity.</p>
						<p>We are the humans behind Easy Digital Downloads, Restrict Content Pro, AffiliateWP, Sugar Event Calendar, SellBird, WP Simple Pay, Pippin's Plugins, and more.</p>
					</div>
				</div>
				<div class="tagline-container col-6">
					<a class="button" href="<?php echo home_url( '/project/' ); ?>">Projects</a>
				</div>
			</section>

		</div>

	</div>

	<div class="meet-the-team">

		<div class="container">

			<div class="section-header our-people-header row">
				<div class="col-6">
					<span class="section-title">Greetings from <span class="title-highlight">Team Sandhills</span> <span class="title-emoji">👋</span></span>
					<p class="section-description">We're a team of humans who believe in creating powerful products that make a positive impact on the lives of our customers.</p>
				</div>
			</div>

			<div class="row">

				<div class="our-people col-10">
					<?php get_template_part( 'template-parts/content', 'our-humans' ); ?>
				</div>

				<div class="our-facts col-2">
					<div class="fact-group row no-gutters">
						<div class="col offset-2">
							<span class="fact-title"><?php echo count( shd_get_our_people() ); ?></span>
							<p class="fact-description">Team members</p>
						</div>
					</div>
					<div class="fact-group row no-gutters">
						<div class="col offset-2">
							<span class="fact-title">7</span>
							<p class="fact-description">Countries</p>
						</div>
					</div>
					<div class="fact-group row no-gutters">
						<div class="col offset-2">
							<span class="fact-title"><?php echo shd_get_years_in_business(); ?></span>
							<p class="fact-description">Years in business</p>
						</div>
					</div>
				</div>

			</div>

			<div class="global-footprint row justify-content-between">

				<div class="col-7">
					<span class="section-title">Our <span class="title-highlight">global</span> footprint</span>
					<p class="section-description">Freedom is important to us. Our team works from the comfort of our own homes, or wherever we find ourselves <strong>happy</strong> and <strong>productive</strong>. We do our best work when we prioritize having a healthy workplace.</p>
					<p>Furthermore, given that we are spread across the globe in multiple timezones, it also gives us the ability to better serve our customers, wherever they may reside.</p>
				</div>

				<div class="join-our-team-container col-3">
					<span class="join-our-team"><a href="<?php echo home_url( '/careers/' ); ?>">Join our team</a></span>
				</div>

			</div>

		</div>

	</div>

	<div class="headquarters">

		<div class="container">

			<div class="row">

				<div class="col-3">
					<h4>Sandhills Headquarters</h4>
					<p class="section-description">Hutchinson, Kansas, USA</p>
				</div>
				<div class="col-3">
					<h4>Send us a friendly tweet</h4>
					<p class="section-description">Twitter: <a href="https://twitter.com/sandhillsdev" target="_blank">@sandhillsdev</a></p>
				</div>
				<div class="col-3">
					<h4>Share your success story with us</h4>
					<p class="section-description">Email: <a href="mailto:success@sandhillsdev.com">success@sandhillsdev.com</a></p>
				</div>

			</div>

		</div>

	</div>

	<?php get_template_part( 'template-parts/element', 'multi-color-border' ); ?>

	<div class="what-we-do">

		<div class="container">

			<section class="nutshell-section row justify-content-between">
				<div class="col-5">
					<div class="content">
						<h3>building relationships</h3>
						<p>We take pride in improving the human experience. Through various charities, land development, and property management, our aim is to leave the world around us better than how we found it.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our commitments &rarr;</a></p>
					</div>
				</div>
				<div class="col-6">
					<div class="media communities">
						<?php get_template_part( 'template-parts/carousel', 'communities' ); ?>
					</div>
				</div>
			</section>

			<section class="nutshell-section row justify-content-between">
				<div class="col-6">
					<div class="media passions">
						<?php get_template_part( 'template-parts/carousel', 'passions' ); ?>
					</div>
				</div>
				<div class="col-5">
					<div class="content">
						<h3>bringing people together</h3>
						<p>At Sandhills Development, we are real humans with real passions. One of our passions happens to be beer. Our Kansas-based microbrewery, Sandhills Brewing, attracts those who love our barrel aged wild ales.</p>
						<p><a href="https://sandhillsbrewing.com/">Check out Sandhills Brewing &rarr;</a></p>
					</div>
				</div>
			</section>

			<section class="nutshell-section row justify-content-between">
				<div class="col-5">
					<div class="content">
						<h3>empowering businesses</h3>
						<p>We are the humans behind Easy Digital Downloads, Restrict Content Pro, AffiliateWP, Sugar Event Calendar, SellBird, WP Simple Pay, Pippin's Plugins, and more.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our projects &rarr;</a></p>
					</div>
				</div>
				<div class="col-6">
					<div class="media solutions">
						<?php get_template_part( 'template-parts/carousel', 'solutions' ); ?>
					</div>
				</div>
			</section>

		</div>

	</div>

	<div class="our-projects">
		<div class="container">
			<div class="section-heading">
				<h3 class="section-title"></h3>
			</div>
			<div class="row">
				<div class="mascots col-9">
					<img class="mascot sellbird" src="<?php echo SHD_IMAGES . 'mascots/sellbird.png'; ?>">
					<img class="mascot edd" src="<?php echo SHD_IMAGES . 'mascots/edd.png'; ?>">
					<img class="mascot alf" src="<?php echo SHD_IMAGES . 'mascots/alf.png'; ?>">
					<img class="mascot rex" src="<?php echo SHD_IMAGES . 'mascots/rex.png'; ?>">
					<img class="mascot sugarcalendar" src="<?php echo SHD_IMAGES . 'mascots/sugarcalendar.png'; ?>">
					<img class="mascot rhino" src="<?php echo SHD_IMAGES . 'mascots/rhino.png'; ?>">
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();