<?php
/**
 * Grid of our team members
 */

$people = shd_get_our_people();

foreach ( $people as $key => $value ) {
	$img_file    = str_replace( ' ', '-', strtolower( $value['name'] ) );
	$year_joined = isset( $value['year_joined'] ) ? $value['year_joined'] : '';
	$nickname    = isset( $value['nickname'] ) ? $value['nickname'] : substr( $value['name'], 0, strpos( $value['name'], ' ' ) );
	?>
	<div class="col-2">
		<img alt="" src="<?php echo SHD_IMAGES . 'team/' . $img_file . '.jpg'; ?>">
		<?php if ( ! empty( $year_joined ) ) { ?>
			<span class="year"><?php echo $year_joined ?></span>
		<?php } ?>
		<span class="person"><?php echo $nickname ?></span>
	</div>
	<?php
}
