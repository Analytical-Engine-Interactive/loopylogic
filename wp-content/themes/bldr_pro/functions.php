<?php

/**
 * BLDR functions and definitions
 *
 * @package BLDR
 */
 

/**
 * register the theme update 
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'bldr_pro', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=bldr_pro' //Metadata URL.
);

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
	add_image_size( 'blog-archive', 800, 250, array( 'center', 'center' ) );

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
 * Load Google Fonts.
 */
function bldr_load_fonts() {
            wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');  
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'bldr_load_fonts'); 

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
		'name'          => __( 'Shop Sidebar', 'bldr' ),
		'id'            => 'sidebar-shop',
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
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 1', 'bldr' ),
		'id'            => 'add-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 2', 'bldr' ),
		'id'            => 'add-sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 3', 'bldr' ),
		'id'            => 'add-sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 4', 'bldr' ),
		'id'            => 'add-sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 5', 'bldr' ),
		'id'            => 'add-sidebar-5',
		'description'   => '',
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
		register_widget( 'bldr_team' );
		register_widget( 'bldr_skills' );
		register_widget( 'bldr_details' );
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
	
	wp_enqueue_style( 'bldr-odometerstyle', get_template_directory_uri() . '/css/odometer-theme-default.css', array(), '' ); 
	
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

	wp_enqueue_script( 'bldr-buggyfill', get_template_directory_uri() . '/js/viewport-units-buggyfill.js', array(), false, true );

	wp_enqueue_script( 'bldr-parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, false );

	wp_enqueue_script( 'bldr-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );

	wp_enqueue_script( 'bldr-slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), false, true );
	
	wp_enqueue_script( 'bldr-added-panel', get_template_directory_uri() . '/js/panel-class.js', array('jquery'), false, true ); 
	
	wp_enqueue_script( 'bldr-waypoint', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), false, true );
	
	wp_enqueue_script( 'bldr-skillbars', get_template_directory_uri() . '/js/skillbars.js', array('jquery'), false, true);
		
	wp_enqueue_script( 'bldr-details', get_template_directory_uri() . '/js/details.js', array('jquery'), false, true );
	
	wp_enqueue_script( 'bldr-odometer', get_template_directory_uri() . '/js/odometer.js', array('jquery'), false, true ); 
	
	
	if ( get_theme_mod('bldr_sticky_active') != 1 ) { 

	wp_enqueue_style( 'bldr-header-css', get_template_directory_uri() . '/css/headhesive.css' ); 
	wp_enqueue_script( 'bldr-headhesive', get_template_directory_uri() . '/js/headhesive.js', array('jquery'), false, true );
	wp_enqueue_script( 'bldr-sticky-head', get_template_directory_uri() . '/js/sticky-head.js', array('jquery'), false, true );
	
	}
	
	if ( get_theme_mod('bldr_animate') != 1 ) {
	wp_enqueue_script( 'bldr-animate', get_template_directory_uri() . '/js/animate-plus.js', array('jquery'), false, true );
	}  
	
	wp_enqueue_script( 'bldr-toggle', get_template_directory_uri() . '/js/toggle.js', array('jquery'), false, true );
	wp_enqueue_script( 'bldr-client-slider', get_template_directory_uri() . '/js/client-slider.js', array('jquery'), false, true); 
	
	if ( get_theme_mod('slider_speed') && is_page_template( 'page-home-slider.php' ) || get_theme_mod('slider_speed') && is_page_template( 'page-home-slider-full.php' ) ) {
	wp_enqueue_script( 'bldr-slider-speed', get_template_directory_uri() . '/js/slide-speed.js', array('jquery'), false, true); 
	} 
	
	if ( is_page_template( 'page-home-slider.php' ) || is_page_template( 'page-home-slider-full.php' ) ) { 
	wp_enqueue_script( 'bldr-hero-slider', get_template_directory_uri() . '/js/hero-slider.js', array('jquery'), false, true);
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
 * Load the front page widgets.
 */
if ( function_exists('siteorigin_panels_activate') ) {
	require get_template_directory() . "/widgets/bldr-clients.php";
	require get_template_directory() . "/widgets/bldr-projects.php";
	require get_template_directory() . "/widgets/bldr-testimonials.php";
	require get_template_directory() . "/widgets/bldr-services.php"; 
	require get_template_directory() . "/widgets/bldr-team.php";  
	require get_template_directory() . "/widgets/bldr-skills.php"; 
	require get_template_directory() . "/widgets/bldr-details.php"; 
	require get_template_directory() . "/widgets/bldr-home-news.php";
	require get_template_directory() . "/widgets/bldr-cta.php";  
	require get_template_directory() . "/widgets/bldr-columns.php";
}

/**
 * Let WooCommerce know we support it.
 */
add_theme_support( 'woocommerce' );

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



/**
 * Slider Post Type.
 */
function slider_post_type() {

	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'bldr' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'bldr' ),
		'menu_name'           => __( 'Slides', 'bldr' ),
		'parent_item_colon'   => __( 'Parent Item:', 'bldr' ),
		'all_items'           => __( 'All Slides', 'bldr' ),
		'view_item'           => __( 'View Slides', 'bldr' ),
		'add_new_item'        => __( 'Add New Slide', 'bldr' ),
		'add_new'             => __( 'Add New', 'bldr' ),
		'edit_item'           => __( 'Edit Slide', 'bldr' ),
		'update_item'         => __( 'Update Slide', 'bldr' ),
		'search_items'        => __( 'Search Slides', 'bldr' ),
		'not_found'           => __( 'Not found', 'bldr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'bldr' ),
	);
	$args = array(
		'label'               => __( 'slides', 'bldr' ),
		'description'         => __( 'Add a slide to your schedule.', 'bldr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_post_type', 0 );	


function slider_metaboxes( $meta_boxes ) {
    $prefix = '_slide_'; // Prefix for all fields
    $meta_boxes['slider_metabox'] = array(
        'id' => 'slider_metabox',
        'title' => __( 'Slide Information', 'bldr' ), 
        'pages' => array('slider'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
			array(
				'name' => 'Subheading Text',
				'id' => $prefix . 'subheading',
				'type' => 'text'
			),
			array(
				'name' => 'Button Text',
				'id' => $prefix . 'button',
				'type' => 'text'
			),
            array(
				'name' => __( 'Button URL', 'bldr' ),
				'id'   => $prefix . 'url',
				'type' => 'text_url',
			),
			array(
    			'name' => __( 'Display Title?', 'bldr' ), 
    			'desc' => __( 'Check this box if you do not want to display the slide title.', 'bldr' ),
    			'id' => $prefix . 'primary_title_checkbox', 
    			'type' => 'checkbox',
			),
			
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'slider_metaboxes' );


/**
 * Initialize custom meta 
 */
add_action( 'init', 'bldr_initialize_cmb_meta_boxes', 9999 );
function bldr_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
} 
