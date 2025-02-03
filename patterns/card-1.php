<?php
/**
 * Title: Card 1
 * Slug: patterns-business/card-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px","color":"#e7e7e7","style":"solid","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"backgroundColor":"default","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-default-background-color has-background" style="border-color:#e7e7e7;border-style:solid;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"100px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"at-m patterns-business-is-h-w-80 at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"default"}} -->
<div class="wp-block-group at-m patterns-business-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:100px;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-megaphone.png"
style="width:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}},"textColor":"base"} -->
<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="margin-bottom:5px"><?php esc_html_e( 'Digital Advertising', 'patterns-business' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontSize":"14px","lineHeight":"1.8"}},"textColor":"quinary"} -->
<p class="has-text-align-center has-quinary-color has-text-color" style="margin-bottom:0px;font-size:14px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio', 'patterns-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"typography":{"textTransform":"uppercase","fontSize":"14px","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|quinary"},":hover":{"color":{"text":"var:preset|color|base"}}}}}} -->
<p class="pwp-txt-dec-non has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><a href="#"><?php esc_html_e( 'Read More', 'patterns-business' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
