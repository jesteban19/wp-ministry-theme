<?php
/**
 * Brazos Abiertos functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Brazos_Abiertos
 */

if ( ! function_exists( 'brazosabiertos_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brazosabiertos_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Brazos Abiertos, use a find and replace
	 * to change 'brazosabiertos' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'brazosabiertos', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'brazosabiertos' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'brazosabiertos_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'brazosabiertos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brazosabiertos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brazosabiertos_content_width', 640 );
}
add_action( 'after_setup_theme', 'brazosabiertos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brazosabiertos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'brazosabiertos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'brazosabiertos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name' => esc_html__('Slider','brazosabiertos'),
		'id' => 'slider',
		'description' => esc_html__('Add Slider','brazosabiertos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name' => esc_html__('Footer-1','brazosabiertos'),
		'id' => 'footer-1',
		'description' => esc_html__('Add Slider','brazosabiertos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name' => esc_html__('Footer-2','brazosabiertos'),
		'id' => 'footer-2',
		'description' => esc_html__('Add Slider','brazosabiertos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	/*register_sidebar(array(
		'name' => esc_html__('Footer-3','brazosabiertos'),
		'id' => 'footer-3',
		'description' => esc_html__('Add Slider','brazosabiertos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );*/
}
add_action( 'widgets_init', 'brazosabiertos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brazosabiertos_scripts() {
	wp_enqueue_style( 'brazosabiertos-style-theme',get_template_directory_uri().'/css/style.css');
	//wp_enqueue_style( 'brazosabiertos-style-nav',get_template_directory_uri().'/css/slicknav.css');
	wp_enqueue_style( 'brazosabiertos-style','https://fonts.googleapis.com/css?family=Lato:300,400,700' );
	wp_enqueue_style( 'brazosabiertos-style-font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	
	wp_enqueue_script('brazosabiertos-jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',array(),'20151215', true);
	wp_enqueue_script( 'brazosabiertos-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );

	// wp_enqueue_script( 'brazosabiertos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'brazosabiertos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brazosabiertos_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 *	Configuracion de personalizacion de informaticomanchay.com 
 */
require get_template_directory() . '/inc/post-type-ministerio.php';
require get_template_directory() . '/inc/post-type-proyectos.php';

 require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');


