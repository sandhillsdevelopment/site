<?php
/**
 * Front page hero section content
 */

$projects = shd_get_our_projects();
?>

<div class="container">
	<div class="hero">
		<div class="row justify-content-around text-center">
			<div class="tagline-container col-lg-8">
				<h1 class="tagline-heading bold-title">Crafting Ingenuity</h1>
				<div class="tagline">
					<p class="bold-description">With <a href="<?php echo home_url( '/commitments/' ); ?>">commitment</a> and a deep appreciation for the human element, we aim to craft superior experiences through ingenuity.</p>
					<p><a class="shd-button" href="<?php echo home_url( '/projects/'); ?>">view our projects</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="sandhills-goals">
		<div class="row">
			<div class="col-lg-4">
				<div class="sandhills-goal">
					<img class="goal-icon" src="<?php echo SHD_IMAGES . 'icons/uplifting-communities-icon.svg'; ?>">
					<h3 class="goal-title title-border">Uplifting communities</h3>
					<p class="goal-description">Through various charities, land development, and property management, our aim is to leave the world in better condition than how we found it.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sandhills-goal">
					<img class="goal-icon" src="<?php echo SHD_IMAGES . 'icons/empowering-businesses-icon.svg'; ?>">
					<h3 class="goal-title title-border">Empowering businesses</h3>
					<p class="goal-description">We are the team of humans behind <a href="<?php echo $projects['awp']['url']; ?>">AffiliateWP</a>, <a href="<?php echo $projects['edd']['url']; ?>">Easy Digital Downloads</a>, <a href="<?php echo $projects['rcp']['url']; ?>">Restrict Content Pro</a>, <a href="<?php echo $projects['sc']['url']; ?>">Sugar Calendar</a>, <a href="<?php echo $projects['wpsp']['url']; ?>">WP Simple Pay</a>, <a href="<?php echo $projects['sb']['url']; ?>">SellBird</a>, and more.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sandhills-goal">
					<img class="goal-icon" src="<?php echo SHD_IMAGES . 'icons/following-passions-icon.svg'; ?>">
					<h3 class="goal-title title-border">Following passions</h3>
					<p class="goal-description">Just like you, we have real passions. One of our passions happens to be beer. <a href="<?php echo $projects['beer']['url']; ?>">Sandhills Brewing</a> attracts those who love our barrel aged wild ales.</p>
				</div>
			</div>
		</div>
	</div>
</div>