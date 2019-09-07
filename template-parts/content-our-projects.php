<?php
/**
 * Grid of our projects
 */

$projects = shd_get_our_projects();

/**
 * Used on the front page to display projects with short descriptions
 */
if ( is_front_page() ) {

	foreach ( $projects as $key => $value ) {
		$img_file = str_replace( array( ' ', '\'' ), array( '-', '' ), strtolower( $value['name'] ) );
		?>

		<div class="<?php echo $key . '-col'; ?> project-col col-lg-6">
			<a class="<?php echo $key . '-url'; ?>" href="<?php echo $value['links']['url']; ?>">
				<div class="<?php echo $key . '-project'; ?> project">
					<div class="row">
						<div class="col-sm-3 <?php echo $key . '-mascot-col'; ?>">
							<img class="<?php echo $key . '-mascot'; ?> mascot" src="<?php echo $value['mascot']; ?>">
						</div>
						<div class="col-sm-9 <?php echo $key . '-info-col'; ?>">
							<span class="project-type generic-heading"><?php echo $value['type']; ?></span>
							<span class="project-title generic-heading"><?php echo $value['name']; ?><span class="external-project-link"><i class="fad fa-external-link"></i></span></span>
							<p class="project-description"><?php echo $value['short_desc']; ?></p>
						</div>
					</div>
				</div>
			</a>
		</div>

		<?php
	}
}


/**
 * Used on the Projects page to display projects with long descriptions
 */
if ( is_page( 'projects') ) {

	foreach ( $projects as $key => $value ) {
		$img_file = str_replace( array( ' ', '\'' ), array( '-', '' ), strtolower( $value['name'] ) );
		?>

		<section id="<?php echo $key; ?>" class="<?php echo $key . '-section project-section'; ?>">
			<div class="container">
				<div class="<?php echo $key . '-row'; ?> row content-aside-split">
					<div class="col-lg-8 info-wrap content-split">
						<div class="content-inner">
							<div class="info-row row justify-content-between">
								<div class="col-2 <?php echo $key . '-mascot-col'; ?>">
									<div class="<?php echo $key . '-mascot-container'; ?>">
										<img class="<?php echo $key . '-mascot'; ?> mascot" src="<?php echo $value['mascot']; ?>">
									</div>
								</div>
								<div class="col-md-10 <?php echo $key . '-info-col'; ?>">
									<div class="<?php echo $key . '-info-container'; ?>">
										<span class="content-subtitle"><?php echo $value['type']; ?></span>
										<a class="content-title" href="<?php echo $value['links']['url']; ?>"><?php echo $value['name']; ?>&nbsp;<i class="fad fa-external-link"></i></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<?php echo isset( $value['long_desc'] ) ? $value['long_desc'] : $value['short_desc']; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 <?php echo $key . '-actions-col'; ?> aside-split">
						<div class="aside-inner d-flex flex-column">
							<span class="aside-title">Quick details</span>
							<p class="aside-description"><?php echo $value['short_desc']; ?></p>
							<ul class="aside-links">
								<?php
								foreach ( $value['links'] as $link_key => $link_value ) {

									if ( 'url' !== $link_key ) {
										?>
										<li><a class="aside-link" href="<?php echo $link_value; ?>"><?php echo str_replace( '_', ' ', $link_key ); ?></a></li>
										<?php
									}
								}
								?>
							</ul>
							<div class="aside-cta mt-auto">
								<a class="aside-button shd-button" href="<?php echo $value['links']['url']; ?>">View project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}
}
