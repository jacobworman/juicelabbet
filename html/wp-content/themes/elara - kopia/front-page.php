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


				<!-- my -->
				<div class="divbox">
	<section style="margin-bottom:55px;">
	<h1 style="margin:0 auto;padding:0;text-align:center;color: #5a5555;font-family: QuattroSans,Arial,sans-serif;">Vad söker du? <i class="far fa-smile fa-2x"></i></h1>
	</section>
	<div class="row1">
	  <div class="column1" style="border-right:1px solid #aeb3ba;border-bottom:1px solid #c6cbd3;">
	    <a href="/apple">
	    	<i class="fas fa-tree-alt fa-5x" style="color:#8db600;"></i>
	      <h2 class="block-icon"><br />Äpple</h2>
	  </a>
	  </div>
	  <div class="column1" style="border-left:1px solid #aeb3ba;border-bottom:1px solid #c6cbd3;">
	     <a href="/morot">
	     	<i class="fab fa-cuttlefish fa-5x" style="color:#ed9121;"></i>
	      <h2 class="block-icon"><br />Morot</h2>

	  </a>
	</div>
	<div class="row1">
	  <div class="column1" style="border-right:1px solid #aeb3ba;border-top:1px solid #c6cbd3;">
	    <a href="/apelsin">
	    	<i class="fas fa-circle fa-5x" style="color:#FFA500;"></i>
	      <h2 class="block-icon"><br />Apelsin</h2>

	  </a>
	  </div>
	  <div class="column1" style="border-left:1px solid #aeb3ba;border-top:1px solid #c6cbd3;">
	    <a href="/blandat">
	    	<i class="fas fa-blender fa-5x" style="color:#4286f4;"></i>
	      <h2 class="block-icon"><br />Blandat</h2>

	  </a>
	  </div>
	</div>
</div>

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


<?php
	/**
	 * Frontpage full width widget area
	 */
	get_sidebar( 'frontpage' );

get_footer();
