<?php
/**
 * Grid of our projects
 */

$projects = shd_get_our_projects();
foreach ( $projects as $key => $value ) {
	$img_file    = str_replace( array( ' ', '\'' ), array( '-', '' ), strtolower( $value['name'] ) );
	?>
	<div class="<?php echo $key . '-col'; ?> project-col col-6">
		<a class="<?php echo $key . '-url'; ?>" href="<?php echo $value['url']; ?>">
			<div class="<?php echo $key . '-col'; ?> project">
				<span class="project-title generic-heading"><?php echo $value['name']; ?></span>
				<p class="project-description"><?php echo $value['desc']; ?></p>
				<span class="project-button shd-button">View project</span>
			</div>
		</a>
	</div>
	<?php
}
