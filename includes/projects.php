<?php
/**
 * Functions specific to our projects
 */


/**
 * Get all of our projects.
 *
 * @return array All company projects and information about them
 */
function shd_get_our_projects() {

	$our_projects = array(
		'awp'  => array(
			'name'       => 'AffiliateWP',
			'short_desc' => 'A full-featured affiliate program solution for WordPress sites.',
			'long_desc'  => '<p>AffiliateWP was founded in early 2014 with an aim to provide a top-notch, self-hosted, and intuitive affiliate management system for WordPress. It was born from frustrations with existing platforms that were unreliable, cluttered, and cumbersome to use. AffiliateWP was built to seamlessly integrate into the native user interface of WordPress and all of the popular eCommerce, membership, and form platforms.</p><p>Today it is the default choice for tens of thousands of WordPress site owners and is consistently rated as the best affiliate marketing tool for WordPress.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/affiliatewp.png',
			'type'       => 'WordPress plugin',
			'links'      => array(
				'url'      => 'https://affiliatewp.com/',
				'features' => 'https://affiliatewp.com/features/',
				'pricing'  => 'https://affiliatewp.com/pricing/',
				'support'  => 'https://affiliatewp.com/support/',
			),
		),
		'edd'  => array(
			'name'       => 'Easy Digital Downloads',
			'short_desc' => 'A complete eCommerce solution for selling digital products on WordPress.',
			'long_desc'  => '<p>Launched in 2012, Easy Digital Downloads was built to sell digital products and exclusively digital products. In the infancy of eCommerce with WordPress, Easy Digital Downloads was the only tool that was wholly dedicated to the purchase and delivery of digital goods. All other platforms focused on selling physical products and left digital goods as an after thought.</p><p>Today Easy Digital Downloads is not the exclusive option but it\'s still an active project and one of the standard choices for selling digital products through WordPress.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/easy-digital-downloads.png',
			'type'       => 'WordPress plugin',
			'links'      => array(
				'url'      => 'https://easydigitaldownloads.com/',
				'features' => 'https://easydigitaldownloads.com/edd-features/',
				'pricing'  => 'https://easydigitaldownloads.com/pricing/',
				'support'  => 'https://easydigitaldownloads.com/support/',
			),
		),
		'rcp'  => array(
			'name'       => 'Restrict Content Pro',
			'short_desc' => 'A full-featured, powerful membership solution for WordPress.',
			'long_desc'  => '<p>Built from our own needs, Restrict Content Pro was first released in early 2012 to power the membership section of Pippin\'s Plugins.com. Like our other products, Restrict Content Pro was first built when very few good options were available for site owners.</p><p>Today Restrict Content Pro is one of the most established and feature-rich membership platforms for WordPress used by thousands of websites.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/restrict-content-pro.png',
			'type'       => 'WordPress plugin',
			'links'      => array(
				'url'      => 'https://restrictcontentpro.com/',
				'features' => 'https://restrictcontentpro.com/features/',
				'pricing'  => 'https://restrictcontentpro.com/pricing/',
				'support'  => 'https://restrictcontentpro.com/support/',
			),
		),
		'sc'   => array(
			'name'       => 'Sugar Calendar',
			'short_desc' => 'A sweet, simple event calendar plugin for WordPress.',
			'long_desc'  => '<p>Event management can be incredibly complicated. The complexity and difficulty of use of many event publishing platforms illustrate this. Sugar Calendar was built from a desire to break the mold and have a sweet, simple platform for managing events through WordPress.</p><p>Initially launched in 2012 and recently relaunched in 2019, Sugar Calendar has a long history in WordPress but its journey has really only just begun.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/sugar-calendar.png',
			'type'       => 'WordPress plugin',
			'links'      => array(
				'url'     => 'https://sugarcalendar.com/',
				'pricing' => 'https://sugarcalendar.com/pricing/',
				'support' => 'https://sugarcalendar.com/support/',
			),
		),
		'wpsp' => array(
			'name'       => 'WP Simple Pay',
			'short_desc' => 'The #1 Stripe Payments Plugin for WordPress.',
			'long_desc'  => '<p>Accepting credit cards online used to be challenging and expensive. Stripe, Inc changed that by launching a payment processing platform that was built for developers, making it easy for programmers to create and launch their own tools to accept payments online.</p><p>WP Simple Pay was created in 2014 to provide site owners a simple, fast way to start collecting credit card payments on their WordPress-powered websites. Today it is the highest rated and most used WordPress plugin for Stripe payments.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/wp-simple-pay.png',
			'type'       => 'WordPress plugin',
			'links'      => array(
				'url'      => 'https://wpsimplepay.com/',
				'features' => 'https://wpsimplepay.com/features/',
				'pricing'  => 'https://wpsimplepay.com/pricing/',
				'support'  => 'https://wpsimplepay.com/support/',
			),
		),
		'sb'   => array(
			'name'       => 'Sellbird',
			'short_desc' => 'Helping your digital product and media sales take flight.',
			'long_desc'  => '<p>Still in development, SellBird is a hosted eCommerce system that will enable digital product creators to effortlessly sell their products without worrying about the hassle or challenges of website hosting and site management. Sign up at Sellbird.com to stay up to date with launch news!</p>',
			'mascot'     => SHD_IMAGES . 'mascots/sellbird.png',
			'type'       => 'eCommerce Service',
			'links'      => array(
				'url' => 'http://sellbird.com/',
			),
		),
		'pp'   => array(
			'name'       => 'Pippin\'s Plugins',
			'short_desc' => 'Finely crafted WordPress plugins, tutorials, reviews and more.',
			'long_desc'  => '<p>Pippin\'s Plugins is a resource designed to fill the gap in WordPress plugin development documentation. Useful WordPress plugins, detailed tutorials, and product reviews are just a few of the tools you\'ll find throughout the site.</p><p>Fan fact: some of the above projects were originally created for or distributed from Pippin\'s Plugins.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/pippins-plugins.png',
			'type'       => 'Developer resource',
			'links'      => array(
				'url'       => 'https://pippinsplugins.com/',
				'plugins'   => 'https://pippinsplugins.com/products/',
				'tutorials' => 'https://pippinsplugins.com/learn/',
				'reviews'   => 'https://pippinsplugins.com/category/reviews/',
			),
		),
		'beer' => array(
			'name'       => 'Sandhills Brewing',
			'short_desc' => 'Central Kansas brewery focusing on barrel aged wild ales.',
			'long_desc'  => '<p>Sandhills Brewery specializes in oak-aged and oak-fermented beers. The central Kansas microbrewery officially opened its doors in 2018. With two taproom locations, the first in Hutchinson, Kansas at the Sandhills Development headquarters, and the second in Mission, KS, Sandhills Brewery is well on its way to being a central Kansas favorite among craft beer enthusiasts.</p>',
			'mascot'     => SHD_IMAGES . 'mascots/sandhills-brewing.png',
			'type'       => 'Microbrewery',
			'links'      => array(
				'url'       => 'https://sandhillsbrewing.com/',
				'our_beers' => 'https://sandhillsbrewing.com/our-beers/',
			),
		),
	);

	return (array) $our_projects;
}