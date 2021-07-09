<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-work
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header">
        <div class="header__inner">
            <div class="header__left-side">
                <a class="header__logo" href="<?php echo home_url()?>">
                    <div class="header__logo-img">
                        <img src="<?php echo get_template_directory_uri() ?> . /dist/images/logo.svg" alt="logo">
                    </div>

                    <div class="header__logo-text">
<!--                        --><?php //bloginfo('name')?>
                        Lorem ipsum dolor sit.   <!-- просто як в макеті) -->
                    </div>
                </a>

                <img class="header__img" src="<?php echo get_template_directory_uri() ?> . /dist/images/bg_main.svg"
                     alt="img">
                <img class="header__img-center" src="<?php echo get_template_directory_uri() ?> . /dist/images/logo.svg"
                     alt="logo">
            </div>

            <div class="header__right-side">
                <?php wp_nav_menu([
                    'container_class' => 'menu',
                    'theme_location' => 'menu-header',
                    'menu_class' => 'menu-list'
                ]); ?>

                <div class="header__info">
                    <div class="header__title">
                        Lorem ipsum dolor, sit, amet consectetur adipisicing elit.
                    </div>

                    <div class="header__text">
                        Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Numquam quos deleniti expedita animi
                        eum
                        cum nihil sequi iste a, non nemo, ipsam illo ab itaque nesciunt, voluptate maxime alias quidem
                        dolores asperiores, facere tenetur. Atque facilis porro numquam laborum dignissimos!
                    </div>
                </div>

                <img class="header__bg-img"
                     src="<?php echo get_template_directory_uri() ?> . /dist/images/icon_large.svg" alt="logo">
                <a class="bottom-link" href="#scroll-bottom">
                    <img class="header__icon-scroll"
                         src="<?php echo get_template_directory_uri() ?> . /dist/images/arrow_bottom.svg" alt="img">
                </a>
            </div>
        </div>
    </header>