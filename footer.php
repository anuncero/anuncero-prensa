<?php
/**
 * The template for displaying the footer
 *
 * @package Anuncero_Prensa
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="container site-footer-inner">
			
			<div class="footer-widgets">
				<div class="footer-col-1">
					<div class="footer-brand" style="margin-bottom: var(--space-md);">
						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anuncero.png" alt="Anuncero Logo" class="site-logo-footer">
						</div>
						<p style="margin-top: 10px; color: var(--border-struct);">Periodismo de alta gama. B2B & Negocios.</p>
					</div>
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>
				</div>
				
				<div class="footer-col-2">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php else: ?>
						<h3 class="widget-title">Empresa</h3>
						<ul style="list-style: none; padding: 0;">
							<li><a href="#">Sobre Nosotros</a></li>
							<li><a href="#">Anúnciate con nosotros</a></li>
							<li><a href="#">Términos y Condiciones</a></li>
						</ul>
					<?php endif; ?>
				</div>

				<div class="footer-col-3">
					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-3' ); ?>
					<?php else: ?>
						<h3 class="widget-title">Contacto</h3>
						<p>info@anuncero.com</p>
					<?php endif; ?>
				</div>
			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'anuncero-prensa' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>

			<div class="site-info">
				<div class="copyright">
					&copy; <?php echo date('Y'); ?> <a href="https://anuncero.com">Anuncero</a>. Todos los derechos reservados.
				</div>
				<div class="legal-links">
					<a href="#">Términos de Servicio</a> | <a href="#">Privacidad</a>
				</div>
			</div><!-- .site-info -->

		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
