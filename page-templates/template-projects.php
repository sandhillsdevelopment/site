<?php
/**
 * Template Name: Projects
 */

get_header();
?>

	<div class="projects-hero">
		<div class="container">
			<div class="hero">
				<header class="row justify-content-around text-center">
					<div class="col-lg-10">
						<h1 class="bold-title">Sandhills <span class="title-highlight">projects</span></h1>
						<p class="bold-description">From 7 different countries across the globe, the Sandhills Development team works together to develop software, create resources, and brew beer. 🍻</p>
					</div>
				</header>
			</div>
		</div>
	</div>

	<div class="full-projects-wrapper">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'our-projects' );
			endwhile;
		?>
	</div>

<?php
get_footer();
