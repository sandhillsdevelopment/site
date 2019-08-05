<?php
/**
 * Adjustments to theme header
 */

/**
 * Add custom site header structure
 */
function shd_site_header() {

	// Set up default container classes.
	$container_classes = array( 'container py-7 justify-content-center' );

	get_template_part( 'template-parts/element', 'multi-color-border' );
	?>

	<header id="masthead" class="site-header" role="banner">

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

				<div class="row">

					<div class="col-md-3">

						<?php echo shd_site_branding(); ?>

					</div>

					<div class="col-md-9 secondary-menu-container-right">

						<nav id="nav-secondary" class="navbar-collapse collapse justify-content-end">
							<?php echo themedd_secondary_navigation( array( 'menu_classes' => array( 'navbar-=right' ) ) ); ?>
						</nav>

					</div>

				</div>

			</div>

		</div>

		<div class="container">

			<div class="hero">

				<div class="row justify-content-between">

					<div class="tagline-container col">

						<h1 class="tagline-heading">Crafting <span class="tagline-highlight">Ingenuity</span></h1>
						<div class="tagline">
							<!--<p>Founded in 2009 by CEO Pippin Williamson, Sandhills Development, LLC is a self-funded, globally distributed company with team members in seven different countries. 🌍</p>-->
							<p>With <a class="commitments" href="<?php echo home_url( '/commitments/' ); ?>">commitment</a> and a deep appreciation for the human element, we aim to craft superior experiences through ingenuity.</p>
						</div>

					</div>

				</div>

			</div>

		</div>

	</header>

	<?php
}
remove_action( 'themedd_site_header', 'themedd_site_header', 20 );
add_action( 'themedd_site_header', 'shd_site_header', 20 );


/**
 * Custom site logo with SVG support
 */
function shd_site_branding() {
	$tag        = is_front_page() || is_home() ? 'h1' : 'p';
	$classes    = array( 'site-title', 'mb-0', 'h1' );
	?>

	<div class="site-branding<?php if ( ! display_header_text() ) { echo ' sr-only'; } ?>">

		<?php do_action( 'themedd_site_branding_start' ); ?>

		<<?php echo $tag; ?> class="<?php echo themedd_output_classes( $classes ); ?>">
			<a class="shd-logo-anchor navbar-brand mr-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="shd-logo" src="<?php echo SHD_IMAGES . 'logo/shd-logo-color.svg'; ?>" alt="Sandhills Development" data-fallback="<?php echo SHD_IMAGES . 'logo/shd-logo-color.png'; ?>">
			</a>
		</<?php echo $tag; ?>>

	</div>
	<?php
}