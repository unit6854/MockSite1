<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', function () {

    load_theme_textdomain( 'precision-power-wash', PPW_DIR . '/languages' );

    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => [ 'site-title', 'site-description' ],
    ] );

    add_editor_style( PPW_ASSETS . '/css/theme.css' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'precision-power-wash' ),
        'footer'  => __( 'Footer Navigation',  'precision-power-wash' ),
    ] );
} );

// Remove unnecessary default WP bloat
add_action( 'init', function () {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
} );

// Clean up block editor from dashboard — only allow relevant blocks
add_filter( 'allowed_block_types_all', function ( $allowed_blocks, $block_editor_context ) {
    return true; // Allow all; restrict per post type if needed later
}, 10, 2 );
