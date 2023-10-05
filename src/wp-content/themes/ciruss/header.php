<!DOCTYPE html <?php language_attributes(); ?>>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="format-detection" content="telephone=no" />  
        <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-16x16.png">
        <link rel="manifest" 
        href="<?php echo get_template_directory_uri() ?>/assets/favicons/site.webmanifest">  
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-Light.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-Regular.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-Medium.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-SemiBold.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-Bold.woff2" as="font" type="truetype" crossorigin="anonymous">
        <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/font/Montserrat-ExtraBold.woff2" as="font" type="truetype" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <header>       
            <?php $logo = get_field( 'logo', 'options' ); ?>
            <div class="container-fluid">
                <div class="container-center">
                    <div class="logo">
                        <a href="<?php echo esc_attr( site_url() ); ?>">
                            <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                                alt="<?php echo esc_attr( $logo['title'] ); ?>">
                        </a>
                    </div>
                    <nav class="menu">
                        <div class="nav-top">
                            <div class="logo-menu">
                                <a href="<?php echo esc_attr( site_url() ); ?>">
                                    <img src="<?php echo esc_attr( $logo['url'] ); ?>"
                                    alt="<?php echo esc_attr( $logo['title'] ); ?>">
                                </a>
                            </div>
                            <div class="close">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-white.svg" alt="close">
                            </div>
                        </div>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'menu_class' => 'menu-list',
                                )
                            );
                        ?>
                    </nav>
                    <div class="toggle-menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/toggle-menu.svg" alt="toggle-menu">
                    </div>
                    <div class="overflow"></div>
                </div>
            </div>
        </header>   

