<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VisLegis
 */

get_header();
?>
    <main class="hero__main w">
        <h1 class="hero__main__header">
            <?php echo get_field('naglowek'); ?>
        </h1>
        <p class="hero__main__text">
            <?php echo get_field('strona_glowna_-_tekst'); ?>
        </p>
        <a class="hero__main__btn center" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
            <?php echo get_field('napis_na_buttonie'); ?>
        </a>
    </main>
    <figure class="hero__backgroundWrapper">
        <img width="2800" height="1867" class="lozad hero__background" src="<?php echo get_field('strona_glowna_-_zdjecie'); ?>" alt="kancelaria-prawnicza-wojeciech-pilat" />
    </figure>
</div>

    <div class="section section--1 w flex" id="omnie">
        <figure class="imgWrapper" data-aos="fade-right">
            <img width="400" height="482" class="lozad img" src="<?php echo get_field('o_mnie_-_zdjecie'); ?>" alt="wojciech-pilat" />
            <span class="span"></span>
        </figure>
        <article class="section__article">
            <h2 class="section__header">
                <?php echo get_field('o_mnie_-_naglowek'); ?>
            </h2>
            <div data-aos="fade-left">
                <?php echo get_field('o_mnie_-_tekst'); ?>
                <div class="section__caption">
                    <?php echo get_field('o_mnie_-_podpis'); ?>
                </div>
            </div>
        </article>
    </div>

    <section class="section section--2 w" id="oferta">
        <h2 class="section__header">
            <?php echo get_field('oferta_-_naglowek'); ?>
        </h2>
        <div class="offerBox__row flex">
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/prawo-karne.svg'; ?>" alt="prawo-karne" />
                </figure>
                <h3 class="offerBox__header">
                    Prawo karne
                </h3>
                <p class="offerBox__text">
                    Doradztwo i kompleksowa obsługa prawna w procesach sądowych.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Prawo karne')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/rozwody.svg'; ?>" alt="rozwody" />
                </figure>
                <h3 class="offerBox__header">
                    Rozwody
                </h3>
                <p class="offerBox__text">
                    Sprawy z orzekaniem i bez orzekania o winie.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Rozwody')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/prawo-rodzinne.svg'; ?>" alt="prawo-rodzinne" />
                </figure>
                <h3 class="offerBox__header">
                    Prawo rodzinne
                </h3>
                <p class="offerBox__text">
                    Odpowiednie podejście i zarządzanie relacjami.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Prawo rodzinne')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/prawo-cywilne.svg'; ?>" alt="prawo-cywilne" />
                </figure>
                <h3 class="offerBox__header">
                    Prawo cywilne
                </h3>
                <p class="offerBox__text">
                    Pełne zrozumienie i doradztwo z zakresu spraw życia codziennego.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Prawo karne')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
        </div>
        <div class="offerBox__row flex">
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/prawo-spadkowe.svg'; ?>" alt="prawo-spadkowe" />
                </figure>
                <h3 class="offerBox__header">
                    Prawo spadkowe
                </h3>
                <p class="offerBox__text">
                    Rozstrzyganie spornych sytuacji w przypadku spadku i dziedziczenia.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Prawo spadkowe')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/odszkodowania.svg'; ?>" alt="odszkodowania" />
                </figure>
                <h3 class="offerBox__header">
                    Odszkodowania
                </h3>
                <p class="offerBox__text">
                    Pomoc w uzyskaniu korzystnych rekompensat w przypadku szkód.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Odszkodowania')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
            <div class="offerBox flex" data-aos="fade-up">
                <figure class="offerBox__imgWrapper">
                    <img width="80" height="80" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/obsluga-prawna-firm.svg'; ?>" alt="obsluga-prawna-firm" />
                </figure>
                <h3 class="offerBox__header">
                    Obsługa prawna firm
                </h3>
                <p class="offerBox__text">
                    Wysoki poziom obsługi i bezpieczeństwo prawne firm.
                </p>
                <a class="offerBox__btn center" href="<?php echo get_page_link(get_page_by_title('Obsługa prawna firm')->ID); ?>">
                    Więcej informacji
                </a>
            </div>
        </div>
    </section>

    <section class="section section--3 w">
        <h2 class="section__header">
            <?php echo get_field('faq_-_naglowek'); ?>
        </h2>
        <h3 class="faq__mobileHeader d-mobile">
            (naciśnij, by rozwinąć)
        </h3>
        <div class="faq w flex" data-aos="fade-up">
            <figure class="faq__imageWrapper">
                <img width="561" height="413" class="lozad img" src="<?php echo get_field('faq_-_zdjecie'); ?>" alt="kancelaria-adwokacka-biskupiec" />
            </figure>
            <div class="faq__content scroller">
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(0)">
                            <?php echo get_field('pytanie_1'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_1'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(1)">
                            <?php echo get_field('pytanie_2'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_2'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(2)">
                            <?php echo get_field('pytanie_3'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_3'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(3)">
                            <?php echo get_field('pytanie_4'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_4'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(4)">
                            <?php echo get_field('pytanie_5'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_5'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(5)">
                            <?php echo get_field('pytanie_6'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_6'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(6)">
                            <?php echo get_field('pytanie_7'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_7'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(7)">
                            <?php echo get_field('pytanie_8'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_8'); ?>
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(8)">
                            <?php echo get_field('pytanie_9'); ?>
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        <?php echo get_field('odpowiedz_9'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--3 w">
        <h2 class="section__header">
            <?php echo get_field('kontakt_-_naglowek'); ?>
        </h2>
    </section>
    <div class="mapContents">
        <div id="contentWindow">
            <img class="contentImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-sygnet.svg'; ?>" alt="wojciech-pilat" />
            <div class="contentText">
                <h3 class="contentAdress bold">Kancelaria Adwokacka</h3>
                <h3 class="contentAdress bold contentAdress--marginBottom">Wojciech Piłat</h3>

                <h3 class="contentAdress">ul. Pionierów 22/1</h3>
                <h3 class="contentAdress">11-300 Biskupiec</h3>
            </div>
        </div>
    </div>
    <div id="map" data-aos="zoom-in-up">

    </div>
    <div class="section section--3">
        <div class="section section--3--1 w center" id="sectionContact">
            <figure class="imgWrapper" data-aos="fade-right" data-aos-anchor="#sectionContact">
                <img width="563" height="390" class="lozad img" src="<?php echo get_field('kontakt_-_zdjecie'); ?>" alt="wojciech-pilat" />
                <span class="span"></span>
            </figure>
            <article class="section__article" data-aos="fade-left" data-aos-anchor="#sectionContact">
                <p class="section__text">
                    <?php echo get_field('adres'); ?>
                </p>
                <h3 class="section__contact__header">
                    Telefon kontaktowy
                </h3>
                <h4 class="section__contact__data">
                    <?php echo get_field('telefon'); ?>
                </h4>
                <a class="section__contact__btn center" href="tel:<?php echo str_replace(' ', '', get_field('telefon')); ?>">
                    Zadzwoń
                </a>
                <h5 class="section__contact__header">
                    Adres e-mail
                </h5>
                <h6 class="section__contact__data">
                    <?php echo get_field('e-mail'); ?>
                </h6>
                <a class="section__contact__btn center" href="mailto:<?php echo get_field('e-mail'); ?>">
                    Wyślij maila
                </a>
            </article>
        </div>
    </div>

<?php
get_footer();
?>