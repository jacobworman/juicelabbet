<?php
/**
 * Template for displaying a post in featured categories section
 *
 * @package elara
 */
$elara_featured_categories_columns = elara_get_option( 'elara_frontpage_featured_categories_columns' );
$elara_blog_feed_sidebar_show      = elara_get_option( 'elara_blog_feed_sidebar_show' ); ?>

<div class="col-6 col-12-small">
		<section class="box">
			<?php elara_entry_thumbnail( 'elara-archive', true ); ?>
			<header>
			<h3><?php elara_entry_title(); ?></h3>
			</header>
			<p><?php echo wp_trim_words( esc_html( get_the_excerpt() ), 9, '&hellip;' ); ?></p>
			<footer>
				<ul class="actions">
					<li><a href="<?=get_permalink() ?>" class="button icon fa-file-text">Gå till artikeln</a></li>
				</ul>
			</footer>
		</section>
</div>
