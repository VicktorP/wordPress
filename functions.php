<?php
/**
 * nurntonWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nurntonWP
 */

require_once('inc/my-code.php');

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
				'footerMenu' => esc_html__( 'Меню в футере', 'nurntonwp' )
			)
		);

		//хедерменю
		// изменяем атрибут id у тега li 
		add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id_head', 10, 4 );
		function filter_menu_item_css_id_head ( $menu_id, $item, $args, $depth) {
			return $args->theme_location === 'headerMenu' ? '' : $menu_id;
		}

		// изменяем атрибут class у тега li
		add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes_head', 10, 4 );
		function filter_nav_menu_css_classes_head ( $classes, $item, $args, $depth ) {
			if ($args->theme_location === 'headerMenu' ) {
				$classes = [
					'menu__item'
				];

				//проверка активная ли страница
				// if ( $item->current ) {
				// 	$classes[] = 'menu-node--active';
				// }		
			}

			return $classes;
		}

		//изменяем классы у вложенного ul
		// add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
		// агтсешщт filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
		// 	if ( $args->theme_location === 'headerMenu' ) {
		// 		$classes = [
		// 			'class 1',
		// 			'class 2',
		// 			'class 3'
		// 		];
		// 	}
		// 	return $classes;
		// }

		//обработка классов у ссылок
		add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes_head', 10, 4 );
		function filter_nav_menu_link_attributes_head ( $atts, $item, $args, $depth ) {
			if ($args->theme_location === 'headerMenu' ) {
				$atts['class'] = 'menu__link';

				if ( $item->current ) {
					$atts['class'] .= ' menu__link-activ';
				}
			}

			return $atts;
		}

		//футерменю
		// изменяем атрибут id у тега li
		add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id_foot', 10, 4 );
		function filter_menu_item_css_id_foot ( $menu_id, $item, $args, $depth) {
			return $args->theme_location === 'footerMenu' ? '' : $menu_id;
		}

		// изменяем атрибут class у тега li
		add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes_foot', 10, 4 );
		function filter_nav_menu_css_classes_foot ( $classes, $item, $args, $depth ) {
			if ($args->theme_location === 'footerMenu' ) {
				$classes = [
					'footer-menu__item'
				];

				//проверка активная ли страница
				// if ( $item->current ) {
				// 	$classes[] = 'menu-node--active';
				// }		
			}

			return $classes;
		}

		//обработка классов у ссылок
		add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes_foot', 10, 4 );
		function filter_nav_menu_link_attributes_foot ( $atts, $item, $args, $depth ) {
			if ($args->theme_location === 'footerMenu' ) {
				$atts['class'] = 'footer__info-link';

				//проверка на активность ссылки
				// if ( $item->current ) {
				// 	$atts['class'] .= ' menu__link-activ';
				// }
			}

			return $atts;
		}



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

