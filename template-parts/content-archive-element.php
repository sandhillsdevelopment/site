<?php
// A single element on an archive. Typically a blog post.

$post_author_id   = get_post_field( 'post_author', get_the_ID() );
$post_author_name = get_the_author_meta( 'display_name', $post_author_id );
?>

<div class="blog-row row content-aside-split">
	<div class="col-lg-8 content-split">
		<div class="content-inner">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-item-text-inner mb-4'); ?>>
				<a class="content-item-title" href="<?php the_permalink(); ?>"><span class="item-graphic-placeholder"></span><?php the_title(); ?>&nbsp;<i class="fad fa-link"></i></a>
				<?php the_excerpt(); ?>
			</article>
		</div>
	</div>
	<div class="col-lg-4 aside-split">
		<div class="aside-inner d-flex flex-column">
			<span class="aside-title d-none d-lg-block"><i class="fad fa-info-circle"></i>About this post</span>
			<div class="aside-description">
				<p>Published on <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>. <?php echo shd_get_written_by(), '. ', shd_get_post_terms(); ?></p>
			</div>
			<div class="aside-cta mt-auto">
				<a class="aside-button shd-button" href="<?php the_permalink(); ?>">Continue reading</a>
			</div>
		</div>
	</div>
</div>