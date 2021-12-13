<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Galena
 */

get_header(); ?>

<main id="primary" class="site-main">
  <div class="container">
    <div class="columns">
			<div class="column is-three-quarters content">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e("Oops! That page can&rsquo;t be found.", "galena"); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e(
      "It looks like nothing was found at this location.",
      "galena"
    ); ?></p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

		</div>
		<div class="column content">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
</main><!-- #main -->

<?php get_footer();
