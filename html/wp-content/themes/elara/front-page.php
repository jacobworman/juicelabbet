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
								<h2>Här är våra favorit ämnen.</h2>
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
									<section>
										<header class="major">
											<h2>Guide to juicer</h2>
										</header>
								<!-- Blog -->
										<?php 
											/**
											 * Featured categories
											 */
											if ( is_front_page() && ! is_paged() ) :
												get_template_part( 'parts/frontpage', 'featured-categories' );
											endif;
										?>
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
