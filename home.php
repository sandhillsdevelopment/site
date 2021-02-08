<?php
/**
 * Site blog
 */

get_header();
?>

	<div class="blog-hero">
		<div class="container">
			<div class="hero">
				<header class="row justify-content-around text-center">
					<div class="col-12">
						<h1 class="bold-title">Sandhills <span class="title-highlight">Blog</span></h1>
						<p class="bold-description">Never miss an update! Sign up for our <a href="<?php echo home_url( 'subscribe' );?>">email newsletter</a>. 📥</p>
					</div>
				</header>
			</div>
		</div>
	</div>

<section class="older-posts-section">
	<div class="container">

		<div class="row justify-content-around">
			<div class="col-lg-12">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'archive-element' );
					endwhile;
				endif;
				?>
			</div>
		</div>

		<?php themedd_paging_nav(); ?>

	</div>
</section>

<?php
get_footer();