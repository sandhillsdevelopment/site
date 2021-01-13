<?php
/**
 * Grid of our team members
 */

$team_members = shd_get_team_members();

foreach ( $team_members as $member ) {
	?>

	<div class="col-xl-3 col-lg-4 col-md-6">
		<div class="sandhills-member <?php echo $member->post_name . '-wrap'; ?> row no-gutters">
			<div class="col">
				<div class="member-wrap">
					<div class="member-graphic">
					</div>
					<div class="member-info">
						<p class="member-img"><?php echo get_the_post_thumbnail( $member->ID ); ?></p>
						<p class="member-name"><?php echo $member->post_title; ?></p>
						<p class="member-role"><?php echo get_field( 'job_title', $member->ID ); ?></p>
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
