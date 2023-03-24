<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dr_Pijawka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="top-section">
		<div class="menu-container">
			<nav class="navbar">
				<a class="navbar-logo" href="<?php echo get_page_uri(); ?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-menu.png" alt="Dr Pijawka" width="133" height="40">
				</a>
				<div class="navbar-list">
					<a class="nav-link" href="<?php echo get_page_uri(); ?>/#about-me">O MNIE</a>
					<a class="nav-link" href="<?php echo get_page_uri(); ?>/#leeches-back">O PIJAWKACH</a>
					<a class="nav-link" href="<?php echo get_page_uri(); ?>/#procedure">ZABIEG</a>
					<a class="nav-link" href="<?php echo get_page_uri(); ?>/#offer">CENNIK</a>
					<a class="nav-link" href="<?php echo get_page_uri(); ?>/#contact">KONTAKT</a>
				</div>
			</nav>
			<nav class="navbar-mobile">
				<a class="navbar-logo" href="<?php echo get_page_uri(); ?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-menu.png" alt="Dr Pijawka" width="133" height="40">
				</a>
				<div class="burger">
					<i class="fa-solid fa-bars menu-icon"></i>
					<i class="fa-solid fa-xmark menu-xmark"></i>
				</div>
			</nav>
			<div class="navbar-list-mobile">
				<a class="nav-link" href="<?php echo get_page_uri(); ?>/#about-me">O MNIE</a>
				<a class="nav-link" href="<?php echo get_page_uri(); ?>/#leeches-back">O PIJAWKACH</a>
				<a class="nav-link" href="<?php echo get_page_uri(); ?>/#procedure">ZABIEG</a>
				<a class="nav-link" href="<?php echo get_page_uri(); ?>/#offer">CENNIK</a>
				<a class="nav-link" href="<?php echo get_page_uri(); ?>/#contact">KONTAKT</a>
			</div>
		</div>
		<div class="hero-section">
			<div class="col-1"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-text.png" alt="Logo Dr Pijawka" width="266" height="80"></div>
			<div class="col-2"><img src="<?php echo get_template_directory_uri(); ?>/images/sloik.png" alt="Słój z pijawkami" width="380" height="525"></div>
		</div>
	</div>