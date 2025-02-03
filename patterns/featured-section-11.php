<?php
/**
 * Title: Featured Section 11
 * Slug: patterns-business/featured-section-11
 * Categories: call-to-action, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
<h6 class="wp-block-heading has-text-align-left has-quinary-color has-text-color " style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php esc_html_e( 'And we will get back yo you.', 'patterns-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Leave us your info', 'patterns-business' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"quaternary"} -->
<p class="has-text-align-left has-quaternary-color has-text-color " style="margin-bottom:25px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-business' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
<h6 class="wp-block-heading has-text-align-left has-quinary-color has-text-color " style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php esc_html_e( 'And we will get back yo you.', 'patterns-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Contact Info', 'patterns-business' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"base"} -->
<p class="has-text-align-left has-base-color has-text-color " style="margin-bottom:25px;line-height:1.8"><?php esc_html_e( '4 apt. Flawing Street. The Grand Avenue.Liverpool, UK 33342', 'patterns-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"},"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"25px"}}},"className":"pa-contact-info","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info" style="margin-top:25px"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-envelope-at-navy-blue.png"
style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-business' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"pa-contact-info","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-telephone-navy-blue.png"
style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-business' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|60"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->

<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quinary"} -->
<h6 class="wp-block-heading has-text-align-left has-quinary-color has-text-color " style="margin-bottom:0px;font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php esc_html_e( 'And we will get back yo you.', 'patterns-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--10);font-size:2rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Social Networks', 'patterns-business' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#002e5b","size":"has-large-icon-size","align":"left","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links alignleft has-large-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
