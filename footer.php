<?php
/**
 * Adjustments to theme footer
 */

do_action( 'themedd_content_end' );
?>

</div>

<?php do_action( 'themedd_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'themedd_footer' ); ?>
</footer>

<?php get_template_part( 'template-parts/element', 'multi-color-border' ); ?>

</div>

<?php wp_footer(); ?>

</body>
</html>