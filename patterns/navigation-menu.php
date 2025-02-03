<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-business/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Business
 * @subpackage Patterns_Business/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation {"textColor":"default","style":{"typography":{"textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px"}},"layout":{"type":"flex","setCascadingProperties":true}} -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-business' ); ?>"} /-->	
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-business' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'patterns-business' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-business' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-business' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
