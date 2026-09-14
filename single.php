<?php
/**
 * The template for displaying all single posts
 *
 * @package Anuncero_Prensa
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-container' ); ?>>
					
					<header class="single-header">
						<div class="single-meta">
							<?php echo get_the_date(); ?> &mdash; <?php the_category( ', ' ); ?>
						</div>
						<h1 class="single-title"><?php the_title(); ?></h1>
					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-thumbnail">
							<?php the_post_thumbnail( 'full' ); ?>
						</div>
					<?php else : ?>
						<div class="single-thumbnail">
							<img src="https://picsum.photos/seed/<?php echo get_the_ID(); ?>/1200/600" alt="Placeholder">
						</div>
					<?php endif; ?>

					<div class="single-content-wrapper">
						<!-- Sticky Share Buttons -->
						<aside class="single-share-sidebar">
							<span class="share-title">Compartir</span>
							<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener" class="share-btn share-twitter">𝕏</a>
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener" class="share-btn share-linkedin">in</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn share-facebook">f</a>
						</aside>

						<div class="entry-content">
							<?php
							the_content();
							
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anuncero-prensa' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->
					</div>

					<!-- Author Box -->
					<div class="single-author-box">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
						</div>
						<div class="author-info">
							<h4 class="author-name"><?php echo esc_html( get_the_author() ); ?></h4>
							<p class="author-bio">
								<?php 
								$author_desc = get_the_author_meta( 'description' );
								echo $author_desc ? esc_html( $author_desc ) : 'Redactor especialista. Sigue nuestro contenido en Anuncero Prensa para más exclusivas.';
								?>
							</p>
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-link">Ver todos los artículos &rarr;</a>
						</div>
					</div>

					<!-- Marketing CTA para Anuncero.press -->
					<div class="single-cta-box">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anuncero.png" alt="Anuncero Logo" class="cta-logo">
						<h3>Monetiza tu portal como los grandes editores</h3>
						<p>Vende tus propios espacios publicitarios (Banners) de forma directa sin intermediarios ni redes programáticas que ralentizan tu web.</p>
						<a href="https://anuncero.press" target="_blank" rel="noopener" class="button cta-button">Empieza gratis en Anuncero.press</a>
					</div>

					<!-- Related Posts -->
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
										?>
										<article class="post-card is-visible">
											<?php if ( has_post_thumbnail() ) : ?>
												<div class="post-card-thumb">
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail( 'anuncero-grid-card' ); ?>
													</a>
												</div>
											<?php else : ?>
												<div class="post-card-thumb">
													<a href="<?php the_permalink(); ?>">
														<img src="https://picsum.photos/seed/<?php echo get_the_ID(); ?>/600/400" alt="Placeholder">
													</a>
												</div>
											<?php endif; ?>
											<div class="post-card-content">
												<h4 class="post-title" style="font-size: 1.1rem;">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h4>
											</div>
										</article>
										<?php
									}
									wp_reset_postdata();
								}
							}
							?>
						</div>
					</div>

				</article>
				<?php

			endwhile; // End of the loop.
			?>
		</div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
