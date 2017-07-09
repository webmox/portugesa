<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
	<div class="layout">
		<div class="header">
			<div class="top-header">
				<div class="container">
					<a href="<?php bloginfo('url') ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
					<div class="right-header-block">
						<div class="lang-panel">
							<ul>
								<li class="ru"><a href="#"></a></li>
								<li class="eng"><a href="#"></a></li>
							</ul>
						</div><!--end lang-panel-->
						<div class="contacts-info">
							<span class="phone"><a href="tel:(044) 444 55 44">(044) 444 55 44</a></span>
							<span class="email"><a href="mailto:sale@casaportugesa.com.ua">sale@casaportugesa.com.ua</a></span>
						</div>
					</div>
				</div>
			</div><!--end top-header-->

			<div class="main-menu">	
				<div class="container">
					<?php
						$args = array(
								  'theme_location'  => 'header-top-menu',
								  'menu_class'      => 'header-menu',
								  'container'       => '',
								  'before'          => '',
								  'after'           => '',
								  'link_before'     => '',
								  'link_after'      => ''
								);
						wp_nav_menu( $args );
					?>
				</div>
			</div><!--end main-menu-->

			<div class="header-img"></div><!--end header-img-->
		</div><!--end header-->