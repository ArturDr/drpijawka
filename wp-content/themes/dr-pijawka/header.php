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
		<div class="container-fluid pijawka-menu shadow">
			<nav class="navbar navbar-expand-md">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-menu.png" alt="Dr Pijawka" width="133" height="40">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#about-me">O MNIE</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#offer">CENNIK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#procedure">ZABIEG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">KONTAKT</a>
							</li>
					</div>
				</div>
			</nav>
		</div>
		<div class="hero-section">
			<div class="container">
				<div class="row align-items-center flex-column-reverse flex-md-row">
					<div class="col-12 col-md-4 text-center hero-col"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo-text.png" alt="Logo Dr Pijawka" width="266" height="80"></div>
					<div class="col-12 col-md-8 text-center hero-col"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/sloik.png" alt="Słój z pijawkami" width="380" height="525"></div>
				</div>
			</div>
		</div>
	</div>