<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elara
 */
get_header(); ?>

<div class="default-background-color">
	<main class="main" role="main">
		<div class="wrapper">
			<div class="row">
				<div class="<?php echo esc_attr( elara_set_main_class() ); ?>">
					<?php get_template_part( 'parts/feed' ); ?>
				</div><!-- <?php echo esc_attr( elara_set_main_class() ); ?> -->

				<?php elara_show_sidebar(); ?>
			</div><!-- row -->
		</div><!-- wrapper -->
	</main>
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

<?php get_footer();