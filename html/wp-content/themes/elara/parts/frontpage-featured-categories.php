<?php
/**
 * Frontpage - Featured Categories
 *
 * @package elara
 */
$elara_frontpage_featured_categories_show = elara_get_option( 'elara_frontpage_featured_categories_show' );

if ( ! $elara_frontpage_featured_categories_show ) {
	return;
}

$elara_example_content                  = elara_get_option( 'elara_example_content' );
$elara_featured_categories_columns      = elara_get_option( 'elara_frontpage_featured_categories_columns' );
$elara_featured_categories_posts_number = elara_get_option( 'elara_frontpage_featured_categories_posts_number' );
/**
 * Set column class based on number of columns
 * @var string
 */
$elara_column_class = elara_set_featured_categories_class( $elara_featured_categories_columns ); ?>
<?php
		/**
		 * Loop through columns
		 */
		for ( $elara_i = 1; $elara_i <= $elara_featured_categories_columns; $elara_i++ ) :
			$elara_column_heading  = elara_get_option( 'elara_frontpage_featured_categories_col_' . $elara_i . '_heading' );
			$elara_column_category = elara_get_option( 'elara_frontpage_featured_categories_col_' . $elara_i . '_category' );

			$elara_args = array(
				'cat'            => $elara_column_category,
				'posts_per_page' => $elara_featured_categories_posts_number
			);

			$elara_query = new WP_Query( $elara_args );
	
			if ( $elara_query->have_posts() ) : ?>

									<section>
										<header class="major">
											<h2>Guide to juicer</h2>
										</header>
										<div class="row">
										<?php while ( $elara_query->have_posts() ) : $elara_query->the_post(); ?>
											<?php get_template_part( 'parts/entry', 'featured-category' ); ?>
										<?php endwhile; ?>
										</div>
									</section>

<?php wp_reset_postdata();
			endif; // $elara_query->have_posts()

		endfor; // $elara_i = 1; $elara_i <= $elara_featured_categories_columns; $elara_i++
?>
