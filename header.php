<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Galena
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class("m-0"); ?>>
	<?php wp_body_open(); ?>

	<nav id="site-navigation" class="navbar has-background-primary" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
				<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
			</a>

			<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
				<?php wp_nav_menu([
      "theme_location" => "menu-1",
      "menu_id" => "primary-menu",
      "menu_class" => "navbar-item",
    ]); ?>
			</div>
		</div>
		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e(
    "Primary Menu",
    "galena"
  ); ?></button> -->
	</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header hero is-large is-warning has-text-right">
		<div class="hero-body site-branding">
			<?php
   the_custom_logo();
   if (is_front_page() && is_home()): ?>
				<h1 class="site-title title has-text-primary is-size-1"><a href="<?php echo esc_url(
      home_url("/")
    ); ?>" rel="home"><?php bloginfo("name"); ?></a></h1>
			<?php else: ?>
				<p class="site-title title has-text-primary is-size-1"><a href="<?php echo esc_url(
      home_url("/")
    ); ?>" rel="home"><?php bloginfo("name"); ?></a></p>
			<?php endif;
   $galena_description = get_bloginfo("description", "display");
   if ($galena_description || is_customize_preview()): ?>
				<p class="site-description subtitle has-text-primary is-size-2"><?php echo $galena_description;
     // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
     ?></p>
			<?php endif;
   ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<section id="page" class="site section">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
    "Skip to content",
    "galena"
  ); ?></a>