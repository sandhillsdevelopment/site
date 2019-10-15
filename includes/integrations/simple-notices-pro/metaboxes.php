<?php
/**
 * Custom metabox settings pertaining to Simple Notices Pro
 */


// Built out the custom settings
global $notice_settings;
$notice_settings = array(
	'id'       => 'shd_notice_settings',
	'title'    => 'Notice Settings',
	'page'     => array( 'notices' ),
	'context'  => 'normal',
	'priority' => 'default',
	'fields'   => array(
		array(
			'name'        => 'Enable countdown',
			'desc'        => 'This Notice displays a countdown. In the Notice content, be sure to include the countdown shortcode with its end date. Ex. <code>[countdown end="YYYY-MM-DD"]</code>',
			'id'          => 'shd_notice_has_countdown',
			'class'       => 'shd-notice-has-countdown',
			'type'        => 'checkbox',
			'rich_editor' => 0,
			'max'         => 0
		),
		array(
			'name'        => 'Button URL',
			'desc'        => 'The full URL that the Notice button will link to. If no URL is provided, the button will not display at all.',
			'id'          => 'shd_cta_button_url',
			'class'       => 'shd-cta-button-url',
			'type'        => 'text',
			'rich_editor' => 0,
			'max'         => 0
		),
		array(
			'name'        => 'Button Text',
			'desc'        => 'The Notice button text. Leave blank to use "LEARN MORE" as the default button text.',
			'id'          => 'shd_cta_button_text',
			'class'       => 'shd-cta-button-text',
			'type'        => 'text',
			'rich_editor' => 0,
			'max'         => 0
		),
	)
);


// Add the Notice Settings metabox
function shd_add_notice_settings_metabox() {
	global $notice_settings;

	if ( ! is_countable(  $notice_settings['page'] ) ) {
		return;
	}

	foreach ( $notice_settings['page'] as $page ) {
		add_meta_box(
			$notice_settings['id'],
			$notice_settings['title'],
			'shd_notices_meta_box',
			$page,
			'normal',
			'default',
			$notice_settings
		);
	}
}
add_action( 'add_meta_boxes', 'shd_add_notice_settings_metabox' );


// Show the Notice Settings metabox
function shd_notices_meta_box() {
	global $post, $notice_settings;
	?>

	<!-- Use nonce for verification -->
	<input type="hidden" name="shd_notice_settings_nonce" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

	<table class="form-table">

		<?php
		foreach ( $notice_settings['fields'] as $field ) {

			// get current post meta data
			$meta = get_post_meta( $post->ID, $field['id'], true );
			?>
			<tr>
				<th style="width:20%">
					<label for="<?php echo $field['id']; ?>"><?php echo stripslashes( $field['name'] ); ?></label>
				</th>
				<td class="field-type-<?php echo str_replace( ' ', '_', $field['type'] ); ?>">
					<?php
					switch ( $field['type'] ) {
						case 'text':
							echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : '', '" size="30" style="width:97%" /><br/>', '', stripslashes( $field['desc'] );
							break;
						case 'checkbox':
							echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' /> ';
							echo stripslashes( $field['desc'] );
							break;
					}
					?>
				</td>
			</tr>
			<?php
		}
		?>

	</table>

	<?php
}


// Save data from Notice Settings metabox
function shd_save_notice_settings_meta( $post_id ) {
	global $post, $notice_settings;

	// Check if our nonce is set.
	if ( ! isset( $_POST['shd_notice_settings_nonce'] ) || ! wp_verify_nonce( $_POST['shd_notice_settings_nonce'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	// If this is an autosave, our form has not been submitted,
	// so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// Check the user's permissions.
	if ( 'notices' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}

	}

	foreach ( $notice_settings['fields'] as $field ) {

		$old = get_post_meta( $post_id, $field['id'], true );
		$new = $_POST[ $field['id'] ];

		if ( $new && $new != $old ) {
			if ( is_string( $new ) ) {
				$new = $new;
			}
			update_post_meta( $post_id, $field['id'], $new );
		} elseif ( '' == $new && $old ) {
			delete_post_meta( $post_id, $field['id'], $old );
		}
	}
}
add_action( 'save_post', 'shd_save_notice_settings_meta' );