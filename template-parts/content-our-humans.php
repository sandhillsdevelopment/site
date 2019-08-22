<?php
/**
 * Grid of our team members
 */
?>

<div class="meet-the-team">

	<div class="container">

		<div class="row">
			<div class="team-sandhills section-header col">
				<span class="section-title">Greetings from <span class="title-highlight">Team Sandhills</span> <span class="title-emoji">👋</span></span>
				<p class="section-description">We're a team of humans who believe in creating powerful products that make a positive impact on the lives of our customers.</p>
			</div>
		</div>

		<div class="row">

			<div class="our-facts col-2 offset-3">
				<div class="team-members fact-group row no-gutters">
					<div class="col">
						<span class="fact-title"><?php echo count( shd_get_our_people() ); ?></span>
						<p class="fact-description">Team members</p>
					</div>
				</div>
			</div>
			<div class="our-facts col-2">
				<div class="countries fact-group row no-gutters">
					<div class="col">
						<span class="fact-title">7</span>
						<p class="fact-description">Countries</p>
					</div>
				</div>
			</div>
			<div class="our-facts col-2">
				<div class="years-in-business fact-group row no-gutters">
					<div class="col">
						<span class="fact-title"><?php echo shd_get_years_in_business(); ?></span>
						<p class="fact-description">Years in business</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row justify-content-around">

			<div class="our-people col-10">

				<div class="our-people-row row">
					<?php
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
					?>
				</div>

			</div>

		</div>

	</div>

</div>
