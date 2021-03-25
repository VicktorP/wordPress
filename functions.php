<?php
/**
 * nurntonWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nurntonWP
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nurntonwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nurntonwp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nurntonWP, use a find and replace
		 * to change 'nurntonwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nurntonwp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'headerMenu' => esc_html__( 'Меню в шапке', 'nurntonwp' ),
				'mobileMenu' => esc_html__( 'Меню мобильное', 'nurntonwp' ),
				'footerMenu' => esc_html__( 'Меню в футере', 'nurntonwp' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nurntonwp_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo');
	}
endif;
add_action( 'after_setup_theme', 'nurntonwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nurntonwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nurntonwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'nurntonwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nurntonwp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nurntonwp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nurntonwp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nurntonwp_widgets_init' );

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
	wp_enqueue_script( 'nurntonwp-fslightbox', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'nurntonwp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

