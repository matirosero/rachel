<?php

// if ( ! function_exists( 'sydney_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see sydney_custom_header_setup().
 */
function sydney_header_style() {
	if ( get_header_image() && ( get_theme_mod('front_header_type') == 'image' && is_front_page() || get_theme_mod('site_header_type', 'image') == 'image' && !is_front_page() ) ) {
	?>
		<?php
		if ( has_post_thumbnail() ) : 
			$page_object = get_queried_object();
			$page_id = get_queried_object_id();
			$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
		    $header_image = $image_array[0];
		else :
		 	$header_image = get_header_image();
		endif;
		?>
		<style type="text/css">
			.header-image {
				background-image: url(<?php echo $header_image; ?>);
				display: block;
			}
			@media only screen and (max-width: 1024px) {
				.header-inner {
					display: block;
				}
				.header-image {
					background-image: none;
					height: auto !important;
				}
			}
		</style>
	<?php
	}
}
// endif; // sydney_header_style