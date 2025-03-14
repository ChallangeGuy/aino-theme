<?php
/**
 * 3-column post grid with small heading (Dark version)
 */

return array(
	'title'      => __( '3-column post grid with small heading. (Dark)', 'aino' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:group {"align":"full","backgroundColor":"variant-background-primary","paddingTop":15,"paddingBottom":14,"className":"fullwidth"} -->
	<div class="wp-block-group alignfull fullwidth has-variant-background-primary-background-color has-background pt__15 pb__14"><!-- wp:ainoblocks/grid-container {"paddingTop":0} -->
	<div class="wp-block-ainoblocks-grid-container alignwide"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"marginBottomMobile":0} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__start no-stacking mb_m__0"><!-- wp:heading {"textColor":"background-primary","fontSize":"xxs","paddingBottom":13} -->
	<h2 class="has-background-primary-color has-text-color has-xxs-font-size pb__13">From the blog</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container -->
	
	<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->
	
	<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|variant-font-primary"}}}},"textColor":"variant-font-primary","fontSize":"xs"} /-->
	
	<!-- wp:post-excerpt {"textColor":"variant-font-secondary","fontSize":"xs"} /-->
	
	<!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1.2"}},"textColor":"variant-font-secondary","fontSize":"xs"} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);