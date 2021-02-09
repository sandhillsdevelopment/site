<?php
/**
 * Site blog
 */

get_header();

$blog_id = get_option( 'page_for_posts', true );
?>

<div class="blog-hero">
	<div class="container">
		<div class="hero">
			<header class="row justify-content-around text-center">
				<div class="col-12">
					<h1 class="bold-title"><?php echo shd_get_the_title( $blog_id ); ?></h1>
					<p class="bold-description"><?php echo shd_get_the_subtitle( $blog_id ); ?></p>
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