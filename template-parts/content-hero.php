<?php
/**
 * Template part for displaying the hero post
 *
 * @package Anuncero_Prensa
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card post-hero is-visible' ); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-card-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'anuncero-grid-hero' ); ?>
			</a>
		</div>
	<?php else : ?>
		<!-- Placeholder from Picsum for visual consistency if no thumbnail -->
		<div class="post-card-thumb">
			<a href="<?php the_permalink(); ?>">
				<img src="https://picsum.photos/seed/<?php echo get_the_ID(); ?>/1200/600" alt="Placeholder">
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
		
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>

</article>
