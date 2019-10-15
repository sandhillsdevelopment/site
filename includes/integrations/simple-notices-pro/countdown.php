<?php
/**
 * http://hilios.github.io/jQuery.countdown/
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Check to see if the active Notice (Simple Notices Pro) uses the countdown
 */
function shd_live_notice_has_countdown() {

	$args = array(
		'posts_per_page' => -1,
		'meta_key'       => 'shd_notice_has_countdown',
		'post_type'      => 'notices',
		'post_status'    => 'publish',
	);
	$posts = get_posts( $args );

	$found = false;

	if ( $posts ) {
		foreach ( $posts as $post ) {

			// Is this notice published and enabled?
			$notice_enabled = get_post_meta( $post->ID, '_enabled', true );
			if ( 'publish' === $post->post_status && $notice_enabled ) {
				$found = true;
			}
		}
	}

	return $found;
}


/**
 * Enqueue countdown scripts if needed.
 *
 * @return void
 */
function shd_enqueue_countdown_scripts() {

	$path   = SHD_ASSETS . 'js/lib/';
	$ver    = SHD_SITE_VERSION;
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Register countdown scripts.
	wp_register_script( 'moment-js', $path . 'moment' . $suffix . '.js', array(), $ver );
	wp_register_script( 'countdown', $path . 'jquery.countdown' . $suffix . '.js', array( 'jquery' ), $ver );
	wp_register_script( 'moment-timezone', $path . 'moment-timezone' . $suffix . '.js', array(), $ver );
	wp_register_script( 'moment-timezone-with-data', $path . 'moment-timezone-with-data' . $suffix . '.js', array(), $ver );

	// Only enqueue script if the active Notice includes a countdown.
	if ( shd_live_notice_has_countdown() ) {
		wp_enqueue_script( 'moment-js' );
		wp_enqueue_script( 'countdown' );
		wp_enqueue_script( 'moment-timezone' );
		wp_enqueue_script( 'moment-timezone-with-data' );
	}

}
add_action( 'wp_enqueue_scripts', 'shd_enqueue_countdown_scripts' );


/**
 * Add a [countdown] shortcode
 *
 * @return $content
 */
function shd_countdown_shortcode( $atts, $content = null ) {

	$atts = shortcode_atts(
		array(
			'end' => '',
		),
		$atts,
		'countdown'
	);

	$end_date = isset( $atts['end'] ) ? $atts['end'] : false;

	if ( ! $end_date ) {
		return $content;
	}

	// Bail if countdown script hasn't been enqueued.
	if ( ! wp_script_is( 'countdown', 'enqueued' ) ) {
		return $content;
	}

	$content = shd_get_countdown( $end_date );

	return $content;
}
add_shortcode( 'countdown', 'shd_countdown_shortcode' );


/**
 * Get the countdown timer
 *
 * @since 1.4.7
 *
 * @return string
 */
function shd_get_countdown( $end_date = '' ) {

	if ( empty( $end_date ) ) {
		return;
	}

	ob_start();
	?>

	<span id="countdown"><span id="countdown-date"></span></span><script type="text/javascript">

		var endDate = moment.tz("<?php echo $end_date; ?>", "America/Chicago");

		jQuery('#countdown-date').countdown( endDate.toDate() ).on('update.countdown', function(event) {

			var format = '%H:%M:%S';

			if ( event.offset.totalDays > 0 ) {
				format = '%-d day%!d ' + format;
			}

			if ( event.offset.weeks > 0 ) {
				format = '%-w week%!w ' + format;
			}

			jQuery(this).html(event.strftime(format));

		}).on('finish.countdown', function(event) {
			jQuery('#notification-area').hide();
		});
	</script>

	<?php
	$countdown = ob_get_clean();
	return $countdown;
}