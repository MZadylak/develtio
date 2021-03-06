<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/3dee0e509d.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container">

				<div class="nav-logo">
					<div class="container">
						<div class="row">
							<div class="col-lg-11">
								<a href ="#">
									<p><span>twoje</span><span>finanse</span></p>
								<!--<img class="logo-hero" src="<?php echo get_template_directory_uri(); ?>/img/logo-hero.png" alt="Logo - TwojeFinanse - Ubezpieczenia">-->
									<img class="logo-top-1" src="<?php echo get_template_directory_uri(); ?>/img/logo-top-1.png" alt="Logo - TwojeFinanse - Ubezpieczenia">
									<img class="logo-top-2" src="<?php echo get_template_directory_uri(); ?>/img/logo-top-2.png" alt="Logo - TwojeFinanse - Ubezpieczenia">
								<!--<img class="logo-bottom" src="<?php echo get_template_directory_uri(); ?>/img/logo-bottom.png" alt="Logo - TwojeFinanse - Ubezpieczenia">-->
									<p>ubezpieczenia</p>

								</a>
							</div>
						</div>
					</div>
				</div>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<i class="fas fa-bars menu-mobile"></i>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				<!--
                <i class="fas fa-bars menu-mobile">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown toggle-menu',
						'menu_class'      => 'mobile-menu',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				</i>-->

		
			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

<script>
	function changeMenu() {
	const navbarToggler = document.querySelector('.navbar-toggler');
	const menuMobile = document.querySelector('.menu-mobile');

	navbarToggler.addEventListener('click', () => {
		if(navbarToggler.classList.contains('collapsed')) {
			if(menuMobile.classList.contains('fa-bars')) {
			menuMobile.classList.remove('fa-bars');
			menuMobile.classList.add('fa-times');
			}
		} else {
			menuMobile.classList.remove('fa-times');
			menuMobile.classList.add('fa-bars');
		}
	});
}

changeMenu();
</script>