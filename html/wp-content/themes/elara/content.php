<?php
/**
 * Main template for displaying a post within a feed
 *
 * @package elara
 */
$elara_class = elara_set_feed_post_class(); ?>


<div class="col-4 col-6-medium col-12-small">
	<section class="box">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry matcheight ' . esc_attr( $elara_class ) ); ?>>

		<?php elara_entry_thumbnail( 'elara-archive', true ); ?>

			<p>
				<?php elara_entry_categories(); ?>
				<?php elara_entry_separator( 'categories-date' ); ?>
				<?php elara_entry_date(); ?>
			</p>
			<p>
				<?php elara_entry_author(); ?>
				<?php elara_entry_separator( 'author-comments' ); ?>
				<?php elara_entry_comments_link(); ?>
			</p>

		<?php elara_entry_title(); ?>
		<?php elara_feed_entry_excerpt(); ?>

		<?php
			/**
			 * Get video modal for video post format
			 */
			get_template_part( 'parts/entry', 'video-modal' );
		?>
		<footer>
		<ul class="actions">
		<li><a href="<?php esc_url( get_permalink() ); ?>" class="button alt">Find out more</a></li>
		</ul>
		</footer>
	</article><!-- #post-<?php the_ID(); ?> -->
</section>
</div>
