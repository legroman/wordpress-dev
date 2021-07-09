<?php
/**
 * test-work functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test-work
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'test_work_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function test_work_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on test-work, use a find and replace
		 * to change 'test-work' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'test-work', get_template_directory() . '/languages' );

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
				'menu-header' => esc_html__( 'Primary', 'test-work' ),
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
				'test_work_custom_background_args',
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
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'test_work_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function test_work_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'test_work_content_width', 640 );
}
add_action( 'after_setup_theme', 'test_work_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function test_work_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'test-work' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'test-work' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'test_work_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function test_work_scripts() {
	wp_enqueue_style( 'test-work-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('test-work-src-style', get_template_directory_uri() . '/dist/css/app.css', array(), 1, 'all');
	wp_style_add_data( 'test-work-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery-3.6.0', get_template_directory_uri() . '/dist/js/jquery-3.6.0.min.js', array(), 3.6, false );
	wp_enqueue_script( 'test-work-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'test-work-src-script', get_template_directory_uri() . '/dist/js/script.js', array('jquery-3.6.0'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'test_work_scripts' );

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

/**
 * Register a custom post type.
 */
function register_post_types(){
    register_post_type('branch_of_law', array(
        'labels'             => array(
            'name'               => 'Галузі права', // Основное название типа записи
            'singular_name'      => 'Галузь права', // отдельное название записи типа Book
            'add_new'            => 'Добавити нову',
            'add_new_item'       => 'Добавити нову галузь права',
            'edit_item'          => 'Редагувати галузь права',
            'new_item'           => 'Нова галузь права',
            'view_item'          => 'Подивитися галузь права',
            'search_items'       => 'Найти галузь права',
            'not_found'          => 'Галузів права не знайдено',
            'not_found_in_trash' => 'В корзині галузів права не знайдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Галузі права'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book-alt',
        'supports'           => array('title','editor', 'thumbnail')
    ) );

    register_post_type('specialists', array(
        'labels'             => array(
            'name'               => 'Спеціалісти', // Основное название типа записи
            'singular_name'      => 'Спеціаліст', // отдельное название записи типа Book
            'add_new'            => 'Добавити нового',
            'add_new_item'       => 'Добавити нового спеціаліста',
            'edit_item'          => 'Редагувати спеціаліста',
            'new_item'           => 'Новий спіціаліст',
            'view_item'          => 'Подивитися спеціаліста',
            'search_items'       => 'Найти спіціаліста',
            'not_found'          => 'Спеціаліста не знайдено',
            'not_found_in_trash' => 'В корзині спеціалістів не знайдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Спеціалісти'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array('title','editor', 'thumbnail')
    ) );
}
add_action('init', 'register_post_types');

