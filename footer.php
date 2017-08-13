<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>. Todos los derechos reservados.
			<br />
			<span class="footer-credits"><?php printf( __( 'Desarrollo: %1$s.', 'sydney' ), '<a href="https://matilderosero.com" rel="designer">Matilde Rosero</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Fotografías: %1$s.', 'sydney' ), '<a href="https://www.facebook.com/EduOakPhotography" rel="designer">EduOak Photography</a>' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
