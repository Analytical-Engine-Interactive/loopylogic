<?php
/**
 * BLDR functions and definitions
 *
 * @package BLDR
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'bldr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bldr_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BLDR, use a find and replace
	 * to change 'bldr' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'bldr', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'bldr-blog-archive', 800, 250, array( 'center', 'center' ) );
	add_image_size( 'bldr-home-blog', 400, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bldr' ),
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'bldr_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // bldr_setup
add_action( 'after_setup_theme', 'bldr_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bldr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bldr' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'bldr' ),
		'id'            => 'footer-1',
		'description'   => __( 'Populate your first Footer area', 'bldr' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'bldr' ),
		'id'            => 'footer-2',
		'description'   => __( 'Populate your second Footer area', 'bldr' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'bldr' ),
		'id'            => 'footer-3',
		'description'   => __( 'Populate your third Footer area', 'bldr' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'bldr' ),
		'id'            => 'footer-4',
		'description'   => __( 'Populate your fourth Footer area', 'bldr' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	//Register the sidebar widgets   
	register_widget( 'bldr_Video_Widget' ); 
	register_widget( 'bldr_Contact_Info' );
	
	//Register the post type widgets
	if ( function_exists('siteorigin_panels_activate') ) {
		register_widget( 'bldr_clients' );
		register_widget( 'bldr_testimonials' );
		register_widget( 'bldr_projects' ); 
		register_widget( 'bldr_services' );
		register_widget( 'bldr_home_news' );
		register_widget( 'bldr_action' );
		register_widget( 'bldr_columns' );
	}
	
}
add_action( 'widgets_init', 'bldr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bldr_scripts() {
	wp_enqueue_style( 'bldr-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bldr-slick', get_template_directory_uri() . '/css/slick.css' );

	wp_enqueue_style( 'bldr-animate', get_template_directory_uri() . '/css/animate.css' );
	
	wp_enqueue_style( 'bldr-menu', get_template_directory_uri() . '/css/jPushMenu.css' ); 
	
	wp_enqueue_style( 'bldr-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts'));
	
	if( $headings_font ) {
		wp_enqueue_style( 'bldr-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		wp_enqueue_style( 'bldr-source-sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');   
	}	
	if( $body_font ) {
		wp_enqueue_style( 'bldr-body-fonts', '//fonts.googleapis.com/css?family='. $body_font ); 	
	} else {
		wp_enqueue_style( 'bldr-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');  
	}

	wp_enqueue_script( 'bldr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bldr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'bldr-parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, false );

	wp_enqueue_script( 'bldr-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );

	wp_enqueue_script( 'bldr-slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), false, true );
	
	wp_enqueue_script( 'bldr-added-panel', get_template_directory_uri() . '/js/panel-class.js', array('jquery'), false, true ); 
	
	if ( get_theme_mod('bldr_sticky_active') != 1 ) { 

	wp_enqueue_style( 'bldr-header-css', get_template_directory_uri() . '/css/headhesive.css' ); 
	wp_enqueue_script( 'bldr-headhesive', get_template_directory_uri() . '/js/headhesive.js', array('jquery'), false, true );
	wp_enqueue_script( 'bldr-sticky-head', get_template_directory_uri() . '/js/sticky-head.js', array('jquery'), false, true );
	
	}
	
	if ( get_theme_mod('bldr_animate') != 1 ) {

	wp_enqueue_script( 'bldr-animate', get_template_directory_uri() . '/js/animate-plus.js', array('jquery'), false, true );
	
	}

	wp_enqueue_script( 'bldr-scripts', get_template_directory_uri() . '/js/bldr.scripts.js', array('jquery'), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bldr_scripts' );

/**
 * Load html5shiv
 */
function bldr_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'bldr_html5shiv' );

/**
 * Change the excerpt length
 */
function bldr_excerpt_length( $length ) {
	
	$excerpt = esc_attr( get_theme_mod('exc_length', '50')); 
	return $excerpt; 

}

add_filter( 'excerpt_length', 'bldr_excerpt_length', 999 ); 

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
require get_template_directory() . '/inc/rows.php'; 
require get_template_directory() . '/inc/bldr-styles.php';
require get_template_directory() . '/inc/bldr-sanitize.php';

/**
 * favicon upload
 */
require get_template_directory() . '/inc/bldr-favicon.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/bldr-admin_page.php'; 

/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php"; 
require get_template_directory() . "/widgets/video-widget.php";

/**
 * Activate for a child theme.  Always use a child theme to make edits.
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/use-child-theme.php' );

/**
 * Load the front page widgets.
 */
if ( function_exists('siteorigin_panels_activate') ) {
	require get_template_directory() . "/widgets/bldr-clients.php";
	require get_template_directory() . "/widgets/bldr-projects.php";
	require get_template_directory() . "/widgets/bldr-testimonials.php";
	require get_template_directory() . "/widgets/bldr-services.php"; 
	require get_template_directory() . "/widgets/bldr-home-news.php";
	require get_template_directory() . "/widgets/bldr-cta.php";  
	require get_template_directory() . "/widgets/bldr-columns.php";
	
} 

/**
 * Enqueues the necessary script for image uploading in widgets
 */
add_action('admin_enqueue_scripts', 'bldr_image_upload');
function bldr_image_upload($post) {
    if( 'post.php' != $post )
        return;	
    wp_enqueue_script('bldr-image-upload', get_template_directory_uri() . '/js/image-uploader.js', array('jquery'), true );
	if ( did_action( 'wp_enqueue_media' ) )
		return;    
    wp_enqueue_media();    
}
