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
                    <?php echo get_the_title(); ?>
                </h2>
                <div class="page__text">
                    <?php
                        echo get_field('opis');
                    ?>
                </div>
                <h3 class="section__subheader">
                    <?php
                        echo get_field('naglowek');
                    ?>
                </h3>
                <ul class="offerContent">
                    <?php
                        $offer_points = explode(';', strip_tags(get_field('uslugi')));
                        foreach($offer_points as $point) {
                            ?>
                            <li class="offerContent__item">
                                <?php
                                    echo $point;
                                ?>
                            </li>
                                <?php
                        }
                    ?>
                </ul>
            </div>
            <figure class="imgWrapper">
                <img class="img" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo get_the_title(); ?>" />
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

                <h3 class="contentAdress">ul. Pionierów 22/1</h3>
                <h3 class="contentAdress">11-300 Biskupiec</h3>
            </div>
        </div>
    </div>
    <div id="map">

    </div>

<?php
get_footer();
