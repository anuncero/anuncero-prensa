<?php
/**
 * Sidebar / Widget area definitions
 *
 * @package Anuncero_Prensa
 */

if ( ! function_exists( 'anuncero_prensa_widgets_init' ) ) :
	function anuncero_prensa_widgets_init() {
		// Main Sidebar (Right)
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar Principal', 'anuncero-prensa' ),
				'id'            => 'sidebar-1',
				'description'   => esc_html__( 'Widgets en la columna derecha junto al contenido.', 'anuncero-prensa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
		// Footer Column 1
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Columna 1', 'anuncero-prensa' ),
				'id'            => 'footer-1',
				'description'   => esc_html__( 'Widgets para la primera columna del pie de página.', 'anuncero-prensa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		// Footer Column 2
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Columna 2', 'anuncero-prensa' ),
				'id'            => 'footer-2',
				'description'   => esc_html__( 'Widgets para la segunda columna del pie de página.', 'anuncero-prensa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		// Footer Column 3
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Columna 3', 'anuncero-prensa' ),
				'id'            => 'footer-3',
				'description'   => esc_html__( 'Widgets para la tercera columna del pie de página.', 'anuncero-prensa' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
endif;
add_action( 'widgets_init', 'anuncero_prensa_widgets_init' );
