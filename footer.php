<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Galena
 */
?>

</div><!-- #page -->
</section><!-- #page -->

<footer id="colophon" class="site-footer footer has-background-warning">
	<div class="content has-text-centered">
		<div class="site-info">
			<a href="<?php echo esc_url(__("https://wordpress.org/", "galena")); ?>">
				<?php printf(esc_html__("Proudly powered by %s", "galena"), "WordPress"); ?>
			</a>
			<span class="sep"> | </span>
			<?php printf(
     esc_html__('Theme: %1$s by %2$s.', "galena"),
     "galena",
     '<a href="https://patrickwthomas.net/">Patrick Thomas</a>'
   ); ?>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>