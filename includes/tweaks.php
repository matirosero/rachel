<?php

add_action('sydney_inside_hero', 'rachel_title_in_header');

function rachel_title_in_header() {
	if ( get_header_image() && ( get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) : ?>
		<h2 class="header-title">Header here</h2>
	<?php
	endif;
}