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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <div class="waiter">
        <figure class="waiter__imgWrapper">
            <span class="waiter__firstBorder"></span>
            <span class="waiter__secondBorder"></span>
            <img width="199" height="150" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-sygnet.svg' ?>" alt="wojciech-pilat-logo" />
        </figure>
    </div>
    <div class="hero">
        <header class="hero__header flex">
            <a class="hero__header__logoWrapper" href="<?php echo home_url(); ?>">
                <span class="waiter__firstBorder"></span>
                <span class="waiter__secondBorder"></span>
                <img width="199" height="150" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/logo-sygnet.svg' ?>" alt="wojciech-pilat" />
            </a>
            <div class="hero__header__menu">
                <button class="mobileMenuBtn d-mobile" onclick="openMenu()">
                    <img width="40" height="40" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.svg' ?>" alt="menu" />
                </button>
                <menu class="mobileMenu d-mobile">
                    <button class="mobileMenu__close" onclick="closeMenu()">
                        <img width="20" height="20" class="lozad img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.svg' ?>" alt="zamknij" />
                    </button>
                    <ul class="mobileMenu__list">
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link">
                                Strona główna
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link">
                                O mnie
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--header">
                            Zakres usług
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Prawo karne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Rozwody
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Prawo rodzinne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Prawo cywilne
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Prawo spadkowe
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Odszkodowanie
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item">
                            <a class="mobileMenu__list__link" href="">
                                Obsługa prawna firm
                            </a>
                        </li>
                        <li class="mobileMenu__list__item mobileMenu__list__item--bold">
                            <a class="mobileMenu__list__link">
                                Kontakt
                            </a>
                        </li>
                    </ul>
                </menu>
                <ul class="hero__header__menu__list flex d-desktop">
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href=".">
                            Strona główna
                        </a>
                    </li>
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href=".">
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
                                <a>
                                    Prawno karne
                                </a>
                            </li>
                            <li>
                                <a>
                                    Rozwody
                                </a>
                            </li>
                            <li>
                                <a>
                                    Prawno rodzinne
                                </a>
                            </li>
                            <li>
                                <a>
                                    Prawno cywilne
                                </a>
                            </li>
                            <li>
                                <a>
                                    Prawno spadkowe
                                </a>
                            </li>
                            <li>
                                <a>
                                    Odszkodowania
                                </a>
                            </li>
                            <li>
                                <a>
                                    Obsługa prawna firm
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hero__header__menu__item">
                        <a class="hero__header__menu__item__link" href=".">
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>
        </header>
