<?php
/**
 * Title: Latest Posts
 * Slug: patterns-business/latest-posts
 * Categories: posts
 * Description: Display latest posts, commonly placed in sidebars or footers.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Recent Posts', 'patterns-business' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":60,"featuredImageSizeHeight":60} /--></div>
<!-- /wp:group -->
