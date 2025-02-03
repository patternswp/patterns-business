<?php
/**
 * Title: Card 3
 * Slug: patterns-business/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"default","layout":{"type":"default"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg"  style="border-top-left-radius:5px;border-top-right-radius:5px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base"} -->
<h5 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="margin-bottom:5px;font-style:normal;font-weight:600"><?php esc_html_e( 'David Parker', 'patterns-business' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"quinary"} -->
<p class="has-text-align-center has-quinary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Chief Executive Officer', 'patterns-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"quaternary","iconColorValue":"#373737","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"15px"}}}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:15px"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
