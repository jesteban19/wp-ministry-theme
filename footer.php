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

	<footer id="colophon" class="site-footer blog-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if(is_active_sidebar('footer-1')): ?>
				    <?php dynamic_sidebar('footer-1');?>
				    <?php endif;?>
				</div>

				<div class="col-md-8">
					<?php if(is_active_sidebar('footer-2')): ?>
				    <?php dynamic_sidebar('footer-2');?>
				    <?php endif;?>
				</div>

			</div>

			<div class="row">
				<p>Blog template built for <a target="_blank" href="http://informaticomanchay.com/portafolio/">Informatico Manchay</a> por <a target="_blank" href="https://twitter.com/josephdeveloper">@josephdeveloper</a>.</p>
			<p>
		        <a href="#">Regresar Arriba</a>
		     </p>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>
<script>
	$(function(){
		//$('#primary-menu').eq(0).slicknav();
	});
</script>
</body>
</html>
