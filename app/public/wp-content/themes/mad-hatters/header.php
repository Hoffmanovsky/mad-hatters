<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <main class="wrapper">

        <header class="header">
            <div class="container">
                <div class="fixed-wrapper">
                    <div class="logo">
                        <div class="decoration">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.3">
                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#23242C" />
                                    <circle cx="1.5" cy="7.5" r="1.5" fill="#23242C" />
                                    <circle cx="7.5" cy="1.5" r="1.5" fill="#23242C" />
                                    <circle cx="7.5" cy="7.5" r="1.5" fill="#23242C" />
                                </g>
                            </svg>
                        </div>
                        <h1 class="heading">
                            mad hatters
                        </h1>
                    </div>
                    <nav class="nav">
                        <button class="hamburger">
                            <span class="burger-menu"></span>
                        </button>
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenuLocation',
                                'link_class' => 'link'
                            ));
                        ?>


                        <!-- <ul>
                            <li><a href="#" class="link"><span>For Men</span></a></li>
                            <li><a href="#" class="link"><span>For Woman</span></a></li>
                            <li><a href="#" class="link"><span>For Kids</span></a></li>
                            <li><a href="#" class="link"><span>For Anyone</span></a></li>
                            <li><a href="#" class="link"><span>For No-one</span></a></li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </header>