<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dr_Pijawka
 */

?>

<div class="container-fluid pijawka-footer">
	<footer>
		<div class="row text-center">
			<div class="col">
				<p><?php echo date('Y') ?> &#169; <a href="http://robekartur.pl"> Robek Artur</a></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>

</body>
</html>
