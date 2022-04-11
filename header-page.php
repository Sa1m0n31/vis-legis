<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VisLegis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Kancelaria Adwokacka Wojciech Piłat, Biskupiec. Prawo karne, rozwody, prawo rodzinne, prawo cywilne, odszkodowania." />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container container--page">
    <div class="hero hero--page">
        <header class="hero__header flex">
            <a class="hero__header__logoWrapper" href="<?php echo home_url(); ?>">
                <span class="waiter__firstBorder"></span>
                <span class="waiter__secondBorder"></span>
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-sygnet.svg'; ?>" alt="wojciech-pilat" />
            </a>
            <div class="hero__header__menu">
                <button class="mobileMenuBtn d-mobile" onclick="openMenu()">
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.svg'; ?>" alt="menu" />
                </button>
                <div class="mobileMenu d-mobile">
                    <button class="mobileMenu__close" onclick="closeMenu()">
                        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.svg'; ?>" alt="zamknij" />
                    </button>
                    <ul class="mobileMenu__list">
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link" href="<?php echo home_url(); ?>">
                                Strona główna
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link" href="<?php echo home_url() . '#omnie'; ?>">
                                O mnie
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--header">
                            Zakres usług
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Prawo karne')->ID); ?>">
                                Prawo karne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Rozwody')->ID); ?>">
                                Rozwody
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Prawo rodzinne')->ID); ?>">
                                Prawo rodzinne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Prawo cywilne')->ID); ?>">
                                Prawo cywilne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Prawo spadkowe')->ID); ?>">
                                Prawo spadkowe
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Odszkodowania')->ID); ?>">
                                Odszkodowanie
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Obsługa prawna firm')->ID); ?>">
                                Obsługa prawna firm
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="hero__header__menu__list flex d-desktop">
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href="<?php echo home_url(); ?>">
                            Strona główna
                        </a>
                    </li>
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href="<?php echo home_url() . '#omnie'; ?>">
                            O mnie
                        </a>
                    </li>
                    <li class="hero__header__menu__item">
                        <span class="hero__header__menu__item__link flex">
                            Zakres usług
                            <img width="10" height="5" class="lozad hero__header__menu__item__link__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/faq-arrow.svg' ?>" alt="rozwin" />
                        </span>
                        <ul class="hero__header__menu__dropdown">
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Prawo karne')->ID); ?>">
                                    Prawo karne
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Rozwody')->ID); ?>">
                                    Rozwody
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Prawo rodzinne')->ID); ?>">
                                    Prawo rodzinne
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Prawo cywilne')->ID); ?>">
                                    Prawo cywilne
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Prawo spadkowe')->ID); ?>">
                                    Prawo spadkowe
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Odszkodowania')->ID); ?>">
                                    Odszkodowania
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link(get_page_by_title('Obsługa prawna firm')->ID); ?>">
                                    Obsługa prawna firm
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>
        </header>
    </div>