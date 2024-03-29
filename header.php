<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152899487-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-152899487-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">

        <div class="columns is-vcentered is-centered">
            <div class="column is-one-fifth header__Logo">
                <div class="site-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="SEAD Logo" class="site-logo__img">
                    </a>
                </div>
                <!-- site logo -->
            </div>
            <!-- column header logo -->

            <div class="column header__navigation">
                <ul class="navigation">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'header-menu',
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navigation__list',
                        'container' => false,
                        'walker' => new Menu_Walker()
                    ));
                    ?>
                    <!-- navigation -->
                </ul>
            </div>
            <!-- column header__navigation -->
            <div class="column is-one-quarter header__search">
                <div class="search">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <!-- search-box -->

        </div>
        <!-- </div> -->

        <!-- navigation -->

        <a class="menu-icon">
            <div class="menu-icon__bars">
                <span class="menu-icon__bars__top"></span>
                <span class="menu-icon__bars__middle"></span>
                <span class="menu-icon__bars__bottom"></span>
            </div>
        </a><!-- mobile-icon -->

        <nav class="mobile-navigation">
            <?php
            wp_nav_menu(array(
                'menu' => 'header-menu',
                'theme_location' => 'header-menu',
                'menu_class' => 'navigation__list',
                'container' => false,
                'walker' => new Menu_Walker()
            ));
            ?>

            <form class="search__form">
                <input type="search" class="search__form__input" placeholder="Search 'something' on website...">
                <input type="submit" value="Search" class="search__form__submit">
            </form>
        </nav>
    </header>
    <main class="main">