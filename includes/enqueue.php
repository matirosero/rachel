<?php

/**
 * Enqueue scripts and styles.
 */
function rachel_deregister_scripts() {

    //Deregister styles

	// Bootstrap
	// wp_dequeue_style( 'tt-bootstrap.css' );
	// wp_deregister_style( 'tt-bootstrap.css' );

	// // icomoon
	// wp_dequeue_style( 'tt-icomoon.css' );
	// wp_deregister_style( 'tt-icomoon.css' );

	// // tt-main-style
	// wp_dequeue_style( 'tt-main-style' );
	// wp_deregister_style( 'tt-main-style' );

	// // tt-theme-style
	// wp_dequeue_style( 'tt-theme-style' );
	// wp_deregister_style( 'tt-theme-style' );

}
add_action('wp_print_styles', 'rachel_deregister_scripts', 99999);



add_action( 'wp_enqueue_scripts', 'sydney_parent_theme_enqueue_styles' );

function sydney_parent_theme_enqueue_styles() {
    // wp_enqueue_style( 'sydney-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'rachel-style',
        get_stylesheet_directory_uri() . '/assets/dist/css/style.css'
    );

}
