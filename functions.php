<?php
/**
 * Anuncero Prensa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anuncero_Prensa
 */

if ( ! defined( 'ANUNCERO_PRENSA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ANUNCERO_PRENSA_VERSION', '1.0.0' );
}

/**
 * Load modular files for cleaner architecture (SOLID principles).
 */
$anuncero_prensa_includes = array(
	'/inc/setup.php',    // Theme setup and custom theme supports.
	'/inc/enqueue.php',  // Enqueue scripts and styles.
	'/inc/seo.php',      // Native SEO and Open Graph metadata injection.
	'/inc/menus.php',    // Menu registration.
	'/inc/sidebars.php', // Widget areas registration.
);

foreach ( $anuncero_prensa_includes as $file ) {
	$filepath = get_template_directory() . $file;
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}
