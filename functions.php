<?php

add_action( 'wp_enqueue_scripts', 'sydney_parent_theme_enqueue_styles' );

function sydney_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'sydney-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'rachel-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'sydney-style' )
    );

}
