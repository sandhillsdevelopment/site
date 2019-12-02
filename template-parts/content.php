<?php
/**
 * The template part for displaying content
 */
?>

<div class="archive-row row content-item-wrap">
	<div class="col-lg-2 content-item-graphic">
		<div class="content-item-graphic-inner">
			<a class="content-item-title" href="<?php the_permalink(); ?>"><span class="item-graphic-placeholder"></span></a>
		</div>
	</div>
	<div class="col-lg-10 content-item-text">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-item-text-inner'); ?>>
			<a class="content-item-title" href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;<i class="fad fa-link"></i></a>
			<?php the_excerpt(); ?>
			<div class="content-footer-row row justify-content-between">
				<div class="col-sm-4">
					<a class="content-item-text-link" href="<?php the_permalink(); ?>">Continue reading</a>
				</div>
				<div class="col-sm-4 text-sm-right">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				</div>
			</div>
		</article>
	</div>
</div>
