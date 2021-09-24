<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();

$project_type   = get_field( 'project_type' );
$project_status = get_field( 'project_status' );
$project_url    = get_field( 'project_url' );
?>

<?php
if ( 'retired' === lcfirst( $project_status ) || 'acquired' === lcfirst( $project_status ) ) {
	?>
	<div class="project-status-notice">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-12">
					<span>This project has been <?php echo lcfirst( $project_status ); ?>.</span>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>

<header class="py-5 py-lg-10">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12 col-md-10">
				<h1 class="post-title"><?php echo get_the_title(); ?></h1>
				<span class="lead"><strong><?php echo $project_type; ?></strong> &mdash; <?php echo get_the_excerpt(); ?></span>
			</div>
		</div>
	</div>
</header>

<?php do_action( 'themedd_single_start' ); ?>

<div class="<?php echo themedd_output_classes( themedd_wrapper_classes() ); ?>">
	<div id="primary" class="content-area<?php echo themedd_primary_classes(); ?>">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'single' );
			endwhile;
			?>

		</main>
	</div>
</div>



<?php get_footer(); ?>