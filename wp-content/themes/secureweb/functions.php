<?php  

function security_enqueue_child_styles() {
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css');
    wp_enqueue_script( 'owl-js',  get_stylesheet_directory_uri() . '/js/custom.js', ['jquery']);
}
add_action( 'wp_enqueue_scripts', 'security_enqueue_child_styles' );