<?php
// Configuration de base du thème
function minimal_starter_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'minimal-starter' ),
    ) );
}
add_action( 'after_setup_theme', 'minimal_starter_setup' );

// Chargement des styles
function minimal_starter_assets() {
    wp_enqueue_style( 'minimal-starter-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'minimal_starter_assets' );
