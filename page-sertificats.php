<?php 
/*
Template Name: Сертификаты
Template Post Type: page
*/

//Подключение header.php
get_header();
?>

<main class="container section__container">
  <div class="box__name animate__animated" data-scroll>
    <h2 class="content__name">Галерея</h2>
    <strong class="content__name--accent">Фотографий</strong>
  </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="gallery__wrap gallery-certificates">
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="gallery__wrap gallery-certificates">
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="gallery__wrap gallery-certificates">
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="gallery__wrap gallery-certificates">
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="gallery__wrap gallery-certificates">
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat1.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat2.jpg">
            </a>
          </div>
          <div class="gallery__inner animate__animated" data-scroll>
            <a data-fslightbox href="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sertificat3.jpg">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-wrap">
      <div class="slider-nav--row slider-nav--right">
        <div class="swiper-pagination "></div>
        <div class="slider-arrow--row ">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-left-long.svg" alt="left" class="swiper-button-prev">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right-long.svg" alt="right" class="swiper-button-next">
        </div>
      </div>
    </div>
  </div>
</main>

<?php
//Подключение footer.php
get_footer();

?>