<?php
/**
 * The header for our premium theme
 *
 * @package Anuncero_Prensa
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Premium Fonts (Outfit for UI, Merriweather for Body) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Outfit:wght@400;500;700;800&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anuncero-prensa' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container site-header-inner">
			<div class="site-branding">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-link">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_anuncero.png" alt="Anuncero Logo" class="site-logo">
					</a>
					<?php
				}
				$anuncero_prensa_description = get_bloginfo( 'description', 'display' );
				if ( $anuncero_prensa_description || is_customize_preview() ) {
					?>
					<p class="site-description"><?php echo $anuncero_prensa_description; // phpcs:ignore ?></p>
					<?php
				}
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html_e( 'Menu', 'anuncero-prensa' ); ?>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'fallback_cb'    => false, // Do not render default menu if none is assigned
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->
