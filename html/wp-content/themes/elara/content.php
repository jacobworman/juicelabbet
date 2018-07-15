<?php
/**
 * Main template for displaying a post within a feed
 *
 * @package elara
 */
$elara_class = elara_set_feed_post_class(); ?>


<div class="col-4 col-6-medium col-12-small">
	<section class="box">

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
		<li><a href="<? get_permalink() ?>" class="button alt">Cool, läs mer</a></li>
		</ul>
		</footer>
</section>
</div>
