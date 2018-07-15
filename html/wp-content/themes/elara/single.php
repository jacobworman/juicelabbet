<?php
/**
 * The template for displaying pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elara
 */
get_header();
$elara_posts_sidebar_position   = elara_get_option( 'elara_posts_sidebar_position' );
$elara_posts_meta_show           = elara_get_option( 'elara_posts_meta_show' );
$elara_posts_featured_image_show = elara_get_option( 'elara_posts_featured_image_show' );
$elara_posts_sidebar             = elara_get_option( 'elara_posts_sidebar' );
$elara_posts_tags_show           = elara_get_option( 'elara_posts_tags_show' );

if ( $elara_posts_sidebar ) {
	$elara_row_class = 'post-sidebar-on';
} else {
	$elara_row_class = 'post-sidebar-off';
}
?>

