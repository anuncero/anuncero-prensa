<?php
/**
 * Menu definitions
 *
 * @package Anuncero_Prensa
 */

if ( ! function_exists( 'anuncero_prensa_menus' ) ) :
	function anuncero_prensa_menus() {
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'anuncero-prensa' ),
				'footer' => esc_html__( 'Footer Menu', 'anuncero-prensa' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'anuncero_prensa_menus' );
