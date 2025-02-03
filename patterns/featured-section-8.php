<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-business/featured-section-8
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg","dimRatio":50,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background"  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
    


    
<!-- wp:group {"layout":{"type":"constrained","wideSize":"650px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default"} -->
<h3 class="wp-block-heading has-text-align-center has-default-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--10);font-size:2.5rem;font-style:normal;font-weight:300"><?php esc_html_e( 'Setting up your website only takes a few minutes', 'patterns-business' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"25px"}},"typography":{"lineHeight":"1.8"}},"textColor":"default"} -->
<p class="has-text-align-center has-default-color has-text-color " style="margin-bottom:25px;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis', 'patterns-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","className":"pw-form-style-1","layout":{"type":"constrained","wideSize":"300px"}} -->
<div class="wp-block-group alignfull pw-form-style-1"><!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-business' ); ?>
<!-- /wp:shortcode --></div>


<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
