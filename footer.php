	<?php wp_footer(); ?>
	<footer class="footer">
		<div class="container footer__container">
			<div class="footer__top animate__animated" data-scroll>
				<div class="logo footer__logo">
					<!-- < ?php the_custom_logo(); ?> -->
					<a href="/" class="logo__link">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.svg" alt="Logo" class="logo__img">
					</a>
				</div>				
				<div class="footer-menu" >
					<h5 class="footer__info-title">Информация</h5>
					<?php
						wp_nav_menu( [
							'theme_location'  => 'footerMenu',
							'menu'            => '', 
							'container'       => 'div', 
							'container_class' => 'footer-menu', 
							'menu_class'      => 'footer-menu__list', 
							'echo'            => true,
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
						] );
					?>
				</div>
				<div class="footer__info-contacts" >
					<h5 class="footer__info-title">Контакты</h5>
					<div class="contacts__wrap">
						<img  class="contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/geo.svg" alt="geodata">
						<a class="footer__info-link footer__info--text" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%A2%D0%B5%D0%BB%D0%B5%D0%B2%D0%B8%D0%B7%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F+10,+%D0%9A%D0%B0%D1%80%D0%B0%D0%B3%D0%B0%D0%BD%D0%B4%D0%B0+100000,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD/@49.823954,73.0834136,17z/data=!3m1!4b1!4m5!3m4!1s0x424346c3b32ffcaf:0x41481e634d919f9e!8m2!3d49.823954!4d73.0856023">
							100000,
							Республика Казахстан,
							г. Караганда, ул. Телевизионная 10</a>
					</div>
					<div class="contacts__wrap">
						<img class="contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="phone">
						<a class="footer__info-link footer__info--text" href="tel:77017776811">+7 (701) 77 76 811</a>
					</div>
					<div class="contacts__wrap">
						<img class="contacts-img" src="<?php bloginfo('template_url'); ?>/assets/img/email.svg" alt="e-mail">
						<a class="footer__info-link footer__info--text" href="mailto:galym.sultanov@mail.ru">Galym.sultanov@mail.ru</a>
					</div>
				</div>
				<div class="footer__info-media">
					<h5 class="footer__info-title">Социальные сети</h5>
					<div class="media-wrap">
						<a class="media-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="Facebook"></a>
						<a class="media-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/in.svg" alt="LinkedIn"></a>
						<a class="media-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/twit.svg" alt="twittar"></a>
						<a class="media-icon" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/pinterest.svg" alt="pinterest"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-line"></div>
		<div class="footer__bottom">
			<p class="footer__copiright footer__info--text">© 2019 Digital Project. Все права защищены.</p>
		</div>
	</footer>
<!-- 
	<script src="js/inputmask.min.js"></script>
	<script src="js/just-validate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/fslightbox.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
	<script src="js/script.js"></script> -->
	
</body>

</html>