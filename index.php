<?php
/**
 * The main template file
 *
 * @package Anuncero_Prensa
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container content-area">
			
			<div class="main-content">
				<?php if ( have_posts() ) : ?>

					<div class="news-grid">
						<?php
						$post_count = 0;
						while ( have_posts() ) :
							the_post();
							$post_count++;
							$is_hero = ( $post_count === 1 && ! is_paged() );
							
							if ( $is_hero ) {
								get_template_part( 'template-parts/content', 'hero' );
							} else {
								get_template_part( 'template-parts/content', 'card' );
							}
						endwhile;
						?>
					</div><!-- .news-grid -->

					<?php
					the_posts_navigation();

				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div><!-- .main-content -->

			<?php get_sidebar(); ?>

		</div><!-- .container .content-area -->
	</main><!-- #primary -->

<?php
get_footer();
