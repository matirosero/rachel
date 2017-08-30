<?php

// Eclude from updates
function rachel_hidden_theme_12345( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.

	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

add_filter( 'http_request_args', 'rachel_hidden_theme_12345', 5, 2 );


// Debug functions
include( 'includes/debug.php' );

// Enqueue and dequeue
include( 'includes/enqueue.php' );

// Function overrides
include( 'includes/overrides.php' );

// Function overrides
include( 'includes/tweaks.php' );