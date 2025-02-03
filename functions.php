<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Business
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_BUSINESS_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_BUSINESS_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_BUSINESS_VERSION', '1.0.2' );
define( 'PATTERNS_BUSINESS_THEME_NAME', 'patterns-business' );
define( 'PATTERNS_BUSINESS_OPTION_NAME', 'patterns-business' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_BUSINESS_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_business_run() {
	new Patterns_Business();
}
patterns_business_run();
