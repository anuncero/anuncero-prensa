<?php
/**
 * Enqueue scripts and styles
 *
 * @package Anuncero_Prensa
 */

if ( ! function_exists( 'anuncero_prensa_scripts' ) ) :
	function anuncero_prensa_scripts() {
		// Core CSS
		wp_enqueue_style( 'anuncero-prensa-style', get_stylesheet_uri(), array(), ANUNCERO_PRENSA_VERSION );
		wp_enqueue_style( 'anuncero-prensa-main', get_template_directory_uri() . '/assets/css/main.css', array(), ANUNCERO_PRENSA_VERSION );

		// Core JS (deferred for better Google Dev Speed / Core Web Vitals)
		wp_enqueue_script( 'anuncero-prensa-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), ANUNCERO_PRENSA_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'anuncero_prensa_scripts' );

// Add 'defer' to scripts for optimization
add_filter( 'script_loader_tag', 'anuncero_prensa_defer_scripts', 10, 3 );
function anuncero_prensa_defer_scripts( $tag, $handle, $src ) {
	$defer_scripts = array( 'anuncero-prensa-main-js' );
	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . esc_url( $src ) . '" defer="defer"></script>' . "\n";
	}
	return $tag;
}
