<?php
//  Turn off all error reporting
// error_reporting(0);

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require get_template_directory() . '/functions/function-assets.php';
require get_template_directory() . '/functions/function-block.php';

// set up mennu
function ciruss_menus() {
    register_nav_menus(
            array(
                'main-menu' => __( 'Menu Primary', 'ciruss' ),
                'information-menu' => __( 'Menu Information', 'ciruss' ),
            )
    );
};

add_action('init', 'ciruss_menus');

// Theme Setting
if ( function_exists( 'acf_add_options_page' ) ) {
    $parent = acf_add_options_page( array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_page( array(
        'page_title' => __( 'Header', 'flower' ),
        'menu_title' => __( 'Header', 'flower' ),
        'parent_slug' => $parent['menu_slug'],
    ));
    acf_add_options_page( array(
        'page_title' => __( 'Footer', 'flower' ),
        'menu_title' => __( 'Footer', 'flower' ),
        'parent_slug' => $parent['menu_slug'],
    ));
};

if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'after_setup_theme', 'ciruss_after_setup_themes' );
function ciruss_after_setup_themes() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
};

function show_banner($background) {
    include get_template_directory() . "/inc/block-banner-single.php";
};

function ciruss_load_link_image( $image ) {
    $html = 'data-src="'.esc_url( $image['url'] ).'" alt="'.esc_attr( $image['title'] ).'"';
    if ( is_admin() ) {
        $html .= 'src="'.esc_url( $image['url'] ).'"';
    } else {
        $html .= 'src="'.esc_url( $image['sizes']['medium'] ).'"';
    }

    return $html;
};

function ciruss_load_link_background( $background ) {
    $html = 'data-bg="'.esc_url( $background['url'] ).'"';
    if ( is_admin() ) {
        $html .= 'style="background-image: url('.esc_url( $background['url'] ).');"';
    }
    return $html;
};

function ciruss_load_source_video( $file_video ) {
    $html = 'data-src="'.esc_attr( $file_video['url'] ).'" alt="video" type="video/mp4"';
    if ( is_admin() ) {
        $html .= 'src="'.esc_url( $file_video['url'] ).'"';
    }
    return $html;
};

function ciruss_cut( $select_cut ) {
    $html = '';
    if ( $select_cut == 'top' ) {
        $html .= 'top';
    } elseif ( $select_cut == 'bottom' ) {
        $html .= 'bottom';
    } else {
        $html .= 'both';
    }

    return $html;
};

if ( ! isset( $content_width ) ) $content_width = 900;