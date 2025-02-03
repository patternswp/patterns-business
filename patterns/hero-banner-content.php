<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-business/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary"} -->
<h6 class="wp-block-heading has-secondary-color has-text-color" style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Powerful, not overpowering', 'patterns-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-default-color has-text-color has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:700"><?php esc_html_e( 'Amplify Your Digital Presence', 'patterns-business' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"25px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="margin-bottom:25px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"width":"2px"},"typography":{"textTransform":"uppercase","fontSize":"13px","letterSpacing":"1px"}},"borderColor":"primary"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:13px;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-border-color has-primary-border-color wp-element-button" style="border-width:2px"><?php esc_html_e( 'Discover Now', 'patterns-business' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","className":"is-style-outline","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"1px"}}} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:14px;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-tertiary-background-color has-background wp-element-button"><?php esc_html_e( 'How it works', 'patterns-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.png" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
