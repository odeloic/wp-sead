<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <header class="header">
        <!-- site logo -->
        <div class="site-logo">
            <a href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sead.png" alt="SEAD Logo" class="site-logo__img">
            </a>
        </div>

        <!-- navigation -->
        <?php
          wp_nav_menu(array(
              'menu' => 'header-menu',
              'theme_location' => 'header-menu',
              'menu_class' => 'menu',
              'container' => 'nav',
              'container_class' => 'navigation',
          ));
        ?>

        <div class="search">
            <span class="search__icon"></span>
            <form class="search__form">
                <input type="search" class="search__form__input">
                <input type="submit" value="Search">
            </form>
        </div>
        <div class="partner-banner">
            <h2 class="partner-banner__heading">In partnership with</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Rwanda-Development-Board-Logo.png" alt="RDB Logo" class="partner-banner__logo">
        </div>
    </header>
    <main class="main">
