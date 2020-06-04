<?php
/**
 * Functions specific to our company timeline (About page)
 */


/**
 * Quick company facts
 */
function shd_quick_facts() {

	$facts = array(
		'years_in_business' => array(
			'icon'  => 'toast',
			'title' => shd_get_years_in_business() . ' years in business',
			'desc'  => 'As a self-funded company, we\'re proud of our humble beginnings and excited for our future growth.',
		),
		'team_members'      => array(
			'icon'  => 'brick-and-mortar',
			'title' => count( shd_get_our_people() ) . ' team members',
			'desc'  => 'Every day, our team of passionate, dedicated humans come together to build a company we truly believe in.',
		),
		'countries'         => array(
			'icon'  => 'globally-distributed',
			'title' => shd_get_our_countries_count() . ' different countries',
			'desc'  => 'Sandhills is a globally-distributed company with team members on 4 different continents.',
		),
		'headquarters'      => array(
			'icon'  => 'location',
			'title' => 'Headquartered In "Hutch"',
			'desc'  => 'Hutch is located in a region of Kansas known for its prairies and hills called the Sandhills. Get it?',
		),
	);

	return $facts;
}


/**
 * Company timeline excluding upcoming events (shd_upcoming_events())
 */
function shd_timeline() {

	$timeline = array(
		'2009' => array(
			'year'        => '2009',
			'color'       => 'purple',
			'left_config' => true,
			'main_events' => array(
				'Fueled by coffee and interrupted by school work, <span class="member">Pippin</span> begins building the foundation of what would eventually become Sandhills Development, LLC.',
				'Over a few years, custom solutions built for clients begin to take shape as standalone WordPress plugins.'
			),
			'addtl_events' => array(
				'Pippin studied Linguistics at the University of Kansas. Writing code was merely a hobby at this point.',
			),
		),
		'2011' => array(
			'year'        => '2011',
			'color'       => 'blue',
			'left_config' => false,
			'main_events' => array(
				'<a href="' . PP . '">Pippin\'s Plugins</a> launches as a resource for WordPress developers and a place to distribute Pippin\'s WordPress plugins.',
			),
			'addtl_events' => array(
				'Pippin graduated from the University of Kansas with a bachelor\'s degree in Linguistics.',
			),
		),
		'2012' => array(
			'year'        => '2012',
			'color'       => 'gold',
			'left_config' => true,
			'main_events' => array(
				'<a href="' . RCP . '">Restrict Content Pro</a> launches as a membership solution for WordPress.',
				'<a href="' . EDD . '">Easy Digital Downloads</a> launches as an eCommerce solution for selling digital products on WordPress.',
				'<a href="' . SC . '">Sugar Calendar</a> launches as an event calendar plugin for WordPress.',
			),
			'addtl_events' => array(
				'Take a look at some of our projects in their early stages. <a href="' . PP . '2012-a-year-in-review/' . '">2012 in review</a>',
				'Fun fact: the company wasn\'t always called Sandhills Development. Read <a href="' . PP . '2013-review/' . '">2013 in review</a> to see the original name.',
			),
		),
		'2014' => array(
			'year'        => '2014',
			'color'       => 'green',
			'left_config' => false,
			'main_events' => array(
				'<a href="' . AWP . '">AffiliateWP</a> launches as an affiliate program solution for WordPress sites.',
				'Not yet under the Sandhills umbrella, Phil D. launches <a href="' . WPSP . '">WP Simple Pay</a> as a Stripe Payments plugin for WordPress.',
				'Sandhills hires its first official team member, <span class="member">Sean</span>, who joined as a support technician and theme developer.',
			),
			'addtl_events' => array(
				'Read <a href="' . PP . '2014-review/' . '">2014 in review</a> for a glimpse into our significant growth as a company.',
			),
		),
		'2015' => array(
			'year'        => '2015',
			'color'       => 'red',
			'left_config' => true,
			'main_events' => array(
				'<span class="member">Chris</span> joins the team as a co-lead developer for Easy Digital Downloads. <span class="member">Andrew</span>, co-founder of AffiliateWP, joins the team to focus on AffiliateWP and Easy Digital Downloads. <span class="member">John P.</span> (not pictured above) joins the team as a developer. <span class="member">Michael</span> joins the team as a support technician.',
			),
			'addtl_events' => array(
				'The Sandhills team meets up in Las Vegas twice this year.',
				'This year, we began confronting one of our biggest challenges as a company. Check out <a href="' . PP . '2015-year-review/' . '">2015 in review</a> for the scoop.',
			),
		),
		'2016' => array(
			'year'        => '2016',
			'color'       => 'teal',
			'left_config' => false,
			'main_events' => array(
				'<span class="member">Lisa</span> joins the team as a support technician. <span class="member">Drew</span> joins the team as a developer to focus primarily on AffiliateWP.',
			),
			'addtl_events' => array(
				'Company meet-up held in Tempe, Arizona.',
				'This year, we made a significant change to our business model. See <a href="' . PP . '2016-in-review/' . '">2016 in review</a> if you\'re curious how it worked out.',
			),
		),
		'2017' => array(
			'year'        => '2017',
			'color'       => 'pink',
			'left_config' => true,
			'main_events' => array(
				'Sugar Calendar re-launches as an event calendar plugin for WordPress.',
				'<span class="member">Ashley</span>, <span class="member">Phil J.</span>, and <span class="member">John J.</span> join the company as developers. <span class="member">Ginger</span> and <span class="member">Keri</span> join to focus on customer support and documentation. <span class="member">Kyle</span> joins the team as a marketer.',
				'<span class="member">Sean</span>, <span class="member">Chris</span>, <span class="member">Andrew</span>, and <span class="member">John P.</span> officially join <span class="member">Pippin</span> as Partners in Sandhills Development.',
			),
			'addtl_events' => array(
				'Annual company meet-up, now known as Sandhills Summit, held in Keystone, Colorado.',
				'Read <a href="' . PP . '2017-in-review/' . '">2017 in review</a> to learn about some of our growing pains this year.',
			),
		),
		'2018' => array(
			'year'        => '2018',
			'color'       => 'purple',
			'left_config' => false,
			'main_events' => array(
				'<a href="' . BEER . '">Sandhills Brewing</a> opens its doors as one of very few microbreweries in Hutchinson, Kansas! Sandhills Brewing now has a location in Hutch, as well as Mission, Kansas.',
				'<span class="member">Phil D.</span> joins the team, bringing with him <a href="' . WPSP . '">WP Simple Pay</a>. What a great day!',
				'<span class="member">Daniel</span> and <span class="member">Mihai</span> join the team to focus on support. <span class="member">Tyler</span> joins the company to manage social outreach and help with administration efforts. <span class="member">Mandy</span> joins as a content writer. <span class="member">Tunbosun</span> joins as a developer to focus on AffiliateWP.',
				'Sandhills purchases its first plot of land in Hutch with a goal of preserving nature in a quickly growing city.',
			),
			'addtl_events' => array(
				'It\'s not official until there\'s a blog, right? Watch Sandhills Brewing do its thing over time. <a href="' . BEER . 'blog/' . '">Sandhills Brewing blog</a>',
				'<a href="' . SB . '">Sellbird</a>, an under-construction service for facilitating digital product and media sales, reaches its mature development stage.',
				'Sandhills Summit held in Port St. Lucie, Florida.',
				'Who knew we\'d benefit from establishing a real marketing team? Take a look at <a href="' . PP . '2018-year-in-review/' . '">2018 in review</a> to see what we learned about marketing this year.',
			),
		),
		'2019' => array(
			'year'        => '2019',
			'color'       => 'blue',
			'left_config' => true,
			'main_events' => array(
				'<span class="member">Andrea</span> and <span class="member">Adam</span> join the rockstar support crew. <span class="member">Spencer</span> and <span class="member">Alex</span> join as much needed developers for our fleet of software products. <span class="member">Michael</span>, previously part-time, becomes a full-time team member. <span class="member">Joe</span> joins the team as a content creator.',
				'We bid farewell to <span class="member">John P.</span>, Partner and long-time developer. We appreciate his efforts to breathe new life into Restrict Content Pro during his time as Product Lead. He will be missed!',
				'Sandhills purchases the building that houses our headquarters office as well as the Hutch microbrewery and tap room. With this purchase, we also become property managers, renting storefront space to a yoga studio.',
				'We launched our payouts service for AffiliateWP! Our service makes paying affiliates directly to their bank accounts simple and affordable. It also supports more than 30 countries. <a href="https://payouts.sandhillsdev.com/">Take a look</a>!',
			),
			'addtl_events' => array(
				'Sandhills Summit held in Rockford, Illinois.',
				'This year was all about laying a foundation for the future. Read <a href="' . home_url( '/2020/01/2019-year-in-review/' ) . '">2019 in review</a> to understand what that looks like for Sandhills Development.',
			),
		),
		'2020' => array(
			'year'        => '2020',
			'color'       => 'gold',
			'left_config' => false,
			'main_events' => array(
				'Sandhills completes its second land stewardship project by purchasing 54 acres of Tallgrass prairie land! Read more about the project <a href="' . home_url( '/2020/03/land-stewardship/' ) . '">here</a>.',
				'<span class="member">Shayne</span> joins the Sandhills team as a support technician and <span class="member">Robin</span> joins as a developer! Welcome to the team!'
			),
			'addtl_events' => array(
			),
		),
	);

	return $timeline;
}


/**
 * Upcoming events
 */
function shd_upcoming_events() {

	$upcoming_events = array(
		'Though Sellbird is currently under development, <a href="' . SB . '">you can sign up</a> to receive updates and information as the project takes flight.',
		'The development team is working diligently on Easy Digital Downloads 3.0, the most significant update the eCommerce plugin has ever received. Stay up to date with our <a href="' . EDD . 'development/">development blog</a>.',
	);

	return $upcoming_events;
}