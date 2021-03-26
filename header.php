<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Digital project</title>
	<meta name="description" content="домашняя работа по JS №10">

<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="container header__container">
			<div class="logo header__logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="header__mobile-menu">
				<button class="hamburger" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<!-- <div class="mobile-menu ">
					<ul class="menu__list">
						<li class="menu__item"><a href="index.html" class="menu__link">Главная</a></li>
						<li class="menu__item"><a href="gallery.html" class="menu__link">Галерея</a></li>
						<li class="menu__item"><a href="blog.html" class="menu__link">Проекты</a></li>
						<li class="menu__item"><a href="sertificats.html" class="menu__link">Сертификаты</a></li>
						<li class="menu__item"><a href="contact.html" class="menu__link">Контакты</a></li>
					</ul>
				</div> -->
				<?php
				wp_nav_menu( [
					'theme_location'  => 'mobileMenu',
					'menu'            => '', 
					'container'       => 'div', 
					'container_class' => 'mobile-menu', 
					'menu_class'      => 'menu', 
					'echo'            => true,
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',

				] );
			?>
			</div>
			<?php
				wp_nav_menu( [
					'theme_location'  => 'headerMenu',
					'menu'            => '', 
					'container'       => 'div', 
					'container_class' => 'menu header__menu', 
					'menu_class'      => 'menu__list', 
					'echo'            => true,
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'add_li_class'  	=> 'menu__item'
				] );
			?>
		</div>
	</header>