<?php
/**
 * Upreach Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Upreach
 */

namespace Upreach\StarterContent;

/**
 * Returns the array of starter content for the theme.
 *
 * Passes it through the `upreach_starter_content` filter before returning.
 *
 * @return array A filtered array of args for the starter_content.
 */
function get_starter_content() {
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		'posts'       => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Front Page', 'Theme starter content', 'upreach' ),
				'post_content' => '<!-- wp:group {"metadata":{"name":"Grow your business..."},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"20%"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"500"}}} -->
<h2 class="wp-block-heading" style="font-size:3rem;font-style:normal;font-weight:500">Grow your business, master every move.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Helping businesses thrive with innovative digital strategies, creative solutions, and measurable outcomes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"https://framerusercontent.com/images/7gnxSykfdAsj4n7wNjouFyG6UA.jpeg","dimRatio":0,"contentPosition":"bottom left","style":{"border":{"radius":"2rem"},"dimensions":{"aspectRatio":"1"}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:2rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/7gnxSykfdAsj4n7wNjouFyG6UA.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-blur-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-blur-box"><!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size">Your growth. Our Mission.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>+65%</strong> ROI Boost</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"At Upreach, we deliver..."},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.65rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:2.65rem">At Upreach, we deliver real results through <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-dark-color">high-converting marketing strategies</mark> designed to scale your business, attract the right audience, and <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-dark-color">maximize ROI with precision.</mark></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"What we offer"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">What we offer</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Comprehensive solutions for business success.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"backgroundColor":"transparent-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-transparent-overlay-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading">Digital Marketing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Maximize online visibility with paid ads, social media, and strategic SEO to drive targeted traffic and higher conversions.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Why we\'re the right choice"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Why we\'re the right choice</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"25%","left":"25%"}}}} -->
<p class="has-text-align-center" style="padding-right:25%;padding-left:25%">We create impactful strategies, refine brand positioning, and drive real results through smart content and scalable campaigns.</p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/OOn1oIfa2850QA690c30bjCBgD0.jpeg","dimRatio":0,"contentPosition":"bottom center","style":{"border":{"radius":"3rem","color":"#ffffff21","width":"10px"}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center has-border-color" style="border-color:#ffffff21;border-width:10px;border-radius:3rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/OOn1oIfa2850QA690c30bjCBgD0.jpeg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-blur-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-blur-box"><!-- wp:paragraph -->
<p>10+ years of experience</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><strong>Inside our process</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">98%</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Client Success Rate</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">200+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Campaigns Launched</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">$250k+</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Revenue Generated</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Questions"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem">Your questions, answered.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"30%","left":"30%"}}}} -->
<p class="has-text-align-center" style="padding-right:30%;padding-left:30%">Find quick answers to common queries about our services, process, and how we can help you achieve your goals.</p>
<!-- /wp:paragraph -->

<!-- wp:details {"showContent":true} -->
<details class="wp-block-details" open><summary>How does your marketing approach stand out from competitors?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>SaaS is subscription-based and centrally hosted. Users pay a recurring fee to access the software over the internet, eliminating the need for upfront costs and ongoing maintenance.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What makes your lead generation strategies effective?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We use advanced targeting, AI-driven analytics, and high-converting funnels to attract and nurture quality leads that turn into loyal customers.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How do you accurately measure the success of a campaign?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We track key performance indicators like conversions, ROI, engagement, and customer acquisition, providing transparent insights and continuous optimization.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How can I easily get started with your services today?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Simply reach out through our contact page, and our team will guide you through a tailored strategy session to kickstart your growth.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What platforms do you specialize in for digital marketing?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We leverage major platforms like Google Ads, Facebook, Instagram, LinkedIn, and TikTok, optimizing each for maximum impact and business growth.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Do you offer tailored solutions for different industries?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Yes, we customize our strategies to fit your industry, business goals, and audience, ensuring a high-impact marketing approach that drives results.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->',
			),
			'about',
			'contact',
			'blog',
			'news',
		),

		'attachments' => array(
			'wapuu' => array(
				'post_title' => esc_html_x( 'Wapuu', 'Theme starter content', 'upreach' ),
				'file'       => '_playground/wapuu.png',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'     => array(
			'show_on_front'   => 'page',
			'page_on_front'   => '{{front}}',
			'page_for_posts'  => '{{blog}}',
			'site_icon'       => '{{wapuu}}',
			'blogname'        => esc_html_x( 'Upreach', 'Theme starter content', 'upreach' ),
			'blogdescription' => esc_html_x( 'Another fine WordPress Block Theme', 'Theme starter content', 'upreach' ),
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html_x( 'Primary menu', 'Theme starter content', 'upreach' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
					'link_github' => array(
						'title' => esc_html_x( 'Upreach', 'Theme starter content', 'upreach' ),
						'url'   => 'https://github.com/WeAreIconick/Upreach/',
					),
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'upreach_starter_content', $starter_content );
}
