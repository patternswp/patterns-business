<?php
/**
 * Title: Page Sitemap
 * Slug: patterns-business/page-sitemap
 * Post Types: page
 * Description: A layout that displays site maps.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Pages', 'patterns-business' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:page-list {"style":{"typography":{"lineHeight":"2"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Categories', 'patterns-business' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"style":{"typography":{"lineHeight":"2"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Posts', 'patterns-business' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
			<div class="wp-block-query alignfull">
				<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group alignfull" style="padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0">
					<!-- wp:post-template {"align":"wide", "style":{"typography":{"textTransform":"none"}}} -->
					<!-- wp:group {"layout":{"type":"constrained","contentSize":"780px","justifyContent":"left","wideSize":"780px"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group" style="padding-bottom: 0">
							<!-- wp:post-title {"isLink":true,"style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","className":"is-style-title-hover-secondary-color"} /-->

							<!-- wp:post-date {"textAlign":"left","format":"n/j/Y","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"1px","fontSize":"0.9rem"}},"textColor":"contrast"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"780px"}} -->
				<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0; padding-top: var(--wp--preset--spacing--60); padding-right: 0; padding-bottom: var(--wp--preset--spacing--40); padding-left: 0">
					<!-- wp:pattern {"slug":"patterns-business/pagination"} /-->
					<?php
					// Need to include from PHP since wp:pattern not working
					// <!-- wp:pattern {"slug":"patterns-business/pagination"} /--> .
					require 'pagination.php';
					?>
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
</div>
<!-- /wp:columns -->
