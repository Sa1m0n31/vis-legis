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
            Kancelaria Adwokacka Wojciech Piłat
        </h1>
        <p class="hero__main__text">
            Stoimy zawsze po Twojej stronie. Wykorzystujemy swoje doświadczenie i kwalifikacje, aby rzetelnie i profesjonalnie rozwiązać Twoją sprawę.
        </p>
        <a class="hero__main__btn center" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
            Umów się na konsultację
        </a>
    </main>
    <figure class="hero__backgroundWrapper">
        <img width="2800" height="1867" class="lozad hero__background" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/kancelaria-prawnicza-wojciech-pilat.png' ?>" alt="kancelaria-prawnicza-wojeciech-pilat" />
    </figure>
</div>

    <section class="section section--1 w flex" id="omnie">
        <figure class="imgWrapper" data-aos="fade-right">
            <img width="400" height="482" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/wojciech-pilat.webp' ?>" alt="wojciech-pilat" />
            <span class="span"></span>
        </figure>
        <article class="section__article">
            <h2 class="section__header">
                O mnie
            </h2>
            <div data-aos="fade-left">
                <p class="section__text">
                    Absolwent Wydziału Prawa i Administracji Uniwersytetu Warmińsko-Mazurskiego w Olsztynie. W latach 2012-2014 odbywał aplikację adwokacką pod patronatem adw. Ryszarda Afeltowicza. Od 2015 roku wpisany na listę adwokatów Izby Adwokackiej w Olsztynie.
                </p>
                <p class="section__text">
                    Specjalizuje się w sprawach z zakresu prawa karnego i rodzinnego. Prowadzi również sprawy cywilne i spadkowe.
                </p>
                <p class="section__text">
                    Prywatnie pasjonuje się sportem, w szczególności siatkówką.
                </p>
                <span class="section__caption">
                Wojciech Piłat
            </span>
                <span class="section__caption">
                Adwokat Biskupiec
            </span>
            </div>
        </article>
    </section>

    <section class="section section--2 w" id="oferta">
        <h2 class="section__header">
            Zakres usług kancelarii
        </h2>
        <section class="offerBox__row flex">
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
        </section>
        <section class="offerBox__row flex">
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
            <section class="offerBox flex" data-aos="fade-up">
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
            </section>
        </section>
    </section>

    <section class="section section--3 w">
        <h2 class="section__header">
            Najczęstsze pytania
        </h2>
        <h3 class="faq__mobileHeader d-mobile">
            (naciśnij, by rozwinąć)
        </h3>
        <div class="faq w flex" data-aos="fade-up">
            <figure class="faq__imageWrapper">
                <img width="561" height="413" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/wojciech-pilat-faq.webp'; ?>" alt="kancelaria-adwokacka-biskupiec" />
            </figure>
            <div class="faq__content scroller">
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(0)">
                            Jak umówić się na spotkanie?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Na spotkanie najlepiej umówić się telefonicznie, ale jest to również możliwe poprzez kontakt
                        mailowy lub formularz kontaktowy znajdujący się na stronie internetowej. W przypadku kontaktu
                        mailowego czy przy użyciu formularza, prosimy o podanie swoich danych wraz z krótkim
                        przedstawieniem sprawy.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(1)">
                            Co ze sobą zabrać na spotkanie?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Zakres niezbędnych dokumentów zależy od konkretnego przypadku. Na pewno trzeba zabrać ze
                        sobą wszystkie dokumenty, którą mogą mieć związek ze sprawą. W przypadku wątpliwości lepiej
                        zabrać ze sobą więcej dokumentów niż mniej. Brakujące dokumenty zawsze można dostarczyć
                        do kancelarii w późniejszym terminie lub przesłać ich skan na adres e-mailowy kancelarii.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(2)">
                            Czego będzie ode mnie oczekiwał adwokat?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Przede wszystkim pełnego zaufania i szczerości. Adwokat musi mieć wiedzę o wszystkich faktach
                        i okolicznościach konkretnej sprawy. Dzięki temu nie zostanie zaskoczony faktami i będzie mógł
                        przyjąć najkorzystniejszą strategię. Jednocześnie adwokat będzie oczekiwał współpracy ze strony
                        Klienta, czyli stosowania się do rad i zaleceń adwokata
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(3)">
                            Czy kancelaria prowadzi sprawy również poza Biskupcem?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Oczywiście, kancelaria prowadzi sprawy na terenie całej Polski.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(4)">
                            Czy w kancelarii można płacić kartą?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Tak, jest taka możliwość.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(5)">
                            Ile kosztują usługi kancelarii?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Wszystko zależy od konkretnej sprawy. Przy wycenie usług brany jest pod uwagę stopień
                        skomplikowania sprawy oraz nakład koniecznej pracy.
                        W przypadku obsługi prawnej przedsiębiorców możliwe jest rozliczenie ryczałtowe lub godzinowe.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(6)">
                            Czy jest możliwość zlecenia sporządzenia pojedynczego pisma?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Tak, nie trzeba zlecać prowadzenia całej sprawy. Przykładowo można zlecić napisanie tylko
                        pozwu lub apelacji.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(7)">
                            Czy moje dane i udzielane informacje są bezpieczne?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Cały proces obsługi Klienta, w tym przekazywane informacje, objęte są tajemnicą adwokacką.
                        Klient może liczyć na pełną dyskrecję oraz zaufanie.
                    </p>
                </div>
                <div class="faq__content__block">
                    <div class="faq__content__questionWrapper flex">
                        <button class="faq__content__question" onclick="faq(8)">
                            Czy adwokat będzie na każdej rozprawie?
                        </button>
                        <img width="10" height="5" class="lozad faq__content__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg'; ?>" alt="rozwin" />
                    </div>
                    <p class="faq__content__answer">
                        Tak, udział w rozprawie jest jedną z głównych czynności prowadzenia sprawy Klienta. Regułą jest
                        udział adwokata w każdej rozprawie. Mogą jednak zdarzyć się sytuacje szczególne (np. choroba,
                        urlop, kolizja rozpraw), gdy na rozprawie pojawi się zastępca adwokata (inny adwokat, radca
                        prawny, aplikant). Zawsze jednak jest to osoba zapoznana ze sprawą Klienta i w 100%
                        zaangażowana w sprawę.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--3 w">
        <h2 class="section__header">
            Skontaktuj się
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
    <section class="section section--3">
        <section class="section section--3--1 w center" id="sectionContact">
            <figure class="imgWrapper" data-aos="fade-right" data-aos-anchor="#sectionContact">
                <img width="563" height="390" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/kontakt.webp'; ?>" alt="wojciech-pilat" />
                <span class="span"></span>
            </figure>
            <article class="section__article" data-aos="fade-left" data-aos-anchor="#sectionContact">
                <p class="section__text">
                    Adres: al. Niepodległości 4A/41, 11-300 Biskupiec
                </p>
                <h3 class="section__contact__header">
                    Telefon kontaktowy
                </h3>
                <h4 class="section__contact__data">
                    +48 502 245 554
                </h4>
                <a class="section__contact__btn center" href="tel:+48502245554">
                    Zadzwoń
                </a>
                <h5 class="section__contact__header">
                    Adres e-mail
                </h5>
                <h6 class="section__contact__data">
                    kontakt@adwokatpilat.pl
                </h6>
                <a class="section__contact__btn center" href="mailto:kontakt@adwokatpilat.pl">
                    Wyślij maila
                </a>
            </article>
        </section>
    </section>

<?php
get_footer();
?>