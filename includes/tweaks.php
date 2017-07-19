<?php

add_action('sydney_inside_hero', 'rachel_title_in_header');

function rachel_title_in_header() {
	if ( get_header_image() && ( get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) :
		$page_object = get_queried_object();
		$page_id = get_queried_object_id();
		?>
		<h2 class="header-title"><?php echo get_the_title($page_id); ?></h2>
	<?php
	endif;
}