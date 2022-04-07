<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VisLegis
 */

?>

<footer class="section section--footer w flex">
    <a class="footer__logo" href="<?php echo home_url(); ?>">
        <img width="380" height="187" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/wojciech-pilat-footer.webp' ?>" alt="kancelaria-adwokacka-biskupiec" />
    </a>
    <div class="footer__cols flex">
        <div class="footer__col">
            <h6 class="footer__col__header">
                Mapa strony
            </h6>
            <a class="footer__col__link" href="<?php echo home_url(); ?>">
                Strona główna
            </a>
            <a class="footer__col__link" href="<?php echo home_url() . '#omnie'; ?>">
                O mnie
            </a>
            <a class="footer__col__link" href="<?php echo home_url() . '#oferta'; ?>">
                Oferta
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                Kontakt
            </a>
        </div>
        <div class="footer__col">
            <h6 class="footer__col__header">
                Zakres usług
            </h6>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Prawo karne')->ID); ?>">
                Prawo karne
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Rozwody')->ID); ?>">
                Rozwody
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Prawo rodzinne')->ID); ?>">
                Prawo rodzinne
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Prawo cywilne')->ID); ?>">
                Prawo cywilne
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Prawo spadkowe')->ID); ?>">
                Prawo spadkowe
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Odszkodowania')->ID); ?>">
                Odszkodowania
            </a>
            <a class="footer__col__link" href="<?php echo get_page_link(get_page_by_title('Obsługa prawna firm')->ID); ?>">
                Obsługa prawna firm
            </a>
        </div>
        <div class="footer__col">
            <h6 class="footer__col__header">
                Dane kontaktowe
            </h6>
            <span class="footer__col__link">
                <b>
                    tel:
                </b>
                507 974 750 - Wojciech Piłat
            </span>
            <span class="footer__col__link">
                <b>
                    mail:
                </b>
                kontakt@adwokatpilat.pl
            </span>
        </div>
        <div class="footer__col">
            <h6 class="footer__col__header">
                Dane Kancelarii
            </h6>
            <span class="footer__col__link bold">
                Kancelaria Adwokacja Wojciech Piłat
            </span>
            <span class="footer__col__link">
                ul. Pionioerów 22/1 (wejście od ul. Szpitalnej)
            </span>
            <span class="footer__col__link">
                11-300 Biskupiec
            </span>
            <span class="footer__col__link">
                NIP: 8451899018
            </span>
            <span class="footer__col__link bold footer--marginTop">
                Numer rachunku bankowego
            </span>
            <span class="footer__col__link">
                23 3292 1000 1222 2884 2383 2388 (ING Bank Śląski S.A.)
            </span>
            <span class="footer__col__link bold footer--marginTop">
                Filia w Olsztynie
            </span>
            <span class="footer__col__link">
                ul. Kętrzyńskiego 4/4
            </span>
            <span class="footer__col__link">
                10-507 Olsztyn
            </span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div> <!-- END CONTAINER -->
</body>
</html>
