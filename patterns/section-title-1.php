<?php
/**
 * Title: Section Title 1
 * Slug: patterns-business/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
<h6 class="wp-block-heading has-text-align-center has-quinary-color has-text-color " style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php esc_html_e( 'Powerful, not overpowering', 'patterns-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Connecting your business with the world', 'patterns-business' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
<p class="has-text-align-center has-quaternary-color has-text-color " style="margin-bottom:25px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
