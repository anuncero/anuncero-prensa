<?php
/**
 * Sidebar / Widget area definitions
 *
 * @package Anuncero_Prensa
 */

if ( ! function_exists( 'anuncero_prensa_widgets_init' ) ) :
	function anuncero_prensa_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'anuncero-prensa' ),
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Add widgets here.', 'anuncero-prensa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
endif;
add_action( 'widgets_init', 'anuncero_prensa_widgets_init' );
