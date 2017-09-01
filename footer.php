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
			<span class="footer-credits"><?php printf( __( 'Desarrollo: %1$s.', 'sydney' ), '<a href="https://matilderosero.com" rel="developer" target="_blank">Matilde Rosero</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Fotografías: %1$s.', 'sydney' ), '<a href="https://www.facebook.com/EduOakPhotography" rel="photographer" target="_blank">EduOak Photography</a>' ); ?></span>
			<span class="sep"> | </span>
			<?php printf( __( 'Retratos: %1$s.', 'sydney' ), '<a href="https://www.behance.net/moralourdee9a7" rel="photographer" target="_blank">Lourdes Mora</a>' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
