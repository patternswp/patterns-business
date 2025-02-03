<?php
/**
 * Title: Landing
 * Slug: patterns-business/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"patterns-business/hero-banner"} /-->
	<!-- wp:pattern {"slug":"patterns-business/featured-section-1"} /-->
	<!-- wp:pattern {"slug":"patterns-business/featured-section-2"} /-->
	<!-- wp:pattern {"slug":"patterns-business/featured-section-3"} /-->
	<!-- wp:pattern {"slug":"patterns-business/featured-section-4"} /-->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:pattern {"slug":"patterns-business/featured-section-5"} /-->
			<!-- wp:pattern {"slug":"patterns-business/featured-section-6"} /-->

		</div>
	<!-- /wp:group -->
<!-- wp:pattern {"slug":"patterns-business/featured-section-7"} /-->
<!-- wp:pattern {"slug":"patterns-business/featured-section-8"} /-->
<!-- wp:pattern {"slug":"patterns-business/featured-section-9"} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
