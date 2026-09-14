<?php
/**
 * Template part for displaying related posts
 *
 * @package Anuncero_Prensa
 */
?>
<div class="related-posts">
	<h3>Te puede interesar</h3>
	<div class="news-grid">
		<?php
		$categories = get_the_category();
		if ( $categories ) {
			$category_ids = array();
			foreach ( $categories as $individual_category ) {
				$category_ids[] = $individual_category->term_id;
			}
			$args = array(
				'category__in'     => $category_ids,
				'post__not_in'     => array( get_the_ID() ),
				'posts_per_page'   => 3,
				'ignore_sticky_posts' => 1
			);
			$related_query = new WP_Query( $args );
			if ( $related_query->have_posts() ) {
				while ( $related_query->have_posts() ) {
					$related_query->the_post();
					get_template_part( 'template-parts/content', 'card' );
				}
				wp_reset_postdata();
			}
		}
		?>
	</div>
</div>
