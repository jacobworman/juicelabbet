<?php
/**
 * The front page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elara
 */
get_header();

$elara_blog_feed_sidebar_position = elara_get_option( 'elara_blog_feed_sidebar_position' ); ?>

<div class="default-background-color">
	<main class="main" role="main">
		<div class="wrapper">
				<?php
					if ( $elara_blog_feed_sidebar_position == 'bottom' ) :
						/**
						 * Banner / Slider section
						 */
						if ( is_front_page() && ! is_paged() ) :
							get_template_part( 'parts/frontpage', 'banner' );
						endif;
					endif;
				?>

				<div class="row">
					<div class="<?php echo esc_attr( elara_set_main_class() ); ?>">
						<?php
							if ( $elara_blog_feed_sidebar_position == 'top' ) :
								/**
								 * Banner / Slider section
								 */
								if ( is_front_page() && ! is_paged() ) :
									get_template_part( 'parts/frontpage', 'banner' );
								endif;
							endif;
                            /**
							 * Frontpage set to Static page
							 */
							if ( get_option( 'show_on_front' ) == 'page' ) :
								/**
								 * Get page content and frontpage sidebar
								 */
								?>
								<div class="entry-singular">
									<div class="entry-content">
										<?php the_content(); ?>
									</div>
								</div><?php
							/**
							 * Frontpage set to Latest posts
							 */
							elseif ( get_option( 'show_on_front' ) == 'posts' ) :
								/**
								 * Blog feed
								 */
								get_template_part( 'parts/feed' );
							endif; //get_option( 'show_on_front' )
							/**
							 * Featured categories
							 */
							if ( is_front_page() && ! is_paged() ) :
								get_template_part( 'parts/frontpage', 'featured-categories' );
							endif;
						?>
					</div><!-- <?php echo esc_attr( elara_set_main_class() ); ?> -->

					<?php elara_show_sidebar(); ?>
				</div><!-- row -->

				<?php
					/**
					 * Featured post
					 */
					if ( is_front_page() && ! is_paged() ) :
						get_template_part( 'parts/frontpage', 'featured' );
					endif;
				?>
		</div><!-- wrapper -->
	</main>

	<?php if ( is_active_sidebar( 'frontpage-full-1' ) ) : ?>
		<div class="widget-area widget-area-frontpage" role="complementary">
			<div class="widget-area-frontpage-1">
				<div class="wrapper">
					<?php dynamic_sidebar( 'frontpage-full-1' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div><!-- default-background-color -->

<div class="divbox">
	<section>
	<h1 style="margin:0 auto;padding:0;text-align:center;">Vad söker du? <i class="far fa-smile fa-3x"></i></h1>
	</section>
	<div id="block-main" class="block-main">
		<a href="/apple">
	  <section class="block about">
	    <div class="block-box">
	      <h2 class="block-icon"><i class="fas fa-tree-alt fa-2x" style="color:#8db600;"></i><br />Äpple</h2>
	    </div>
	  </section>
	  </a>
	  <a href="/morot">
	  <section class="block works">
	    <div class="block-box">
	      <h2 class="block-icon"><i class="ab fa-cuttlefish fa-2x" style="color:#ed9121;"></i><br />Morot</h2>
	    </div>
	  </section>
	  </a>
	  <a href="/apelsin">
	  <section class="block blog">
	    <div class="block-box">
	      <h2 class="block-icon"><i class="fas fa-circle fa-2x" style="color:#FFA500;"></i><br />Apelsin</h2>
	    </div>
	  </section>
	  </a>
	  <a href="/blandat">
	  <section class="block contact">
	    <div class="block-box">
	      <h2 class="block-icon"><i class="fas fa-blender fa-2x" style="color:#4286f4;"></i><br />Blandat</h2>
	    </div>
	  </section>
	  </a>
	</div>
</div>

<?php
	/**
	 * Frontpage full width widget area
	 */
	get_sidebar( 'frontpage' );

get_footer();
