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

<section id="main">
					<div class="container">

						<!-- Content -->
							<article class="box post" <?php post_class( 'entry-singular' ); ?>>
								<?php
									if ( $elara_posts_sidebar_position == 'bottom' || ! $elara_posts_sidebar ) :
										/**
										 * Featured image
										 */
										if ( $elara_posts_featured_image_show ) :
											elara_entry_thumbnail( 'elara-slider' );
										endif;
									endif;
								?>

					</div>
				</section>
<?php get_footer();