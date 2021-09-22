<?php
/**
 * Adjustments to theme header
 */

/**
 * Add custom site header structure
 */
function shd_site_header() {

	// Set up default container classes.
	$container_classes = array( 'container pt-md-7 pb-md-6 pt-5 pb-5 justify-content-center' );
	?>

	<div id="masthead" class="site-header" role="banner">
		<div class="navbar navbar-expand-md px-0 py-0">
			<?php echo themedd_navbar_toggler(); ?>
		</div>
		<div id="navbar-mobile" class="navbar px-0 px-md-3 py-0 d-md-none">
			<div class="container">
				<nav class="navbar-collapse collapse" id="nav-mobile">
					<?php echo themedd_mobile_menu(); ?>
				</nav>
			</div>
		</div>

		<div class="navbar-header navbar-expand-md px-0 py-0">
			<div class="<?php echo themedd_output_classes( $container_classes ); ?>">
				<div class="row no-gutters">
					<div class="col-md-3">
						<?php echo shd_site_branding(); ?>
					</div>
					<div class="col-md-9 secondary-menu-container-right">
						<nav id="nav-secondary" class="navbar-collapse collapse justify-content-end">
							<?php echo themedd_secondary_navigation( array( 'menu_classes' => array( 'navbar-right' ) ) ); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<?php
		if ( is_front_page() ) {
			get_template_part( 'template-parts/content', 'front-page-hero' );
		}
		?>

	</div>

	<?php
}
remove_action( 'themedd_site_header', 'themedd_site_header', 20 );
add_action( 'themedd_site_header', 'shd_site_header', 20 );


/**
 * Custom site logo with SVG support
 */
function shd_site_branding() {
	$classes    = array( 'site-title', 'mb-0' );
	?>

	<div class="site-branding<?php if ( ! display_header_text() ) { echo ' sr-only'; } ?>">

		<?php do_action( 'themedd_site_branding_start' ); ?>

		<span class="<?php echo themedd_output_classes( $classes ); ?>">
			<a class="shd-logo-anchor navbar-brand mr-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="shd-logo" src="<?php echo SHD_IMAGES . 'logos/shd-logo-light.svg'; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" data-fallback="<?php echo SHD_IMAGES . 'logos/shd-logo-light.png'; ?>">
			</a>
		</span>

	</div>
	<?php
}


/**
 * Quick facts display below site header
 */
function shd_header_quick_facts() {

	if ( is_single() || is_page( 'careers' ) ) {
		return;
	}
	?>

	<section class="quick-info site-wide">
		<div class="container">

			<div class="row">

				<div class="col-12 text-center">

					<?php if ( is_home() || is_tag() || is_category() || is_page( 'subscribe' ) ) { ?>

						<span class="quick-detail feather-pen-icon"><i class="fad fa-pen-nib"></i><strong>Did you know:</strong> We also publish project-specific content on our individual project sites. <a class="quick-info-link" href="<?php echo home_url( '/projects/' ); ?>">Check&nbsp;them&nbsp;out&nbsp;&rarr;</a></span>

					<?php } elseif ( is_page( 'about' ) ) { ?>

						<span class="quick-detail nature"><i class="fad fa-trees"></i><strong>Did you know:</strong> Sandhills owns 3 acres of open land in a popular Hutch neighborhood simply to preserve nature as a communal space for people and animals alike.</span>

					<?php } else { ?>

						<span class="quick-detail shd-founded"><i class="fad fa-lightbulb"></i><strong>Founded in 2009</strong><span class="temp-hide"> by Pippin Williamson.</span></span>
						<span class="quick-detail shd-headquarters"><i class="fad fa-map-marker-alt"></i><span class="temp-hide">Headquartered in </span><strong>Hutchinson, Kansas</strong>.</span>
						<span class="quick-detail"><a class="quick-info-link" href="<?php echo home_url( '/about/' ); ?>">More<span class="temp-hide">&nbsp;about&nbsp;Sandhills</span>&nbsp;&rarr;</a></span>

					<?php } ?>

				</div>

			</div>

		</div>
	</section>

	<?php
}
add_action( 'themedd_content_start', 'shd_header_quick_facts', 0 );