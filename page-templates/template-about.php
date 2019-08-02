<?php
/**
 * Template Name: About Us
 */

get_header();
themedd_header();
?>

	<div class="<?php echo themedd_output_classes( themedd_wrapper_classes() ); ?>">
		<div id="primary" class="content-area<?php echo themedd_primary_classes(); ?>">
			<main id="main" class="site-main" role="main">

				<?php
				do_action( 'themedd_main_start' );

				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile;

				do_action( 'themedd_main_end' );
				?>
			</main>
		</div>
	</div>

<?php
get_footer();
