<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brazos_Abiertos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="footer-sidebars">
			<div class="footer-item">
				<?php if(is_active_sidebar('footer-1')): ?>
			    <?php dynamic_sidebar('footer-1');?>
			    <?php endif;?>
			</div>

			<div class="footer-item-2">
				<?php if(is_active_sidebar('footer-2')): ?>
			    <?php dynamic_sidebar('footer-2');?>
			    <?php endif;?>
			</div>

		</section>

		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brazosabiertos' ) ); ?>"><?php printf( __(esc_html__( 'Website Powered by %s', 'brazosabiertos' ), 'WordPress' ),'brazosabiertos'); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'brazosabiertos' ), 'brazosabiertos', '<a href="http://informaticomanchay.com" rel="designer">Joseph Esteban Carrasco</a>' ); ?>
		</div>--><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>
<script>
	$(function(){
		$('#primary-menu').eq(0).slicknav();
	});
</script>
</body>
</html>
