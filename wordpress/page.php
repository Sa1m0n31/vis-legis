<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VisLegis
 */

get_header('page');
?>

    <section class="section section--3 section--contact section--page w">
        <div class="flex">
            <div class="page--left">
                <h2 class="section__header">
                    Obsługa prawna firm
                </h2>
                <p class="page__text">
                    Prawem karnym określa się zbiór przepisów, które jasno i wprost definiują czyny zabronione - w skrócie mówią nam to, czego nie wolno robić i jaka ewentualna kara nas czeka, gdy popełnimy czyn zabroniony. Oferujemy usługi z zakresu m.in. doradztwa i obrony. Przyjmujemy właściwe strategie obrony i pomagamy wyjść z konkretnych sytuacji w korzystny dla Klienta sposób.
                </p>
                <h3 class="section__subheader">
                    Zakres usług w zakresie obsługi prawnej firm
                </h3>
                <ul class="offerContent">
                    <li class="offerContent__item">
                        doradztwo prawne
                    </li>
                    <li class="offerContent__item">
                        stała obsługa prawna przedsiębiorców
                    </li>
                    <li class="offerContent__item">
                        doradztwo prawne
                    </li>
                    <li class="offerContent__item">
                        doradztwo prawne
                    </li>
                    <li class="offerContent__item">
                        doradztwo prawne
                    </li>
                    <li class="offerContent__item">
                        doradztwo prawne
                    </li>
                </ul>
            </div>
            <figure class="imgWrapper">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/wojciech-pilat.webp'; ?>" alt="wojciech-pilat" />
                <span class="span"></span>
            </figure>
        </div>
        <h2 class="section__header section__header--page">
            Skontaktuj się
        </h2>
    </section>
    <div class="mapContents">
        <div id="contentWindow">
            <img class="contentImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-sygnet.svg'; ?>" alt="wojciech-pilat" />
            <div class="contentText">
                <h3 class="contentAdress bold">Kancelaria Adwokacka</h3>
                <h3 class="contentAdress bold contentAdress--marginBottom">Wojciech Piłat</h3>

                <h3 class="contentAdress">ul. Pionioerów 22/1</h3>
                <h3 class="contentAdress">11-300 Biskupiec</h3>
            </div>
        </div>
    </div>
    <div id="map">

    </div>

<?php
get_footer();
