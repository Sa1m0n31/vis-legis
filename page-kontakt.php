<?php
get_header('page');
?>
<section class="section section--3 section--contact w">
    <h2 class="section__header">
        Kontakt z kancelarią
    </h2>
    <div class="flex row--contact">
        <div class="offerBox flex">
            <figure class="offerBox__imgWrapper">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/information-button.svg'; ?>" alt="kancelaria-adwokacka-biskupiec" />
            </figure>
            <h3 class="offerBox__header">
                Kancelaria adwokacka Wojciech Piłat
            </h3>
            <p class="offerBox__text">
                    <span>
                        <span class="bold">NIP:</span> 8451899018
                    </span>
                <span>
                        <span class="bold">REGON:</span> REGON: 362402821
                    </span>
                <span>
                        <span class="bold d-block">Numer rachunku bankowego:</span> 66 1050 1807 1000 0092 1547 7903 (ING Bank Śląski S.A.)
                    </span>
            </p>
        </div>
        <div class="offerBox flex">
            <figure class="offerBox__imgWrapper">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/pin.svg'; ?>" alt="kancelaria-adwokacka-biskupiec" />
            </figure>
            <h3 class="offerBox__header">
                Siedziba kancelarii
            </h3>
            <p class="offerBox__text">
                    <span>
                        ul. Pionierów 22/1 (wejście od ul. Szpitalnej)
                    </span>
                <span class="d-block">
                        11-300 Biskupiec
                    </span>
                <span class="offerBox--marginTop">
                        <span class="bold d-block">
                            Filia w Olsztynie:
                        </span>
                        <span class="d-block">
                            ul. Kętrzyńskiego 4/4
                        </span>
                        <span class="d-block">
                            10-507 Olsztyn
                        </span>
                    </span>
            </p>
        </div>
        <div class="offerBox flex">
            <figure class="offerBox__imgWrapper">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact.svg'; ?>" alt="kancelaria-adwokacka-biskupiec" />
            </figure>
            <h3 class="offerBox__header">
                Dane kontaktowe
            </h3>
            <p class="offerBox__text">
                    <span>
                        Wojciech Piłat
                    </span>
                <span>
                        <span class="bold">tel</span> <?php echo get_field('telefon', 49); ?>
                    </span>
                <span>
                        <span class="bold">Sekretariat:</span> 56 564 22 11
                    </span>
                <span>
                        <span class="bold">Mail:</span> <?php echo get_field('e-mail', 49); ?>
                    </span>
            </p>
        </div>
    </div>
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
<div id="map">

</div>
<?php
    get_footer();
?>