<?php
/**
 * Grid of our projects
 */

$projects = shd_get_our_projects();

foreach ( $projects as $key => $value ) {
	$img_file    = str_replace( array( ' ', '\'' ), array( '-', '' ), strtolower( $value['name'] ) );
	?>
	<div class="<?php echo $key . '-col'; ?> col-3">
		<a class="<?php echo $key . '-url'; ?>" href="<?php echo $value['url']; ?>">
			<div class="quick-project <?php echo $key . '-col'; ?>">
				<p class="quick-project-image"><img class="mascot <?php echo $key . '-mascot'; ?>" src="<?php echo SHD_IMAGES . 'mascots/' . $img_file . '.png'; ?>"></p>
				<span class="quick-project-title"><?php echo $value['name']; ?></span>
				<p class="quick-project-description"><?php echo $value['desc']; ?></p>
			</div>
		</a>
	</div>
	<?php
}
