<?php
/**
 * Title: Featured Post Cards
 * Slug: field-research/featured-post-cards
 * Description: 3 card row for featured posts.
 * Keywords: featured, media,
 * Categories: Featured, Media
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Featured Post Cards"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<section class="wp-block-group" style="min-height:100vh;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Headings"},"className":"z-1","style":{"border":{"bottom":{"width":"0px","style":"none"},"top":{"width":"0px","style":"none"}},"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small","fontFamily":"shippori-antique-b1","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group z-1 has-shippori-antique-b-1-font-family has-small-font-size" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Title Header"},"className":"z-1 blog-column-1 column-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"},"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group z-1 blog-column-1 column-header" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small","fontFamily":"shippori-antique-b1"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color has-link-color has-shippori-antique-b-1-font-family has-small-font-size">Featured Posts</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"greyish"} -->
<hr class="wp-block-separator has-text-color has-greyish-color has-alpha-channel-opacity has-greyish-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image Header"},"className":"blog-column-3 column-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-column-3 column-header" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"0"}},"typography":{"textAlign":"right"}},"textColor":"contrast","fontSize":"small","fontFamily":"shippori-antique-b1"} -->
<p class="has-text-align-right has-contrast-color has-text-color has-shippori-antique-b-1-font-family has-small-font-size" style="padding-left:0"><a href="#" data-type="page" data-id="392">View All Posts</a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"greyish"} -->
<hr class="wp-block-separator has-text-color has-greyish-color has-alpha-channel-opacity has-greyish-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"top","width":"33.34%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.34%"><!-- wp:query {"queryId":19,"query":{"perPage":1,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"excludeCurrent":null,"taxQuery":{"include":{"post_tag":[58]}}},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"metadata":{"name":"Card"},"className":"translate-up","style":{"spacing":{"blockGap":"0"}},"fontFamily":"shippori-antique-b1"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"large","align":"wide"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"human-diff","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"padding":{"top":"0"}}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:query {"queryId":19,"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"post_tag":[58]}},"excludeCurrent":null},"enhancedPagination":true,"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"metadata":{"name":"Card"},"className":"translate-up","fontFamily":"shippori-antique-b1"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"large","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Post Data"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"human-diff","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"padding":{"top":"0"}}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:query {"queryId":19,"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"post_tag":[58]}},"excludeCurrent":null},"enhancedPagination":true,"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"metadata":{"name":"Card"},"className":"translate-up","fontFamily":"shippori-antique-b1"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Post Data"},"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"human-diff","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"padding":{"top":"0"}}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->