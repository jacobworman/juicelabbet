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

<!--
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/jquery.min.js"></script>
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/jquery.dropotron.min.js"></script>
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/browser.min.js"></script>
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/breakpoints.min.js"></script>
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/util.js"></script>
<script src="https://html5up.net/uploads/demos/dopetrope/assets/js/main.js"></script>
-->
<script>
	$('.wp-post-image').each(function(e1, html){
		$(this).removeAttr("width");
		$(this).removeAttr("height");
	});
</script>

</body>
</html>