<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elara
 */
$elara_active_sidebar = elara_count_footer_sidebars();
if ( $elara_active_sidebar > 1 ) {
	$elara_footer_class = 'columns';
} else {
	$elara_footer_class = 'center';
}
?>


<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							

							<?php get_sidebar( 'frontpage' ); ?>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Juicelabbet.se, All rights reserved.</li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

<?php wp_footer(); ?>
</body>
</html>