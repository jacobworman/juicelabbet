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

<section id="header2">
<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Simple Juices.</h2>
								<?php
										if ( has_nav_menu( 'header' ) ) :
											$elara_args = array(
												'theme_location'    => 'header',
												'depth'             => 2,
												'container'         => 'div',
												'container_id'      => 'main-menu',
												'container_class'   => 'navbar-collapse collapse menu-container',
												'menu_class'        => 'nav navbar-nav menu',
												'fallback_cb'       => '',
												'walker'            => new wp_bootstrap_navwalker()
											);

											wp_nav_menu( $elara_args );

										else :

											elara_default_nav();

										endif; // has_nav_menu( 'header' )
									?>
							</header>
						</section>

<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
										<a href="/taggar/ingefara">
										<i class="fas fa-circle fa-5x" style="color:#FFA500;"></i>
											</a>
										<header>
											<a href="/taggar/ingefara"><h2>Ingefära</h2></a>
										</header>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
										<a href="/apple">
										    <i class="fas fa-tree-alt fa-5x" style="color:#8db600;"></i>
										  </a>
										  <header>
											<a href="/apple"><h2>Äpple</h2></a>
										</header>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
										<a href="/morot">
									     	<i class="fab fa-cuttlefish fa-5x" style="color:#ed9121;"></i>

									  </a>
	 										 <header>
											<a href="/morot"><h2>Morot</h2></a>
										</header>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="https://instagram.com/juicelabbet.se" class="button large">Kika in vår instagram här</a></li>
								</ul>
							</footer>
						</section>
</section>
<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>Juicerecept</h2>
										</header>
										<div class="row">
											<?php get_template_part( 'parts/feed' ); ?>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>Populära juicer</h2>
										</header>
										<div class="row">
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="https://juicelabbet.se/blandat/qala-juice/" class="image featured"><img src="https://juicelabbet.se/wp-content/uploads/2018/06/20180618_150658-440x360.jpg" alt="" /></a>
													<header>
														<h3>Qala juice</h3>
													</header>
													<p>Super god juice gjord på ananas, hallon och banan. Den är inspirerad av Joe & the Juice Pick Me Up...</p>
													<footer>
														<ul class="actions">
															<li><a href="https://juicelabbet.se/blandat/qala-juice/" class="button icon fa-file-text">Gå till artikeln</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="https://juicelabbet.se/blandat/rodbetsjuice/" class="image featured"><img src="https://juicelabbet.se/wp-content/uploads/2018/06/rodbetsjuice_vid_fibromyalgi_580x416-440x360.jpg" alt="" /></a>
													<header>
														<h3>Rödbetsjuice</h3>
													</header>
													<p>Inspirerad av Lovisebergs råsaft rödbetsjuice. Om du vill ha en riktig bra rödbetsjuice rekommenderar jag den här juicen…</p>
													<footer>
														<ul class="actions">
															<li><a href="https://juicelabbet.se/blandat/rodbetsjuice/" class="button icon fa-file-text">Gå till artikeln</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>



<?php
	/**
	 * Frontpage full width widget area
	 */

get_footer();
