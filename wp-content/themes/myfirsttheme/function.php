<?php
function my_theme_setup() {
    // Thêm hỗ trợ cho title tag
    add_theme_support( 'title-tag' );
    // Thêm hỗ trợ cho các post thumbnail
    add_theme_support( 'post-thumbnails' );
    // Đăng ký một menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// Đăng ký và enqueue các stylesheet và script
function my_theme_scripts() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
