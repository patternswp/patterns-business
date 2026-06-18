<?php
/**
 * Title: Latest Comments
 * Slug: patterns-business/latest-comments
 * Categories: posts
 * Description: Display latest comments, commonly placed in sidebars or footers.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Recent comments', 'patterns-business' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:latest-comments {"displayExcerpt":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->
