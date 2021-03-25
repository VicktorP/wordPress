<?php 
/*
Template Name: Главная страница
Template Post Type: page
*/

//Подключение header.php
get_header();
?>

<section class="section__container section__slider animate__animated" data-scroll>
	<div class="container">
		<div class="slider-wrap">
			<div class="slider-wrap__left">
				<div class="box__name name-home">
					<h2 class="content__name">Project</h2>
					<strong class="content__name--accent">Nurtown</strong>
				</div>
				<div class="slider-nav">
					<div class="slider-arrow">
						<img class="slider-arrow--left swiper-button-prev"  src="<?php bloginfo('template_url'); ?>/assets/img/arrow-left-long.svg" alt="prev"/>
						<img class="slider-arrow--right swiper-button-next"  src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right-long.svg" alt="next"/>
					</div>
					<div class="swiper-pagination swiper-pagination--columm"></div>
				</div>
			</div>
			<div class="slider-wrap__right">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide slide__primary ">
							<img class="slider__img" src="<?php bloginfo('template_url'); ?>/assets/img/project.jpg" alt="Project" />
							<a href="#" class="button button--transparent slider__button">Взглянуть <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow" /></a>
						</div>
						<div class="swiper-slide">
							<img class="slider__img" src="<?php bloginfo('template_url'); ?>/assets/img/project.jpg" alt="Project" />
							<a href="#" class="button button--transparent slider__button">Взглянуть <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="container section__container animate__animated" data-scroll>
	<div class="section__article">
		<div class="article-pic">
			<img class="article-img" src="<?php bloginfo('template_url'); ?>/assets/img/Rectangle1.jpg" alt="Project" />
			<img class="article-img" src="<?php bloginfo('template_url'); ?>/assets/img/Rectangle2.jpg" alt="Project" />
			<img class="article-img" src="<?php bloginfo('template_url'); ?>/assets/img/Rectangle3.jpg" alt="Project" />
		</div>
		<div class="article-text">
			<h3 class="section-title">О компании</h3>
			<p class="article-desc">
				Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text ever
				since the 1500s, when an unknown printer took a galley of type and
				scrambled it to make a type specimen book. It has survived not only five
				centuries, but also the leap into electronic typesetting, remaining
				essentially unchanged.
			</p>
			<a href="#" class="button button--light button--normal">Читать<img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow" /></a>
		</div>
	</div>
</section>
<section class="container section__container section__tasks animate__animated" data-scroll>
	<h3 class="section-title">Основные задачи</h3>
	<div class="tasks-wrap">
		<div class="section-tasks">
			<div class="tasks-number">1</div>
			<p class="tasks-desc">Создание комфортных условий и повышение качества обслуживания клиентов</p>
		</div>
		<div class="section-tasks">
			<div class="tasks-number">2</div>
			<p class="tasks-desc">Постоянно совершенствовать качество предоставляемых услуг путем обучения персонала, закупки нового оборудования и усиленной рекламы на рынке</p>
		</div>
	</div>
</section>
<section class="container section__container section__project animate__animated" data-scroll>
	<h3 class="section-title">Наши проекты</h3>
	<div class="project__wrap">
		<div class="project__inner">
			<div class="project__img-wrapper">
				<img class="project__img" src="<?php bloginfo('template_url'); ?>/assets/img/project1.jpg" alt="Досуговий центр" />
				<div class="link__wrap">
					<div class="link__box--large">
						<h4 class="link__title  link__title--large">Досуговий центр</h4>
						<a href="#" class="link__project">Подробнее <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></a>
					</div>
				</div>
			</div>
			<div class="project__img-wrapper">
				<img class="project__img" src="<?php bloginfo('template_url'); ?>/assets/img/project2.jpg" alt="Досуговий центр" />
				<div class="link__wrap">
					<div class="link__box--large">
						<h4 class="link__title link__title--large">Досуговий центр</h4>
						<a href="#" class="link__project">Подробнее <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></a>
					</div>
				</div>
			</div>
			<div class="project__img-wrapper">
				<img class="project__img" src="<?php bloginfo('template_url'); ?>/assets/img/project3.jpg" alt="Досуговий центр" />
				<div class="link__wrap">
					<div class="link__box--small">
						<h4 class="link__title  link__title--small">Досуговий центр</h4>
						<a href="#" class="link__project">Подробнее <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></a>
					</div>
				</div>
			</div>
			<div class="project__img-wrapper">
				<img class="project__img" src="<?php bloginfo('template_url'); ?>/assets/img/project4.jpg" alt="Досуговий центр" />
				<div class="link__wrap">
					<div class="link__box--large">
						<h4 class="link__title link__title--large">Досуговий центр</h4>
						<a href="#" class="link__project">Подробнее <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></a>
					</div>
				</div>
			</div>
			<div class="project__img-wrapper">
				<img class="project__img" src="<?php bloginfo('template_url'); ?>/assets/img/project5.jpg" alt="Досуговий центр" />
				<div class="link__wrap">
					<div class="link__box--small">
						<h4 class="link__title link__title--small">Досуговий центр</h4>
						<a href="#" class="link__project">Подробнее <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></a>
					</div>
				</div>
			</div>
		</div>
		<button class="button button--right button--normal button--accent">Все проекты <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></button>
	</div>
</section>
<section class="container section__container section__form animate__animated" data-scroll>
	<h3 class="section-title">Связаться с нами</h3>
	<div class="section__wrap">
		<form action="#" class="js-form form">
			<div class="form-group">
				<input type="text" class="form__input form-control" placeholder="Имя" autocomplete="off" data-validate-field="name" name="name" id="name" />
			</div>
			<div class="form-group">
				<input type="phone" class="form__input form-control phoneInput" placeholder="Номер телефона" autocomplete="off" data-validate-field="phone" name="phone" id="phone" />
			</div>
			<div class="form-group">
				<input type="email" class="form__input form-control" placeholder="E-mail" autocomplete="off" data-validate-field="email" name="email" id="email" />
			</div>
			<div class="form-group">
				<input type="text" class="form__input form-control" placeholder="Интересующий товар/услуга" autocomplete="off" data-validate-field="text" name="text" id="text" />
			</div>
			<div class="form-group">
				<label for="password"></label>
				<textarea placeholder="Сообщение" name="msg" cols="30" rows="10" autocomplete="off" class="form__textarea form-control" data-validate-field="text" id="text"></textarea>
			</div>
			<div class="form-group form-confid">
				<label class="check__block">
					<input type="checkbox" class="form__checkbox" data-validate-field="checkbox" checked />
					<span class="check__box"></span>
					<span class="check__text">
						Отправляя заявку Вы соглашаетесь с политикой конфиденциальности
					</span>
				</label>
			</div>
			<button class="form__btn btn btn-primary button button--normal button--accent">Отправить<img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow-white.svg" alt="arrow" /></button>
		</form>
			<div class="img-wrap">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/form.jpg" alt="contact" class="form-img" />
			</div>
	</div>
</section>
<div class="section__modal">
	<div class="modal__ok-wrap">
		<div class="modal-ok">
			<img src="../img/ok.svg" alt="" class="modal__img" />
			<h5 class="modal__title">Спасибо !</h5>
			<p class="modal__text">Ваше сообщение отправлено мы свяжемся с вами в ближайшее время</p>
			<button class="form__btn btn btn-primary button button--stretched button--accent button--close">Вернутся назад</button>
		</div>
	</div>
</div>

<?php
//Подключение footer.php
get_footer();

?>