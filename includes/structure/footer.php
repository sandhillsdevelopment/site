<?php
/**
 * Adjustments to theme footer
 */


/**
 * Themedd footer.
 *
 * @since 1.1
 */
function shd_footer() {
	?>

	<section class="footer-bottom">

		<div class="container py-4">

			<div class="footer-row row">
				<div class="col-lg-7">
					<nav id="nav-secondary-footer" class="">
						<?php echo wp_nav_menu( 'secondary' ); ?>
					</nav>
				</div>
				<div class="col-lg-5 text-lg-right pt-lg-0 pt-4">
					<?php echo themedd_copyright();	?>
				</div>
			</div>

		</div>

	</section>

	<?php
}
remove_action( 'themedd_footer', 'themedd_footer' );
add_action( 'themedd_footer', 'shd_footer' );


/**
 * Modify the site footer
 *
 * @param string $copyright The original Themedd site footer
 * @param array $classes Wrapping element classes
 *
 * @return string Privacy Policy link added to site footer
 */
function eddwp_add_privacy_policy_to_site_footer( $copyright, $classes ) {

	$copyright = '<div class="site-copyright"><p class="mb-0">' . sprintf( 'Copyright &copy; %s %s', date( 'Y' ), '<span class="copyright-site-name"><strong>' . get_bloginfo( 'name' ) ) . '</strong></span></p></div>';

	return $copyright;
}
add_filter( 'themedd_copyright', 'eddwp_add_privacy_policy_to_site_footer', 10, 2 );