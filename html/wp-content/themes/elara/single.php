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
							<article class="box post">
								<?php elara_entry_thumbnail( 'elara-slider' ); ?>
								<header>
									<h2><?php elara_entry_title(); ?></h2>
									<p><?php elara_entry_categories(); ?>
											<?php elara_entry_separator( 'categories-date' ); ?>
											<?php elara_entry_date(); ?></p>
								</header>
								
								<section>
									<?php the_content(); ?>
										<?php
											wp_link_pages( array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'elara' ),
												'after'  => '</div>',
											));
										?>
								</section>
								<section>
									<footer class="entry-meta">
										<h3>Relevanta ingredienser</h3>
										<?php
											if ( $elara_posts_meta_show && $elara_posts_tags_show && has_tag() ) :
												the_tags( '<h3 class="section-title">' . esc_html__( 'Tags', 'elara' ) . '</h3><ul><li class="list-item-separators">', '</li><li class="list-item-separators">', '</li></ul>' );
											endif;
										?>
									</footer>
								</section>
								<section>
									<?php
									/**
									 * Post navigation
									 */
									get_template_part( 'parts/navigation', 'single' );

									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								endwhile; endif;
							?>
								</section>
							</article>

					</div>
				</section>
<?php get_footer();