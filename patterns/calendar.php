<?php
/**
 * Title: Calendar
 * Slug: patterns-business/calendar
 * Categories: posts
 * Description: Display a calendar showing your site’s posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:heading {"level":4} -->
    <h4 class="wp-block-heading"><?php esc_html_e( 'Calendar', 'patterns-business' ); ?></h4>
    <!-- /wp:heading -->
    <!-- wp:calendar /-->

</div>
<!-- /wp:group -->
