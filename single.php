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

				</article>
				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- .container -->
	</main><!-- #primary -->

<?php
get_footer();
