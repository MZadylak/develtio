<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<footer>
			<div class="container">

				<div class="row">

					<div class="col-lg-3 about col-sm-6 col-xs-12">
						<h4>O nas</h4>
						<ul>
							<li>Strona główna</li>
							<li>O nas</li>
							<li>Dołącz do nas</li>
							<li>Zostań Agentem</li>
							<li>Kariera</li>
						</ul>
					</div>
					
					<div class="col-lg-3 safety col-sm-6 col-xs-12">
						<h4>Ubezpieczenia</h4>
						<ul>
							<li>Ubezpieczenia mienia, nieruchomości</li>
							<li>Ubezpieczenia osobowe</li>
							<li>Ubezpieczenia rolne</li>
							<li>Ubezpieczenie OC</li>
							<li>Zobacz pełną ofertę</li>
						</ul>
					</div>
					<div class="col-lg-3 help col-sm-6 col-xs-12">
						<h4>Pomoc</h4>
						<ul>
							<li>Oddziały/Kontakt</li>
							<li>Towarzystwo ubezpieczeniowe</li>
							<li>Przydatne materiały</li>
							<li>Informacje Administracyjne</li>
							<li>Polityka cookies</li>
					</div>
					<div class="col-lg-3 contact col-sm-6 col-xs-12">
						<h4>Infolinia</h4>
						<a href="tel:+48223111234"><span>+48 22 311 1234</span></a>
					</div>
				</div>
			</div>
		</footer>	

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

