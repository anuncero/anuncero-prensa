<?php
/**
 * The main template file
 *
 * @package Anuncero_Prensa
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<div class="news-grid">
					<?php
					$post_count = 0;
					while ( have_posts() ) :
						the_post();
						$post_count++;
						$is_hero = ( $post_count === 1 && ! is_paged() );
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( $is_hero ? 'post-card post-hero' : 'post-card' ); ?>>
							
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="post-card-thumb">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( $is_hero ? 'anuncero-grid-hero' : 'anuncero-grid-card' ); ?>
									</a>
								</div>
							<?php else : ?>
								<!-- Placeholder from Picsum for visual consistency if no thumbnail -->
								<div class="post-card-thumb">
									<a href="<?php the_permalink(); ?>">
										<img src="https://picsum.photos/seed/<?php echo get_the_ID(); ?>/<?php echo $is_hero ? '1200/600' : '600/400'; ?>" alt="Placeholder">
									</a>
								</div>
							<?php endif; ?>

							<div class="post-card-content">
								<div class="post-meta">
									<?php echo get_the_date(); ?> &mdash; <?php the_category( ', ' ); ?>
								</div>
								
								<h2 class="post-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								
								<?php if ( $is_hero ) : ?>
									<div class="post-excerpt">
										<?php the_excerpt(); ?>
									</div>
								<?php endif; ?>
							</div>

						</article>
						<?php
					endwhile;
					?>
				</div><!-- .news-grid -->

				<?php
				the_posts_navigation();

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
