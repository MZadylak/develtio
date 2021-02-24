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
<section>
    <div class="wrap">
        <h1>Ubezpieczenia majątkowe</h1>
        <h2>Co obejmują?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore consequuntur dicta vero autem praesentium, dignissimos adipisci. Iste, modi eveniet quia fuga rerum voluptatum omnis explicabo provident accusamus laborum debitis quod.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorum eos numquam repellat, culpa obcaecati cupiditate. Accusantium officiis rerum ea beatae sapiente earum, voluptatem autem, quaerat nulla tenetur, nemo sint! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laudantium vel nulla quasi consequuntur ea vero est, tempore facilis id aut dicta animi voluptatum quaerat sit mollitia obcaecati asperiores eveniet voluptatum quaerat sit mollitia obcaecati asperiores eveniet!</p>
        <button>Zamów ubezpieczenie</button>
    </div>
</section>

<?php
get_footer();
