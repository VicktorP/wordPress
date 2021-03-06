<?php 
/*
Template Name: Проекты
Template Post Type: page
*/

//Подключение header.php
get_header();
?>

<main class="container section__container">
  <div class="box__name animate__animated" data-scroll>
    <h2 class="content__name">Наши</h2>
    <strong class="content__name--accent">Проекти</strong>
  </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">

    <div class="swiper-slide">
      <div class="blog-slider">    


        <?php
          // задаем нужные нам критерии выборки данных из БД
          $args = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'comment_count'
          );

          $query = new WP_Query( $args );

          // Цикл
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
                <div class="blog__wrap animate__animated" data-scroll>
                  <div class="blog-pic">
                    <a href="blog-page.html" class="blog-link">
                      <img class="blog-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Project">
                    </a>
                  </div>
                  <div class="blog-text">
                    <h3 class="blog__subtitle"> <?php the_title(); ?> </h3>
                    <p class="blog-desc"> <?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>" class="button button--normal">
                      Смотреть
                      <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow">
                    </a>
                  </div>
                </div>
              <?
            }
          } else {
            ?>
              <h2>А выводить-то и нечего :((</h2>
            <?
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
        ?>


      </div>
    </div>

    <div class="swiper-slide">
      <div class="blog-slider">    


        <?php
          // задаем нужные нам критерии выборки данных из БД
          $args = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'comment_count'
          );

          $query = new WP_Query( $args );

          // Цикл
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
                <div class="blog__wrap animate__animated" data-scroll>
                  <div class="blog-pic">
                    <a href="blog-page.html" class="blog-link">
                      <img class="blog-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Project">
                    </a>
                  </div>
                  <div class="blog-text">
                    <h3 class="blog__subtitle"> <?php the_title(); ?> </h3>
                    <p class="blog-desc"> <?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>" class="button button--normal">
                      Смотреть
                      <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow">
                    </a>
                  </div>
                </div>
              <?
            }
          } else {
            ?>
              <h2>А выводить-то и нечего :((</h2>
            <?
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
        ?>


      </div>
    </div>

    <div class="swiper-slide">
      <div class="blog-slider">    


        <?php
          // задаем нужные нам критерии выборки данных из БД
          $args = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'comment_count'
          );

          $query = new WP_Query( $args );

          // Цикл
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
                <div class="blog__wrap animate__animated" data-scroll>
                  <div class="blog-pic">
                    <a href="blog-page.html" class="blog-link">
                      <img class="blog-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Project">
                    </a>
                  </div>
                  <div class="blog-text">
                    <h3 class="blog__subtitle"> <?php the_title(); ?> </h3>
                    <p class="blog-desc"> <?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>" class="button button--normal">
                      Смотреть
                      <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow">
                    </a>
                  </div>
                </div>
              <?
            }
          } else {
            ?>
              <h2>А выводить-то и нечего :((</h2>
            <?
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
        ?>


      </div>
    </div>

    <div class="swiper-slide">
      <div class="blog-slider">    


        <?php
          // задаем нужные нам критерии выборки данных из БД
          $args = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'comment_count'
          );

          $query = new WP_Query( $args );

          // Цикл
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
                <div class="blog__wrap animate__animated" data-scroll>
                  <div class="blog-pic">
                    <a href="blog-page.html" class="blog-link">
                      <img class="blog-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Project">
                    </a>
                  </div>
                  <div class="blog-text">
                    <h3 class="blog__subtitle"> <?php the_title(); ?> </h3>
                    <p class="blog-desc"> <?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>" class="button button--normal">
                      Смотреть
                      <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow">
                    </a>
                  </div>
                </div>
              <?
            }
          } else {
            ?>
              <h2>А выводить-то и нечего :((</h2>
            <?
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
        ?>


      </div>
    </div>

    <div class="swiper-slide">
      <div class="blog-slider">    


        <?php
          // задаем нужные нам критерии выборки данных из БД
          $args = array(
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'comment_count'
          );

          $query = new WP_Query( $args );

          // Цикл
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
                <div class="blog__wrap animate__animated" data-scroll>
                  <div class="blog-pic">
                    <a href="blog-page.html" class="blog-link">
                      <img class="blog-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Project">
                    </a>
                  </div>
                  <div class="blog-text">
                    <h3 class="blog__subtitle"> <?php the_title(); ?> </h3>
                    <p class="blog-desc"> <?php the_excerpt() ?> </p>
                    <a href="<?php the_permalink() ?>" class="button button--normal">
                      Смотреть
                      <img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="arrow">
                    </a>
                  </div>
                </div>
              <?
            }
          } else {
            ?>
              <h2>А выводить-то и нечего :((</h2>
            <?
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
        ?>


      </div>
    </div>

    </div>
  </div>

  <div class="nav-wrap">
    <div class="slider-nav--row">
      <div class="swiper-pagination "></div>
      <div class="slider-arrow--row ">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-left-long.svg" alt="left" class="swiper-button-prev">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-right-long.svg" alt="right" class="swiper-button-next">
      </div>
    </div>
  </div>

</main>

<?php
//Подключение footer.php
get_footer();

?>