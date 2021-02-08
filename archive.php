<?php
/**
 * Archive.php
 * controls styling for categories, tags etc
 */

get_header();
themedd_header(
	array(
		'title'    => shd_archive_page_title(),
		'subtitle' => shd_term_description()
	)
);
?>

	<section class="older-posts-section">
		<div class="container">

			<div class="row justify-content-around">
				<div class="col-lg-12">
					<?php
					get_template_part( 'template-parts/content', 'archive-element' );
					?>
				</div>
			</div>

			<?php themedd_paging_nav(); ?>

		</div>
	</section>

<?php
get_footer();
