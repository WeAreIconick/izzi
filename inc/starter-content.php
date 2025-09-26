<?php
/**
 * Izzi Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Izzi
 */

namespace Izzi\StarterContent;

/**
 * Returns the array of starter content for the theme.
 *
 * Passes it through the `twombly_starter_content` filter before returning.
 *
 * @return array A filtered array of args for the starter_content.
 */
function get_starter_content() {
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Front Page', 'Theme starter content', 'izzi' ),
				'post_content' => '<!-- wp:group {"style":{"border":{"bottom":{"width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-width:2px"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"5.72rem"}}} -->
<h1 class="wp-block-heading" style="font-size:5.72rem">Stunning Street Photography in Japan</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Tekina is a street photography website focused on capturing and showcasing the unique charm and character of Japan’s streets through engaging and high-quality images.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:cover {"url":"https://framerusercontent.com/images/msO21oZeTewTQOymzJGQ0UEGo.jpg?scale-down-to=4096","dimRatio":0,"minHeight":100,"minHeightUnit":"%"} -->
<div class="wp-block-cover" style="min-height:100%"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/msO21oZeTewTQOymzJGQ0UEGo.jpg?scale-down-to=4096" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}},"backgroundColor":"pale-pink","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-pale-pink-background-color has-background" style="border-bottom-width:1px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"black"} -->
<div class="wp-block-column has-black-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="https://framerusercontent.com/images/c0fYGdIy9BH20GAQg1hrUZDg.jpg?scale-down-to=2048" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Stunning Shots</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We provide impactful, high-quality, and visually arresting photographs.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"pale-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-pale-yellow-background-color has-background" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:200">Our Works</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"20%","left":"20%"}},"typography":{"fontStyle":"normal","fontWeight":"100"}}} -->
<p class="has-text-align-center" style="padding-right:20%;padding-left:20%;font-style:normal;font-weight:100">Raw moments stolen from the urban fabric, whispers of stories etched in fleeting expressions.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:cover {"url":"https://framerusercontent.com/images/c0fYGdIy9BH20GAQg1hrUZDg.jpg?scale-down-to=4096","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"columnSpan":2,"rowSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/c0fYGdIy9BH20GAQg1hrUZDg.jpg?scale-down-to=4096" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">Photo Work #1</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/DWtrqjfxvHLV8SzF8jN9JVen0.jpg","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"rowSpan":1,"columnSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/DWtrqjfxvHLV8SzF8jN9JVen0.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">Video Work #2</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/gy79TtfpZh0b8a4S3Dk8yJ9X4WI.jpg?scale-down-to=4096","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"rowSpan":1,"columnSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/gy79TtfpZh0b8a4S3Dk8yJ9X4WI.jpg?scale-down-to=4096" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">High On Drone #3</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/h9ofqgT6DZkwXPZ9rX0vqWumX10.jpg?scale-down-to=4096","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"rowSpan":1,"columnSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/h9ofqgT6DZkwXPZ9rX0vqWumX10.jpg?scale-down-to=4096" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">Red Sky #4</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/nKuw5FYu4vrUu2BlnwX8DoyM.jpg","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"rowSpan":1,"columnSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/nKuw5FYu4vrUu2BlnwX8DoyM.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">Blue Horizont #5</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://framerusercontent.com/images/6jOzCwZqRt9iVRvuFPTdi7Efmwk.jpg","dimRatio":0,"contentPosition":"bottom left","style":{"layout":{"columnSpan":2,"rowSpan":1},"border":{"radius":"1rem","width":"2px"}},"borderColor":"black"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-border-color has-black-border-color" style="border-width:2px;border-radius:1rem"><img class="wp-block-cover__image-background" alt="" src="https://framerusercontent.com/images/6jOzCwZqRt9iVRvuFPTdi7Efmwk.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"border":{"width":"2px"}},"fontSize":"small"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:2px">Crazy Autmn #6</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="https://izzi.wp.local/?page_id=2" data-type="page" data-id="2">All Works →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"1rem"}},"backgroundColor":"black","textColor":"white","layout":{"inherit":false}} -->
<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color" style="border-radius:1rem;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"style":{"elements":{"link":{"color":{"text":"var:preset|color|translucent-white"}}}},"textColor":"translucent-white","fontSize":"medium"} /-->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|pale-yellow"}}}},"textColor":"pale-yellow"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"pale-purple","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-pale-purple-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"20%","left":"20%"}}}} -->
<p class="has-text-align-center" style="padding-right:20%;padding-left:20%">Get instant insight into your dream photo session! Our FAQs answer everything from "What services do you offer?" to "How long does it take to see my photos?"</p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"FAQs"},"style":{"border":{"width":"2px","radius":"1rem"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-width:2px;border-radius:1rem"><!-- wp:details -->
<details class="wp-block-details"><summary>What types of photography do you offer?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We specialize in [list specialties, e.g., family portraits, weddings, events, product photography]. However, we’re always open to discussing custom projects!</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Do you travel for sessions?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Yes, we’re happy to travel within [your area] for a flat fee of [travel fee]. If you’re located further, please reach out for a custom quote.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What’s your pricing range?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Our packages start at [starting price] and go up depending on the type of session, duration, and desired deliverables. We also offer custom quotes for specific needs.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What’s included in your packages?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Each package includes [list standard inclusions, e.g., specific shooting time, edited photos, online gallery]. You can upgrade packages or add additional services like prints or albums for an extra fee.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How do I book a session?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Simply head to our "Contact" page or click the "Book Now" button, choose your preferred package or fill out a custom request form, and we’ll be in touch to discuss your vision and availability.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Do you have a cancellation policy?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Yes, we require [cancellation notice period] days’ notice for full refunds. After that, cancellations are subject to a [cancellation fee amount].</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What equipment do you use?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>We use professional-grade Canon/Sony/Nikon cameras and lenses to ensure stunning results in any lighting condition.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"style":{"border":{"width":"0px","style":"none"}}} -->
<details class="wp-block-details" style="border-style:none;border-width:0px"><summary>Do you edit the photos?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
<p>Absolutely! We edit all photos for color correction, exposure, and basic enhancements. You can also request additional retouching services for a fee.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
			),
			'about',
			'contact',
			'blog',
			'news',
		),

		'attachments' => array(
			'wapuu' => array(
				'post_title' => esc_html_x( 'Wapuu', 'Theme starter content', 'izzi' ),
				'file'       => '_playground/wapuu.png',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'   => 'page',
			'page_on_front'   => '{{front}}',
			'page_for_posts'  => '{{blog}}',
			'site_icon'       => '{{wapuu}}',
			'blogname'        => esc_html_x( 'Izzi’s Gym', 'Theme starter content', 'izzi' ),
			'blogdescription' => esc_html_x( 'Another fine WordPress Block Theme', 'Theme starter content', 'izzi' ),
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html_x( 'Primary menu', 'Theme starter content', 'izzi' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'gtheme_starter_content', $starter_content );
}
