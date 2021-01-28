<?php
/**
 * Front page hero section content
 */


?>

<div class="container">

	<div class="hero">
		<div class="row justify-content-around text-center">

			<div class="tagline-container col-lg-8">

				<h1 class="tagline-heading bold-title">
					<?php
					/**
					 * Wait till the last minute (output) to add markup to the site description.
					 * This is done for styling reasons. It is not essential.
					 */
					echo str_replace(
						'Ingenuity',
						'<span class="title-highlight">Ingenuity</span>',
						get_bloginfo( 'description' )
					);
					?>
				</h1>

				<?php
				// Get the hero tagline
				$hero_tagline = get_field( 'hero_tagline' );

				// Only output a hero tagline if it exists.
				if ( ! empty( $hero_tagline ) ) {
					?>

					<div class="tagline">

						<div class="bold-description">
							<?php echo $hero_tagline; ?>
						</div>

						<?php
						// Get the button and its subfields
						$hero_button      = get_field( 'hero_button' );
						$hero_button_url  = $hero_button['hero_button_url'];
						$hero_button_text = $hero_button['hero_button_text'];

						// Only output a hero button if it exists.
						if ( ! empty( $hero_button_url ) && ! empty( $hero_button_text ) ) {
							?>
							<p><a class="shd-button" href="<?php echo $hero_button_url; ?>"><?php echo $hero_button_text; ?></a></p>
							<?php
						}
						?>

					</div>

					<?php
				}
				?>

			</div>

		</div>
	</div>

	<div class="sandhills-goals">
		<div class="row">

			<?php
			// Get all of the company goals
			$hero_goals = get_field( 'hero_goals' );

			if ( have_rows( 'hero_goals' ) ) {

				// To reduce code, use this handy-dandy array to loop through the created goals.
				$goal_count = array( 'one', 'two', 'three' );

				while ( have_rows( 'hero_goals' ) ) {
					the_row();

					// Each goal uses the same naming scheme, so loop through based on $goal_count
					foreach ( $goal_count as $goal ) {

						if ( have_rows( 'goal_' . $goal ) ) {

							while ( have_rows( 'goal_' . $goal ) ) {
								the_row();
								$goal_icon        = get_sub_field( 'icon' );
								$goal_title       = get_sub_field( 'title' );
								$goal_description = get_sub_field( 'description' );
								?>
								<div class="col-lg-4">
									<div class="sandhills-goal">
										<img alt="" class="goal-icon" src="<?php echo $goal_icon; ?>">
										<h3 class="goal-title title-border"><?php echo $goal_title; ?></h3>
										<div class="goal-description">
											<?php echo $goal_description; ?>
										</div>
									</div>
								</div>
								<?php
							}
						}
					}
				}
			}
			?>
		</div>
	</div>

</div>