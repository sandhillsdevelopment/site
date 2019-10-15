<?php
/**
 * Custom modifications for simple notices pro plugin
 */


/**
 * Dequeue simple notices pro styling
 */
function shd_dequeue_style() {
	wp_dequeue_style( 'notifications' );
}
add_action( 'wp_enqueue_scripts', 'shd_dequeue_style' );


/**
 * Custom display notice function
 */
function shd_display_notice() {

	/// this displays the notification area if the user has not read it before
	global $user_ID;

	$notice_args = array(
		'post_type'      => 'notices',
		'posts_per_page' => 1,
		'meta_key'       => '_enabled',
		'meta_value'     => '1',
	);
	$notices     = get_posts( $notice_args );

	if ( $notices ) :
		foreach ( $notices as $notice ) {

			$logged_in_only = get_post_meta( $notice->ID, '_notice_for_logged_in_only', true );

			$can_view = false;
			if ( $logged_in_only == 'All' ) {
				$can_view = true;
			} elseif ( $logged_in_only == 'Logged In' && is_user_logged_in() ) {
				$can_view = true;
			} elseif ( $logged_in_only == 'Logged Out' && ! is_user_logged_in() ) {
				$can_view = true;
			}

			// Get the necessary data to build out a CTA button
			$button_url  = get_post_meta( $notice->ID, 'shd_cta_button_url', true );
			$button_text = get_post_meta( $notice->ID, 'shd_cta_button_text', true );
			$has_cta     = ! empty( $button_url ) ? true : false;

			if ( $can_view ) {
				if ( function_exists( 'pippin_check_notice_is_read' ) && pippin_check_notice_is_read( $notice->ID, $user_ID ) != true ) {
					?>

					<div id="notification-area" class="snp-hidden">
						<div class="container">
							<div class="notice-content">
								<div class="row">
									<div class="col-lg-1 col-icon text-center text-lg-left pb-3 pb-lg-0">
										<div class="row">
											<div class="col-12">
												<div class="notice-icon-wrap">
													<img class="notice-icon" src="<?php echo SHD_IMAGES . 'icons/bullhorn-icon.svg'; ?>" data-fallback="<?php echo SHD_IMAGES . 'icons/bullhorn-icon.png'; ?>">
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-<?php echo $has_cta ? '9' : '11'; ?> col-content text-center text-lg-left pb-4 pb-lg-0 pl-lg-4 pl-xl-5">
										<span class="notice-text"><?php echo do_shortcode( $notice->post_content ); ?></span>
									</div>
									<?php if ( $has_cta ) { ?>
										<div class="col-lg-2 col-cta text-center text-lg-right position-relative">
											<a class="shd-button" href="<?php echo $button_url; ?>"><?php echo ! empty( $button_text ) ? $button_text : 'Learn more'; ?></a>
										</div>
									<?php } ?>
								</div>
								<a class="remove-notice" href="#" id="remove-notice" rel="<?php echo $notice->ID; ?>" title="Dismiss notice">
									<i class="fas fa-times" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<?php
				}
			}
		}
	endif;
}
remove_action( 'wp_footer', 'pippin_display_notice' );
add_action( 'themedd_site_header', 'shd_display_notice' );