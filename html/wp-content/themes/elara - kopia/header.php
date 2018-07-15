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
<style>
.background{
	background-image: url("https://imgur.com/a/LdNWGoE");
}
</style>
<body <?php body_class(); ?>>

	<div class="header background" role="banner">

		<?php
			/**
			 * Header Widgets
			*//*
			 * Site identity
			 */
			get_template_part( 'parts/site', 'identity' );
			/**
			 * Main navigation
			 */
			get_template_part( 'parts/navigation', 'header' );
		?>
	</div><!-- header -->