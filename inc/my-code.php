<?php

/**
 * Enqueue scripts and styles.
 */
function nurntonwp_scripts() {	
	wp_style_add_data( 'nurntonwp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nurntonwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//мой код
	//подключение через ссылку
	wp_enqueue_style('nurnton-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null, null);
	wp_enqueue_style('nurnton-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), null, null);
	//подключение локально
	wp_enqueue_style('nurnton-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), null, null);
	wp_enqueue_style('nurnton-hamburgers', get_template_directory_uri() . '/assets/css/hamburgers.min.css', array(), null, null);
	wp_enqueue_style('nurnton-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), null, null);
	//основной файл стилей
	wp_enqueue_style( 'nurntonwp-style', get_stylesheet_uri(), array(), _S_VERSION );

	// jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	// Остальные скрипты
	wp_enqueue_script( 'nurntonwp-inputmask', get_template_directory_uri() . '/assets/js/inputmask.min.js', array(), null, true );
	wp_enqueue_script( 'nurntonwp-justValidate', get_template_directory_uri() . '/assets/js/just-validate.min.js', array(), null, true );
	wp_enqueue_script( 'nurntonwp-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'nurntonwp-slider', get_template_directory_uri() . '/assets/js/slider.js', array('nurntonwp-swiper'), null, true );
	wp_enqueue_script( 'nurntonwp-scrollout', 'https://unpkg.com/scroll-out/dist/scroll-out.min.js', array(), null, true );
	wp_enqueue_script( 'nurntonwp-form', get_template_directory_uri() . '/assets/js/form.js', array(), null, true );
	wp_enqueue_script( 'nurntonwp-fslightbox', get_template_directory_uri() . '/assets/js/fslightbox.js', array('jquery'), null, true );
	wp_enqueue_script( 'nurntonwp-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'nurntonwp_scripts' );


// Изменение длины обрезаемого текста 
add_filter( 'excerpt_length', function(){
	return 50;
} );

// Удаление конструкции [...] на конце
add_filter('excerpt_more', function($more) {
	return ' ...';
});

/*
// Создаем ссылку "Читать дальше..." на конце
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}
*/

// remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );