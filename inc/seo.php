<?php
/**
 * SEO metadata integration (Open Graph, Twitter Cards, Description)
 *
 * @package Anuncero_Prensa
 */

if ( ! function_exists( 'anuncero_prensa_add_seo_meta_tags' ) ) :
	function anuncero_prensa_add_seo_meta_tags() {
		global $post;

		// Default Site Description
		$description = get_bloginfo( 'description', 'display' );

		// Open Graph Title & Description
		if ( is_single() || is_page() ) {
			$title = get_the_title();
			if ( ! empty( $post->post_excerpt ) ) {
				$description = strip_tags( $post->post_excerpt );
			} else {
				$description = wp_trim_words( strip_tags( $post->post_content ), 30 );
			}
		} else {
			$title = get_bloginfo( 'name' );
		}

		// Featured Image for OG
		$image_url = '';
		if ( is_singular() && has_post_thumbnail() ) {
			$image_url = get_the_post_thumbnail_url( $post->ID, 'large' );
		}

		echo '<!-- Anuncero Prensa SEO Metadata -->', "\n";
		echo '<meta name="description" content="' . esc_attr( $description ) . '" />', "\n";
		
		// Open Graph
		echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />', "\n";
		echo '<meta property="og:description" content="' . esc_attr( $description ) . '" />', "\n";
		echo '<meta property="og:type" content="' . ( is_single() ? 'article' : 'website' ) . '" />', "\n";
		echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '" />', "\n";
		echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />', "\n";
		if ( $image_url ) {
			echo '<meta property="og:image" content="' . esc_url( $image_url ) . '" />', "\n";
		}

		// Twitter Cards
		echo '<meta name="twitter:card" content="summary_large_image" />', "\n";
		echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />', "\n";
		echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '" />', "\n";
		if ( $image_url ) {
			echo '<meta name="twitter:image" content="' . esc_url( $image_url ) . '" />', "\n";
		}
		echo '<!-- /Anuncero Prensa SEO Metadata -->', "\n";
	}
endif;
add_action( 'wp_head', 'anuncero_prensa_add_seo_meta_tags', 5 );
