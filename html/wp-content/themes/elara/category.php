<?php
/**
 * Category template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elara
 */
get_header(); ?>


<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2><?php single_cat_title(); ?></h2>
											<p><?php the_archive_description(); ?></p>
										</header>
										<div class="row">
											<?php get_template_part( 'parts/feed' ); ?>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>

<?php get_footer();