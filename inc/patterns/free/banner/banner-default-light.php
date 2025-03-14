<?php
/**
 * Default content width (Light version)
 */

return array(
	'title'      => __( 'Default content width (Light)', 'aino' ),
	'categories' => array( 'banner' ),
	'content'    => '<!-- wp:ainoblocks/flexbox {"flexDirectionMobile":"direction__colrev__m","justifyContentDesktop":"justify__center__d","style":{"color":{"background":"#c2c7c9"}}} -->
	<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__colrev__m nowrap__d nowrap_t nowrap_m justify__center__d justify__flexstart__t justify__flexstart__m align-items__stretch__d align-items__stretch__t align-itms__stretch__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none has-background" style="background-color:#c2c7c9"><!-- wp:ainoblocks/flex-item {"flexGrow":2,"paddingTop":9,"paddingBottom":9,"paddingLeft":8,"paddingRight":8} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__9 pb__9 pl__8 pr__8" style="flex-grow:2"><!-- wp:paragraph {"textColor":"font-secondary","fontSize":"xs","paddingTop":0,"paddingBottom":3} -->
	<p class="has-font-secondary-color has-text-color has-xs-font-size pb__3">Our new WordPress theme</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":3,"textColor":"font-primary","fontSize":"m","paddingTop":0,"paddingBottom":5,"paddingLeft":0,"paddingRight":0} -->
	<h3 class="has-font-primary-color has-text-color has-m-font-size pb__5">Build a shiny new website</h3>
	<!-- /wp:heading -->
	<!-- wp:ainoblocks/multiple-buttons -->
	<div class="wp-block-ainoblocks-multiple-buttons"><div class="wp-block-ainoblocks-multiple-buttons__inner"><!-- wp:ainoblocks/button {"size":"size__s","borderRadius":200,"label":"Get started","backgroundColor":"primary","textColor":"button-color-primary"} -->
	<div class="wp-block-ainoblocks-button has-button-color-primary-color has-primary-background-color has-text-color has-background" style="border-radius:200px"><a class="wp-block-ainoblocks-button__link size__s 200" href="https://ainoblocks.io/" style="border-radius:200px">Get started</a></div>
	<!-- /wp:ainoblocks/button --></div></div>
	<!-- /wp:ainoblocks/multiple-buttons --></div>
	<!-- /wp:ainoblocks/flex-item -->
	<!-- wp:ainoblocks/flex-item -->
	<div class="wp-block-ainoblocks-flex-item auto"><!-- wp:image {"align":"center","width":266,"height":266,"sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/images/pattern-lib/free/banner-default-light.png" alt="" width="266" height="266"/></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:ainoblocks/flex-item --></div>
	<!-- /wp:ainoblocks/flexbox -->',
);
