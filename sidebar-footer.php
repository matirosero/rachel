<?php
/**
 *
 * @package Sydney
 */
?>


	<?php //Set widget areas classes based on user choice
		$widget_areas = get_theme_mod('footer_widget_areas', '3');
		if ($widget_areas == '3') {
			$cols = 'col-md-4';
		} elseif ($widget_areas == '4') {
			$cols = 'col-md-3';
		} elseif ($widget_areas == '2') {
			$cols = 'col-md-6';
		} else {
			$cols = 'col-md-12';
		}
	?>

	<div id="sidebar-footer" class="footer-widgets widget-area" role="complementary">
		<div class="container">
			<?php //if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="sidebar-column col-md-4">
					<aside id="sydney_contact_info-1" class="widget sydney_contact_info_widget">
						<h3 class="widget-title">Contáctenos</h3>
						<div class="contact-phone">
							<span><i class="fa fa-phone fa-fw"></i></span>(506) 8372-2993 | (506) 6040-3607
						</div>
						<div class="contact-email">
							<span><i class="fa fa-envelope fa-fw"></i></span><a href="mailto:info@enparalelors.com">info@enparalelors.com</a>
						</div>
						<div class="contact-facebook">
							<span><i class="fa fa-facebook fa-fw"></i></span><a href="https://www.facebook.com/enparalelors/">enparalelors</a>
						</div>
					</aside>
					<?php //dynamic_sidebar( 'footer-1'); ?>
				</div>
			<?php //endif; ?>	
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<div class="sidebar-column <?php echo $cols; ?>">
					<?php dynamic_sidebar( 'footer-2'); ?>
				</div>
			<?php endif; ?>	
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<div class="sidebar-column <?php echo $cols; ?>">
					<?php dynamic_sidebar( 'footer-3'); ?>
				</div>
			<?php endif; ?>	
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<div class="sidebar-column <?php echo $cols; ?>">
					<?php dynamic_sidebar( 'footer-4'); ?>
				</div>
			<?php endif; ?>	
		</div>	
	</div>