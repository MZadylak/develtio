<?php
/**
 * Template Name: Strona główna - szablon
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="transparent-bg">
    <h1>Ubezpieczenie majątkowe</h1>
    <h2 class="desc">Skontaktuj się z nami i skorzystaj ze specjalnej oferty!</h2>
    </div>
    <div class="contact-form">
        <h3>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h3>
        <input type="text" class="name" placeholder="Imię i nazwisko">
        <input type="email" class="mail" placeholder="Adres e-mail">
        <input type="text" class="phone" placeholder="Nr telefonu">
        <div class="postalcode">
            <input type="text" class="city" placeholder="Miejscowość">
            <input type="text" class="code" placeholder="Kod pocztowy">
        </div>
        <div class="check-it">
            <input type="checkbox" class="checkbox">
            <label for="checkbox" class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, explicabo at tenetur rem voluptatem officiis, eaque ratione eius consequuntur adipisci alias quod illo vel velit qui doloremque cum aliquid aperiam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil dolor quis repellendus qui ipsa tempore perspiciatis dolorum labore culpa!</label>
        </div>
        <button>Wyślij</button>
    </div>
</div>

<?php
get_footer();
