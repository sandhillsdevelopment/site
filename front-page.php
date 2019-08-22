<?php
/**
 * SHD Site front page
 */
get_header();
?>

	<section class="us-section content-right">

		<div class="container">

			<div class="who-are-we row justify-content-end text-lg-right">
				<div class="col-lg-8">
					<span class="bold-title generic-heading">Meet <span class="title-highlight">Sandhills</span></span>
					<p class="bold-description">Founded in 2009 by Pippin Williamson, <span>Sandhills Development, LLC</span> is a self-funded, globally distributed company based in Hutchinson, Kansas. We consist of <?php echo count( shd_get_our_people() ); ?> gifted professionals located in 7 different countries across the globe. We create software, develop land, manage property, and brew specialty beers.</p>
					<p class="bold-link-wrap"><a class="shd-button" href="<?php echo home_url( '/about/'); ?>">About Sandhills</a></p>
				</div>
			</div>

		</div>

	</section>

	<section class="projects-section content-left">

		<div class="container">

			<div class="projects-header row justify-content-start">
				<div class="col-8">
					<span class="bold-title generic-heading">Our <span class="title-highlight">projects</span></span>
					<p class="bold-description">We believe in creating positive experiences for our customers. Whether it's software designed to take small businesses to the next level, or recipes capable of impressing the most dedicated craft beer enthusiasts, our projects are built with passion and the goal of changing our customers' lives.</p>
				</div>
			</div>

			<div class="projects-wrapper">

				<div class="row justify-content-between no-gutters">
					<?php get_template_part( 'template-parts/content', 'our-projects' ); ?>
				</div>

			</div>

		</div>

	</section>

	<section class="goals-section content-right">

		<div class="container">

			<div class="row justify-content-end text-lg-right">
				<div class="col-lg-8">
					<span class="bold-title generic-heading">Our <span class="title-highlight">people</span></span>
					<p class="bold-description">Freedom is important to us. Our team works from the comfort of our own homes, or wherever we find ourselves fulfilled and productive. Given that we are spread across the globe in multiple timezones, it also gives us the ability to better serve our customers, wherever they may reside.</p>
					<p class="bold-link-wrap"><a class="shd-button" href="<?php echo home_url( '/team/'); ?>">Team Sandhills</a></p>
				</div>
			</div>

		</div>

	</section>

	<section id="contact" class="contact-section stars">

		<div class="container">

			<div class="row  justify-content-around">
				<div class="col-lg-8">
					<span class="bold-title generic-heading text-lg-center">Get in touch</span>
					<p class="bold-description text-lg-center">We look forward to hearing from you. If you’re in need of technical support, have a billing question or issue, please use the support page on the specific product you’re inquiring about.</p>
					<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
				</div>
			</div>

		</div>

	</section>

<!--

	<section class="what-we-do">

		<div class="container">

			<section class="nutshell-section row justify-content-between no-gutters">
				<div class="col-6">
					<div class="media solutions">
						<?php get_template_part( 'template-parts/carousel', 'solutions' ); ?>
					</div>
				</div>
				<div class="col-6">
					<div class="content">
						<h3>empower businesses</h3>
						<p>We are the humans behind Easy Digital Downloads, Restrict Content Pro, AffiliateWP, Sugar Event Calendar, SellBird, WP Simple Pay, Pippin's Plugins, and more.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our projects &rarr;</a></p>
					</div>
				</div>
			</section>

			<section class="nutshell-section row justify-content-between">
				<div class="col-6 order-2">
					<div class="media communities">
						<?php get_template_part( 'template-parts/carousel', 'communities' ); ?>
					</div>
				</div>
				<div class="col-6 order-1">
					<div class="content">
						<h3>build relationships</h3>
						<p>We take pride in improving the human experience. Through various charities, land development, and property management, our aim is to leave the world around us better than how we found it.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our commitments &rarr;</a></p>
					</div>
				</div>
			</section>

			<section class="nutshell-section row justify-content-between">
				<div class="col-6">
					<div class="media passions">
						<?php get_template_part( 'template-parts/carousel', 'passions' ); ?>
					</div>
				</div>
				<div class="col-6">
					<div class="content">
						<h3>bring people together</h3>
						<p>At Sandhills Development, we are real humans with real passions. One of our passions happens to be beer. Our Kansas-based microbrewery, Sandhills Brewing, attracts those who love our barrel aged wild ales.</p>
						<p><a href="https://sandhillsbrewing.com/">Check out Sandhills Brewing &rarr;</a></p>
					</div>
				</div>
			</section>

		</div>

	</section>

-->

<?php
get_footer();