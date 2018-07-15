<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and logo, navigation, header widgets
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elara
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="ltfoA0gHVeFuY1fpeQg6OBUPA1VVbl3F0eOAP90rtW4" />
</head>
<body class="homepage is-preload">
	<div id="page-wrapper">

	<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<h1><a href="https://juicelabbet.se">Juicelabbet.se</a></h1>

					<!-- Nav -->
						<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="Sök ingredienser & juicerecept" />
							<button type="submit" class="search-submit">
								<?php elara_fontawesome_icon( 'search' ); ?>
							</button>
						</form>

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Juices. Just how pure it should be.</h2>
								<?php
										if ( has_nav_menu( 'header' ) ) :
											$elara_args = array(
												'theme_location'    => 'header',
												'depth'             => 2,
												'container'         => 'div',
												'container_id'      => 'main-menu',
												'container_class'   => 'navbar-collapse collapse menu-container',
												'menu_class'        => 'nav navbar-nav menu',
												'fallback_cb'       => '',
												'walker'            => new wp_bootstrap_navwalker()
											);

											wp_nav_menu( $elara_args );

										else :

											elara_default_nav();

										endif; // has_nav_menu( 'header' )
									?>
							</header>
						</section>
				</section>