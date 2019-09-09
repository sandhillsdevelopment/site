<?php
/**
 * Grid of our team members
 */

$people = shd_get_our_people();

foreach ( $people as $key => $value ) {
	$nickname = isset( $value['nickname'] ) ? $value['nickname'] : substr( $value['name'], 0, strpos( $value['name'], ' ' ) );
	?>

	<div class="col-xl-3 col-lg-4 col-md-6">
		<div class="sandhills-member <?php echo $key . '-wrap'; ?> row no-gutters">
			<div class="col">
				<div class="member-wrap">
					<div class="member-graphic">
					</div>
					<div class="member-info">
						<p class="member-img"><img src="<?php echo SHD_IMAGES . 'team/' . str_replace( ' ', '-', strtolower( $value['name'] ) ) . '.jpg'; ?>"></p>
						<p class="member-name"><?php echo $nickname ?></p>
						<p class="member-role"><?php echo $value['role'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
}
?>

<!--
<div class="col-xl-3 col-lg-4 col-md-6">
	<div class="sandhills-member row no-gutters">
		<div class="col">
			<div class="member-wrap">
				<div class="member-graphic">
				</div>
				<div class="member-info">
					<p class="member-img"><span class="member-img-placeholder"></span></p>
					<p class="member-name">You, perhaps?</p>
					<p class="member-role"><a href="<?php echo home_url( '/careers/' ); ?>">Submit an application</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
-->

<?php
