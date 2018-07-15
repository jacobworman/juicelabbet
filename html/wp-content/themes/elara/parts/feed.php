<?php
/**
 * The loop / blog feed
 *
 * @package elara
 */
?>


	<?php
		/**
		 * The loop
		 *
		 * For covering all customizer options from above, take a look at elara's feed.php
		 */
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif;
	?>

<?php
	/**
	 * Posts pagination
	 */
	get_template_part( 'parts/pagination', 'archive' );
