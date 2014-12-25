<?php
/**
 * origin functions and definitions
 *
 * @package origin
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'origin_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function origin_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on origin, use a find and replace
	 * to change 'origin' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'origin', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// add Thumbnail for post
	add_theme_support('post-thumbnails');

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// // This theme uses wp_nav_menu() in one location.
	// register_nav_menus( array(
	// 	'primary' => __( 'Primary Menu', 'origin' ),
	// ));
	if (function_exists(register_nav_menus)) {
		register_nav_menus(array('main_nav' => 'Main Navigation Menu', 'sidebar_nav'=>'Sibar Navigation'));	
	}
	

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'origin_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // origin_setup
add_action( 'after_setup_theme', 'origin_setup' );

// hook excerpt
function new_excerpt_length($length) {
	return 40;
}
function new_excerpt_more($more) {
	return ' ...';
}

add_filter( 'excerpt_more', 'new_excerpt_more');
add_filter( 'excerpt_length', 'new_excerpt_length');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function origin_widgets_init() {
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'right-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'origin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function origin_scripts() {
	// load style.css to template
	wp_enqueue_style( 'origin-style', get_stylesheet_uri() );

	// laod js for template
	wp_deregister_script('jquery' );
	wp_register_script( 'jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js", array(), "1.3.2", true);
	wp_register_script( 'easyAccordion', get_template_directory_uri() . '/js/jquery.easyAccordion.js', array('jquery'), '', true);
	wp_register_script( 'origin_script', get_template_directory_uri() . '/js/script.js', array('jquery'), "1.0", true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('easyAccordion');
	wp_enqueue_script('origin_script');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'origin_scripts' );

/**
 * Create menu support for themes
 */

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
