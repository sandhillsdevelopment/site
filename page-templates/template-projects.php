<?php
/**
 * Template Name: Projects
 */

get_header();
themedd_header();
?>

	<div class="<?php echo themedd_output_classes( themedd_wrapper_classes() ); ?>">
		<div id="primary" class="content-area<?php echo themedd_primary_classes(); ?>">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php
						do_action( 'themedd_entry_article_start' );
						themedd_post_thumbnail();
						?>

						<div class="entry-content content-wrapper">

							<?php do_action( 'themedd_entry_content_start' ); ?>

							<div>

								AffiliateWP

								AffiliateWP was founded in early 2014 with an aim to provide a top-notch, self-hosted, and intuitive affiliate management system for WordPress. It was born from frustrations with existing platforms that were unreliably, cluttered, and cumbersome to use. AffiliateWP was built to seamlessly integrate into the native user interface of WordPress and all of the popular eCommerce, membership, and form platforms. Today it is the default choice for tens of thousands of WordPress site owners and is consistently rated as the best affiliate marketing tool for WordPress.

								Easy Digital Downloads

								Launched in 2012, Easy Digital Downloads was built to sell digital products and exclusively digital products. In the infancy of eCommerce with WordPress, Easy Digital Downloads was the only tool that was wholly dedicated to the purchase and delivery of digital goods. All other platforms focused on selling physical products and left digital goods as an after thought. Today Easy Digital Downloads is not the exclusive option but it's still an active project and one of the standard choices for selling digital products through WordPress.

								Restrict Content Pro

								Built from our own needs, Restrict Content Pro was first released in early 2012 to power the membership section of Pippin's Plugins.com. Like our other products, Restrict Content Pro was first built when very few good options were available for site owners. Today it is one of the most established and feature-rich membership platforms for WordPress used by thousands of websites.

								Sellbird

								Still in development, SellBird is a hosted eCommerce system that will enable digital product creators to effortlessly sell their products without worrying about the hassle or challenges of website hosting and site management. Sign up at Sellbird.com to stay up to date with launch news!

								Sugar Calendar

								Event management can be incredibly complicated and the complexity and difficulty of use of many event publishing platforms illustrate this. Sugar Calendar was built from a desire to break the mold and have a sweet, simple platform for managing events through WordPress. Initially launched in 2012 and recently relaunched in 2019, Sugar Calendar has a long history in WordPress but its journey has really only just begun.

								WP Simple Pay

								Accepting credit cards online used to be challenging and expensive. Stripe, Inc changed that by launching a payment processing platform that was built for developers, making it easy for programmers to create and launch their own tools to accept payments online. WP Simple Pay was created to provide site owners a simple, fast way to start collecting credit card payments on their WordPress-powered website, and today it is the highest rated and most used WordPress plugin for Stripe payments.

							</div>

							<?php do_action( 'themedd_entry_content_end' ); ?>

						</div>

						<?php do_action( 'themedd_entry_article_end' ); ?>

					</article>

				<?php endwhile; ?>

			</main>
		</div>
	</div>

<?php
get_footer();
