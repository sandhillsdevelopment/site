<?php
/**
 * SHD Site front page
 */
get_header();
?>

	<div class="businesses">

		<div class="container">

			<div id="passions-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
				<ol class="carousel-indicators">
					<li data-target="#passions-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#passions-carousel" data-slide-to="1"></li>
					<li data-target="#passions-carousel" data-slide-to="2"></li>
					<li data-target="#passions-carousel" data-slide-to="3"></li>
					<li data-target="#passions-carousel" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo SHD_IMAGES . 'carousel/passions/sandhills-brewing-pippin-jonathan-brewery.jpg'; ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php echo SHD_IMAGES . 'carousel/passions/sandhills-brewing-taproom-beer.jpg'; ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php echo SHD_IMAGES . 'carousel/passions/sandhills-brewing-mission-taproom.jpg'; ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php echo SHD_IMAGES . 'carousel/passions/sandhills-brewing-enjoying-beer.jpg'; ?>">
					</div>
					<div class="carousel-item">
						<img src="<?php echo SHD_IMAGES . 'carousel/passions/sandhills-brewing-taproom.jpg'; ?>">
					</div>
				</div>
				<a class="carousel-control-prev" href="#passions-carousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#passions-carousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>

	</div>

	<div class="nutshell">

		<div class="container">

			<section class="nutshell-section row justify-content-between">
				<div class="col-6">
					<div class="media passions">
						<?php get_template_part( 'template-parts/carousel', 'passions' ); ?>
					</div>
				</div>
				<div class="col-5">
					<div class="content">
						<h4>Passion projects that <span>bring people together</span></h4>
						<p>At Sandhills Development, we are real humans with real passions. One of our passions happens to be beer. Our Kansas-based microbrewery, Sandhills Brewing, attracts those who love our barrel aged wild ales.</p>
						<p><a href="https://sandhillsbrewing.com/">Check out Sandhills Brewing</a> <span class="link-arrow">&rarr;</span></p>
					</div>
				</div>
			</section>

			<section class="nutshell-section row justify-content-between">
				<div class="col-5">
					<div class="content">
						<h4>Community efforts that <span>build relationships</span></h4>
						<p>We take pride in improving the human experience. Through various charities, land development, and property management, our aim is to leave the world around us better than how we found it.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our commitments</a> <span class="link-arrow">&rarr;</span></p>
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
					<div class="media solutions">
						<?php get_template_part( 'template-parts/carousel', 'solutions' ); ?>
					</div>
				</div>
				<div class="col-5">
					<div class="content">
						<h4>Technical solutions that <span>empower businesses</span></h4>
						<p>We are the humans behind Easy Digital Downloads, Restrict Content Pro, AffiliateWP, Sugar Event Calendar, SellBird, WP Simple Pay, Pippin's Plugins, and more.</p>
						<p><a href="<?php echo home_url( '/projects/' ); ?>">See our projects</a> <span class="link-arrow">&rarr;</span></p>
					</div>
				</div>
			</section>

		</div>

	</div>

<?php get_template_part( 'template-parts/content', 'our-humans' ); ?>

	<div class="our-projects">
		<div class="container">
			<div class="section-heading">
				<h3 class="section-title"></h3>
			</div>
			<div class="row">
				<div class="col">
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