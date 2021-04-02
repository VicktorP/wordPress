<?php 
/*
Template Name: Парковка
Template Post Type: post
*/

//Подключение header.php
get_header();
?>

<section class="container section__container">
    <div class="section__blog">
        <div class="box__name animate__animated" data-scroll>
            <h2 class="content__name">Паркинг на</h2>
            <strong class="content__name--accent">500 автомобилей</strong>
        </div>
        <div class="blog-page__wrap animate__animated" data-scroll>
            <img class="blog-info" src="<?php bloginfo('template_url'); ?>/assets/img/blog1.jpg" alt="Project">
            <img class="blog-info" src="<?php bloginfo('template_url'); ?>/assets/img/blog2.jpg" alt="Project">
            <p class="blog-info blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem
                Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with.</p>
            <img class="blog-info" src="<?php bloginfo('template_url'); ?>/assets/img/blog3.jpg" alt="Project">
        </div>
    </div>
</section>

<?php
//Подключение footer.php
get_footer();

?>