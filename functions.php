<?php

function myCustomTheme_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'lecker', get_template_directory_uri() . '/assets/fonts/delicious-handrawn/font-style.css' );
    wp_enqueue_style( 'inter-font', get_template_directory_uri() . '/assets/fonts/inter/font-style.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'myCustomTheme_stylesheets' );

function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Hauptmenü' ),
        'mobile-menu' => __( 'Mobilmenü' ),
        'secondary-menu' => __( 'Footermenü' )
        )
   );
 }
 add_action( 'init', 'register_my_menus' );