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
								<!-- här -->
								<div class=" <?php echo esc_attr( $elara_row_class ); ?>">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<header>
									<h2><?php elara_entry_title(); ?></h2>
									<p><?php elara_entry_author(); ?>
										<?php elara_entry_categories(); ?>
											<?php elara_entry_separator( 'categories-date' ); ?>
											<?php elara_entry_date(); ?></p>
								</header>
								 <?php
										if ( $elara_posts_sidebar_position == 'top' && $elara_posts_sidebar ) :
											if ( $elara_posts_featured_image_show ) :
												elara_entry_thumbnail( 'elara-slider' );
											endif;
										endif;
									?>
									<!-- här -->
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
							</div>
							</article>
							<?php elara_show_sidebar(); ?>
							<!-- end -->
					</div>
				</section>
<?php get_footer();