<?php
/**
 * BLDR Theme Customizer
 *
 * @package BLDR
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bldr_customize_register( $wp_customize ) {
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10; 
	
	//allows donations
    class bldr_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() {
        ?>

        <?php
        }
    }	
	
	// Pro
    $wp_customize->add_section(
        'bldr_theme_info',
        array(
            'title' => esc_html__('BLDR Pro', 'bldr'), 
            'priority' => 5, 
            'description' => __('We created a quick theme setup video to help you get started with BLDR. Watch the video by clicking the link below.</br></br><a href="http://modernthemes.net/documentation/bldr-documentation/bldr-pro-content-import-tutorial/" target="_blank">View Video</a>', 'bldr'),
    ));  
	
    //Donations section
    $wp_customize->add_setting('bldr_help', array( 
			'sanitize_callback' => 'bldr_no_sanitize',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
    ));
	
    $wp_customize->add_control( new bldr_Info( $wp_customize, 'bldr_help', array( 
        'section' => 'bldr_theme_info', 
        'settings' => 'bldr_help', 
        'priority' => 10
        ) )
    );
	
	// Nav menu toggle
	$wp_customize->add_setting( 'bldr_menu_toggle', array(
		'default' => 'label',  
    	'capability' => 'edit_theme_options',
    	'sanitize_callback' => 'bldr_sanitize_menu_toggle_display', 
  	));

  	$wp_customize->add_control( 'bldr_menu_toggle_radio', array(
    	'settings' => 'bldr_menu_toggle', 
    	'label'    => esc_html__( 'Menu Toggle Display', 'bldr' ), 
    	'section'  => 'bldr_nav',
    	'type'     => 'radio',
    	'choices'  => array(
      		'icon' => esc_html__( 'Icon', 'bldr' ),
      		'label' => esc_html__( 'Menu', 'bldr' ),
    )));
	
	// nav 
	$wp_customize->add_section( 'bldr_nav', array(
	'title' => esc_html( 'Navigation', 'bldr' ),
	'priority' => '13',
	));
	
	// Nav
	$wp_customize->add_setting( 'bldr_menu_name', array(
        'default'     => __( 'Menu', 'bldr' ),
        'sanitize_callback' => 'bldr_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_menu_name', array(
        'label'	   => esc_html__( 'Mobile Menu Name', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_menu_name', 
		'priority' => 25 
    )));
	
	$wp_customize->add_setting( 'bldr_nav_link_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_link_color', array(
        'label'	   => esc_html__( 'Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_link_color', 
		'priority' => 70 
    )));
	
	$wp_customize->add_setting( 'bldr_nav_link_hover_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_link_hover_color', array(
        'label'	   => esc_html__( 'Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_link_hover_color', 
		'priority' => 75
    )));
	
	$wp_customize->add_setting( 'bldr_nav_drop_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_color', array(
        'label'	   => esc_html__( 'Menu Drop Down Background Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_color',
		'priority' => 95  
    )));
	
	$wp_customize->add_setting( 'bldr_nav_accent_color', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_accent_color', array(
        'label'	   => esc_html__( 'Menu Drop Down Accent Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_accent_color',
		'priority' => 100
    )));
	
	$wp_customize->add_setting( 'bldr_nav_drop_link_color', array( 
        'default'     => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_link_color', array(
        'label'	   => esc_html__( 'Menu Drop Down Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_link_color',
		'priority' => 105
    )));
	
	$wp_customize->add_setting( 'bldr_nav_drop_link_bg_color', array( 
        'default'     => '#f5f5f5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_drop_link_bg_color', array(
        'label'	   => esc_html__( 'Menu Drop Down Link Background Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_nav_drop_link_bg_color',
		'priority' => 115
    )));
	
	$wp_customize->add_setting( 'bldr_page_nav_bg_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_nav_bg_color', array(
        'label'	   => esc_html__( 'Page Navigation Background Color', 'bldr' ), 
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_nav_bg_color', 
		'priority' => 120
    )));
	
	$wp_customize->add_setting( 'bldr_page_link_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_link_color', array(
        'label'	   => esc_html__( 'Page Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_link_color', 
		'priority' => 125
    )));
	
	$wp_customize->add_setting( 'bldr_page_link_hover_color', array( 
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_link_hover_color', array(
        'label'	   => esc_html__( 'Page Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_page_link_hover_color',
		'priority' => 130  
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu', array(
        'label'	   => esc_html__( 'Mobile Menu Button Color', 'bldr' ), 
        'section'  => 'bldr_nav',  
        'settings' => 'bldr_mobile_menu',
		'priority' => 135
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu_hover', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu_hover', array(
        'label'	   => esc_html__( 'Mobile Menu Button Hover Color', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_menu_hover',
		'priority' => 140
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu_bg', array( 
        'default'     => '#1e2022',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Background', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_menu_bg',
		'priority' => 145
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu_link', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu_link', array(
        'label'	   => esc_html__( 'Mobile Menu Link', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_menu_link',
		'priority' => 150
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_menu_sublink', array( 
        'default'     => '#999999',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_menu_sublink', array(
        'label'	   => esc_html__( 'Mobile Menu Sub Link', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_menu_sublink',
		'priority' => 155
    )));
	
	$wp_customize->add_setting( 'bldr_mobile_hover_bg', array( 
        'default'     => '#0e0e0e',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_mobile_hover_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Link Hover', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_mobile_hover_bg',
		'priority' => 158
    )));
	
	$wp_customize->add_setting( 'bldr_close_text', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_close_text', array(
        'label'	   => esc_html__( 'Close Menu Text', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_close_text',
		'priority' => 160
    )));
	
	$wp_customize->add_setting( 'bldr_close_bg', array( 
        'default'     => '#0e0e0e',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_close_bg', array(
        'label'	   => esc_html__( 'Close Menu Background', 'bldr' ), 
        'section'  => 'bldr_nav',
        'settings' => 'bldr_close_bg',
		'priority' => 165
    ))); 
	
	// Sticky Navigation
	$wp_customize->add_section( 'bldr_sticky_section' , array(  
	    'title'       => esc_html__( 'Sticky Navigation', 'bldr' ),
	    'priority'    => 15, 
	    'description' => esc_html__( 'Adjust your Sticky Navigation settings here.', 'bldr'),
	)); 
	
	$wp_customize->add_setting(
        'bldr_sticky_active',
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_sticky_active',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Check this box if you want to disable the Sticky Header option', 'bldr'),
            'section' => 'bldr_sticky_section',
            'priority' => 50,       
    ));
	
	$wp_customize->add_setting( 'bldr_nav_bg_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_nav_bg_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Background Color', 'bldr' ), 
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_nav_bg_color', 
		'priority' => 80
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_link_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_link_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Link Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_link_color', 
		'priority' => 85
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_link_hover_color', array( 
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_link_hover_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Link Hover Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_link_hover_color', 
		'priority' => 90  
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Menu Drop Down Background Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_color',
		'priority' => 95  
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_accent_color', array( 
        'default'     => '#039be5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_accent_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Menu Drop Down Accent Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_accent_color',
		'priority' => 100
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_link_color', array( 
        'default'     => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_link_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Menu Drop Down Link Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_link_color',
		'priority' => 105
    )));
	
	$wp_customize->add_setting( 'bldr_stickynav_drop_link_bg_color', array( 
        'default'     => '#f5f5f5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_stickynav_drop_link_bg_color', array(
        'label'	   => esc_html__( 'Sticky Navigation Menu Drop Down Link Background Color', 'bldr' ),
        'section'  => 'bldr_sticky_section',
        'settings' => 'bldr_stickynav_drop_link_bg_color',
		'priority' => 115
    ))); 

    // Logo upload
    $wp_customize->add_section( 'bldr_logo_section' , array(  
	    'title'       => esc_html__( 'Logo and Icons', 'bldr' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'bldr'),
	)); 

	$wp_customize->add_setting( 'bldr_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_logo', array( 
		'label'    => esc_html__( 'Home Logo', 'bldr' ), 
		'section'  => 'bldr_logo_section', 
		'settings' => 'bldr_logo',
		'priority' => 1,
	))); 
	
	$wp_customize->add_setting( 'bldr_logo_page', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_logo_page', array( 
		'label'    => esc_html__( 'Page Logo', 'bldr' ),
		'section'  => 'bldr_logo_section', 
		'settings' => 'bldr_logo_page',
		'priority' => 1,
	))); 
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'bldr_sanitize_text',
		'default'	        => '165'   
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'label'    => esc_html__( 'Change the width of the Logo in PX.', 'bldr' ),
		'description'    => esc_html__( 'Only enter numeric value', 'bldr' ),
		'section'  => 'bldr_logo_section', 
		'settings' => 'logo_size',  
		'type'	   => 'number',
		'priority'   => 2 
	)));
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/favicon.png'), 
			'sanitize_callback' => 'esc_url_raw',
	));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => esc_html__( 'Upload your favicon (16x16 pixels)', 'bldr' ),
			   'type' 			=> 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
    )));
	
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (144x144 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
    )));
	
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (114x114 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
    )));
	
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (72x72 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
    )));
	
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (57x57 pixels)', 'bldr' ),
               'type'           => 'image',
               'section'        => 'bldr_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
    )));
	
	// Slider Panel
	$wp_customize->add_panel( 'bldr_slider', array( 
    'priority'       => 23, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Slider Options', 'bldr' ),
    'description'    		 => esc_html__( 'If you select the home page template with a slider, edit your home page slider options.', 'bldr' ),
	));
	
	// Slider Section
	$wp_customize->add_section( 'bldr_slider_section', array( 
		'title'          => esc_html__( 'Slider', 'bldr' ),
		'priority'       => 22,
		'description' => esc_html__( 'Edit your Slider', 'bldr' ),
		'panel' => 'bldr_slider',
	));
	
	$wp_customize->add_setting('active_slider',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control(
    'active_slider', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Slider', 'bldr' ),
        'section' => 'bldr_slider_section', 
		'priority'   => 10
    ));
	
	// Slider Speed Number
	$wp_customize->add_setting( 'slider_speed' , 
	array( 
		'sanitize_callback' => 'bldr_sanitize_text',
		'default' => '5000',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_speed', array(
    'label' => esc_html__( 'Slider Speed', 'bldr' ),
	'description' => esc_html__( 'Change the speed of your slider in ms (1000 = 1s). Use only the numeric value. Default is 5000.', 'bldr' ),
    'section' => 'bldr_slider_section', 
    'settings' => 'slider_speed',
	'priority'   => 20
	))); 
	
	// Banner Section 
	$wp_customize->add_section( 'bldr_video_section', array(
		'title'          => esc_html__( 'Video Banner Option', 'bldr' ),
		'priority'       => 24,
		'description' => __( 'Please select the <strong>Home Page - Video</strong> template file for your Home page. Then upload your video files to your root folder and type the URLs (ex: video_banner.mp4) of the video files in the following boxes. If you leave them blank then the featured image of this page will be used instead. It is advised that you convert your video to mp4, webm, and ogv for full browser support, you can find more info on that <a href="http://www.syntaxxx.com/how-to-html5-background-video/">here</a>.</br></br> Video will only play on desktop screens, as mobile devices do not support them. On mobile the featured image is displayed (so you should always set one) and it should be at least 1920x1000 in size for best appearance.', 'bldr' ),
	));
	
	// MP4
	$wp_customize->add_setting( 'bldr_banner_mp4', 
	array(
		'sanitize_callback' => 'bldr_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_banner_mp4', array(
    'label' => esc_html__( 'Video Banner .mp4 File', 'bldr' ), 
	'description' => esc_html__( 'ex: video_banner.mp4', 'bldr' ),
    'section' => 'bldr_video_section',
    'settings' => 'bldr_banner_mp4', 
	'priority'   => 60
	)));
	
	// WEBM
	$wp_customize->add_setting( 'bldr_banner_webm', 
	array(
		'sanitize_callback' => 'bldr_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_banner_webm', array(
    'label' => esc_html__( 'Video Banner .webm File', 'bldr' ),
	'description' => esc_html__( 'ex: video_banner.webm', 'bldr' ),  
    'section' => 'bldr_video_section',
    'settings' => 'bldr_banner_webm', 
	'priority'   => 70
	)));
	
	// OGV
	$wp_customize->add_setting( 'bldr_banner_ogv', 
	array(
		'sanitize_callback' => 'bldr_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_banner_ogv', array(
    'label' => esc_html__( 'Video Banner .ogv File', 'bldr' ),
	'description' => esc_html__( 'ex: video_banner.ogv', 'bldr' ),  
    'section' => 'bldr_video_section', 
    'settings' => 'bldr_banner_ogv', 
	'priority'   => 80
	)));
	
	// Hero Panel
	$wp_customize->add_panel( 'bldr_hero_panel', array( 
    'priority'       => 22, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Hero Options', 'bldr' ),
    'description'    		 => esc_html__( 'If you select the home page template with a hero section, edit your homepage hero options.', 'bldr' ),
	));
	
	// Hero Section
	$wp_customize->add_section( 'bldr_hero_section', array(
		'title'          => esc_html__( 'Home Hero Section', 'bldr' ),
		'priority'       => 22, 
		'description' => esc_html__( 'Edit your Home Page Hero', 'bldr'), 
		'panel' => 'bldr_hero_panel' 
	));
	
	$wp_customize->add_setting('active_hero',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_hero', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Hero', 'bldr' ),  
        'section' => 'bldr_hero_section', 
		'priority'   => 10
    )); 
	
	// Main Background
	$wp_customize->add_setting( 'bldr_main_bg', array( 
		'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/bldr.jpg'),  
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bldr_main_bg', array( 
		'label'    => esc_html__( 'Hero Image', 'bldr' ), 
		'section'  => 'bldr_hero_section',  
		'settings' => 'bldr_main_bg', 
		'priority'   => 20
	) ) ); 
	
	// First Heading
	$wp_customize->add_setting( 'bldr_first_heading' ,
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_first_heading', array( 
    'label' => esc_html__( 'Hero Heading', 'bldr' ),    
    'section' => 'bldr_hero_section',
    'settings' => 'bldr_first_heading',
	'priority'   => 30
	) ) );
	
	// Second Heading
	$wp_customize->add_setting( 'bldr_second_heading' ,
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_second_heading', array( 
    'label' => esc_html__( 'Hero Second Heading', 'bldr' ),    
    'section' => 'bldr_hero_section',
    'settings' => 'bldr_second_heading', 
	'priority'   => 40
	) ) );
	
	// Hero Button Text
	$wp_customize->add_setting( 'bldr_hero_button_text',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_hero_button_text', array( 
    'label' => esc_html__( 'Hero Button Text', 'bldr' ),   
    'section' => 'bldr_hero_section',
    'settings' => 'bldr_hero_button_text',  
	'priority'   => 45 
	) ) );
	
	// Page Drop Downs 
	$wp_customize->add_setting('hero_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'bldr_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_button_url', array( 
    	'label' => esc_html__( 'Hero Button URL', 'bldr' ), 
    	'section' => 'bldr_hero_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'hero_button_url',
		'priority'   => 50 
	)));
	
	// Page URL
	$wp_customize->add_setting( 'page_url_text',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	));  

	$wp_customize->add_control( 'page_url_text', array( 
		'type'     => 'url',
		'label'    => esc_html__( 'External URL Option', 'bldr' ), 
		'description' => esc_html__( 'If you use an external URL, leave the Hero Button URL Link above empty. Must include http:// before any URL.', 'bldr' ),
		'section'  => 'bldr_hero_section',   
		'settings' => 'page_url_text',
		'priority'   => 60
	));
	
	// Social Panel
	$wp_customize->add_panel( 'bldr_footer_panel', array(
    'priority'       => 38,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer Options', 'bldr' ),
    'description'    		 => esc_html__( 'Edit your footer options', 'bldr' ),
	)); 
	
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Footer', 'bldr' ),
    	'priority' => 10,
    	'description' => esc_html__( 'Customize your footer area', 'bldr' ),
		'panel' => 'bldr_footer_panel'
	) );
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'bldr_footerid',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_footerid', array(
    'label' => esc_html__( 'Footer Byline Text', 'bldr' ), 
    'section' => 'footer-custom', 
    'settings' => 'bldr_footerid',
	'priority'   => 10
	)));
	
	$wp_customize->add_setting( 'bldr_footer_color', array( 
        'default'     => '#161B1F',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_color', array(
        'label'	   => esc_html__( 'Footer Background Color', 'bldr'),
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_color',
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'bldr_footer_heading_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_heading_color', array(
        'label'	   => esc_html__( 'Footer Heading Color', 'bldr'), 
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_heading_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'bldr_footer_text_color', array( 
        'default'     => '#6c7980',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_text_color', array(
        'label'	   => esc_html__( 'Footer Text Color', 'bldr'),
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_text_color', 
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'bldr_footer_link_color', array( 
        'default'     => '#cccccc', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_footer_link_color', array(
        'label'	   => esc_html__( 'Footer Link Color', 'bldr'), 
        'section'  => 'footer-custom',
        'settings' => 'bldr_footer_link_color', 
		'priority' => 50
    )));
	
	// Social Panel
	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Social Section', 'bldr' ),
    'description'    		 => esc_html__( 'Edit your social media icons', 'bldr' ),
	)); 
	
	// Social Section 
	$wp_customize->add_section( 'bldr_settings', array(
    	'title'          => esc_html__( 'Social Media Icons', 'bldr' ),
        'priority'       => 38,
		'panel' => 'social_panel',  
    ) );
	
	// Footer Social Section 
	$wp_customize->add_setting('active_footer_social',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_checkbox', 
	)); 
	
	$wp_customize->add_control( 
    'active_footer_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Social Section', 'bldr' ), 
        'section' => 'bldr_settings', 
		'priority'   => 5
    ));
	
	// Social Text
	$wp_customize->add_setting( 'footer_social_text',
	   array(
	       'sanitize_callback' => 'bldr_sanitize_text',
	   )); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_text', array(
		'label'    => esc_html__( 'Social Heading', 'bldr' ),
		'section'  => 'bldr_settings',
		'settings' => 'footer_social_text', 
		'priority'   => 20
	)));
		
	$wp_customize->add_setting( 'bldr_social_bg_color', array( 
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',  
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_bg_color', array(
        'label'	   => esc_html__( 'Social Background Color', 'bldr'), 
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_bg_color', 
		'priority' => 6
    )));
	
	$wp_customize->add_setting( 'bldr_social_border_color', array( 
        'default'     => '#dadada', 
        'sanitize_callback' => 'sanitize_hex_color',  
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_border_color', array(
        'label'	   => esc_html__( 'Social Border Color', 'bldr'), 
        'section'  => 'bldr_settings', 
        'settings' => 'bldr_social_border_color', 
		'priority' => 6
    )));
	
	// Social Icon Colors
	$wp_customize->add_setting( 'bldr_social_color', array( 
        'default'     => '#888888', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'bldr' ),
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_color', 
		'priority' => 6
    )));
	
	$wp_customize->add_setting( 'bldr_social_color_hover', array( 
        'default'     => '#039BE5', 
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'bldr' ),
        'section'  => 'bldr_settings',
        'settings' => 'bldr_social_color_hover', 
		'priority' => 6
    )));
	
	$wp_customize->add_setting(
        'bldr_social_new_window', 
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_social_new_window',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Open links in new window?', 'bldr'),
            'section'  => 'bldr_settings',
            'priority' => 5,       
    ));
	
	// Facebook
	$wp_customize->add_setting( 'bldr_fb',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_fb', array(
		'label'    => esc_html__( 'Facebook URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_fb',
		'priority'   => 30
	))); 
	
	// Twitter
	$wp_customize->add_setting( 'bldr_twitter',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_twitter', array(
		'label'    => esc_html__( 'Twitter URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_twitter',
		'priority'   => 40
	))); 
	
	// LinkedIn
	$wp_customize->add_setting( 'bldr_linked',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_linked', array(
		'label'    => esc_html__( 'LinkedIn URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_linked',
		'priority'   => 50
	)));
	
	// Google Plus
	$wp_customize->add_setting( 'bldr_google',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_google', array(
		'label'    => esc_html__( 'Google Plus URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_google',
		'priority'   => 60
	)));
	
	// Instagram
	$wp_customize->add_setting( 'bldr_instagram',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_instagram', array(
		'label'    => esc_html__( 'Instagram URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_instagram',
		'priority'   => 70
	)));
	
	// Vine
	$wp_customize->add_setting( 'bldr_vine',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_vine', array(
		'label'    => esc_html__( 'Vine URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_vine', 
		'priority'   => 75 
	)));
	
	// Snapchat
	$wp_customize->add_setting( 'bldr_snapchat',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_snapchat', array(
		'label'    => esc_html__( 'Snapchat URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_snapchat',
		'priority'   => 78
	))); 
	
	// Flickr
	$wp_customize->add_setting( 'bldr_flickr',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_flickr', array(
		'label'    => esc_html__( 'Flickr URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_flickr',
		'priority'   => 80
	)));
	
	// Pinterest
	$wp_customize->add_setting( 'bldr_pinterest',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_pinterest', array(
		'label'    => esc_html__( 'Pinterest URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_pinterest',
		'priority'   => 90
	)));
	
	// Youtube
	$wp_customize->add_setting( 'bldr_youtube',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_youtube', array(
		'label'    => esc_html__( 'YouTube URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_youtube',  
		'priority'   => 100
	)));
	
	// Vimeo
	$wp_customize->add_setting( 'bldr_vimeo',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_vimeo', array(
		'label'    => esc_html__( 'Vimeo URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_vimeo',
		'priority'   => 110
	)));
	
	// Tumblr
	$wp_customize->add_setting( 'bldr_tumblr',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_tumblr', array(
		'label'    => esc_html__( 'Tumblr URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_tumblr', 
		'priority'   => 120
	)));
	
	// Dribbble
	$wp_customize->add_setting( 'bldr_dribbble',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_dribbble', array(
		'label'    => esc_html__( 'Dribbble URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_dribbble',
		'priority'   => 130
	)));
	
	// behance
	$wp_customize->add_setting( 'bldr_behance',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_behance', array(
		'label'    => esc_html__( 'Behance URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_behance',
		'priority'   => 132
	)));
	
	// 500px
	$wp_customize->add_setting( 'bldr_500px',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_500px', array(
		'label'    => esc_html__( '500px URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_500px',
		'priority'   => 134
	)));
	
	// VK
	$wp_customize->add_setting( 'bldr_vk',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_vk', array(
		'label'    => esc_html__( 'VK URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_vk',
		'priority'   => 135
	)));
	
	// yelp
	$wp_customize->add_setting( 'bldr_yelp',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_yelp', array(
		'label'    => esc_html__( 'Yelp URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_yelp',
		'priority'   => 140
	)));
	
	// xing
	$wp_customize->add_setting( 'bldr_xing',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_xing', array(
		'label'    => esc_html__( 'Xing URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_xing',
		'priority'   => 145
	)));
	
	// skype
	$wp_customize->add_setting( 'bldr_skype',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_skype', array(
		'label'    => esc_html__( 'Skype URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_skype',
		'priority'   => 150
	)));
	
	// deviantart
	$wp_customize->add_setting( 'bldr_deviant',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_deviant', array(
		'label'    => esc_html__( 'DeviantArt URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_deviant',
		'priority'   => 155
	)));
	
	// reddit
	$wp_customize->add_setting( 'bldr_reddit',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_reddit', array(
		'label'    => esc_html__( 'Reddit URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_reddit',
		'priority'   => 160
	)));
	
	// github
	$wp_customize->add_setting( 'bldr_github',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_github', array(
		'label'    => esc_html__( 'Github URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_github',
		'priority'   => 165
	)));
	
	// codepen
	$wp_customize->add_setting( 'bldr_codepen',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_codepen', array(
		'label'    => esc_html__( 'Codepen URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_codepen',
		'priority'   => 165
	)));
	
	// spotify
	$wp_customize->add_setting( 'bldr_spotify',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_spotify', array(
		'label'    => esc_html__( 'Spotify URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_spotify',
		'priority'   => 170
	)));
	
	// soundcloud
	$wp_customize->add_setting( 'bldr_soundcloud',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_soundcloud', array(
		'label'    => esc_html__( 'SoundCloud URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_soundcloud',
		'priority'   => 175
	)));
	
	// lastfm
	$wp_customize->add_setting( 'bldr_lastfm',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_lastfm', array(
		'label'    => esc_html__( 'lastFM URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_lastfm',
		'priority'   => 180
	)));
	
	// stumbleupon
	$wp_customize->add_setting( 'bldr_stumble',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_stumble', array(
		'label'    => esc_html__( 'StumbleUpon URL:', 'bldr' ),
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_stumble',
		'priority'   => 185
	)));
	
	// Weibo
	$wp_customize->add_setting( 'bldr_weibo',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_weibo', array(
		'label'    => esc_html__( 'Weibo URL:', 'bldr' ),
		'section'  => 'bldr_settings',  
		'settings' => 'bldr_weibo', 
		'priority'   => 188
	))); 
	
	// Phone Number
	$wp_customize->add_setting( 'bldr_phone_number_icon',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_phone_number_icon', array(
		'label'    => esc_html__( 'Phone Number:', 'bldr' ),
		'section'  => 'bldr_settings',
		'settings' => 'bldr_phone_number_icon',
		'priority'   => 190
	)));
	
	// Email
	$wp_customize->add_setting( 'bldr_email_icon', 
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_email_icon', array(
		'label'    => esc_html__( 'Email:', 'bldr' ),
		'section'  => 'bldr_settings',
		'settings' => 'bldr_email_icon',
		'priority'   => 195
	))); 
	
	// RSS
	$wp_customize->add_setting( 'bldr_rss',
	    array(
	        'sanitize_callback' => 'bldr_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_rss', array(
		'label'    => esc_html__( 'RSS URL:', 'bldr' ), 
		'section'  => 'bldr_settings', 
		'settings' => 'bldr_rss',
		'priority'   => 200
	)));
	
	
	// Fonts  
    $wp_customize->add_section(
        'bldr_typography',
        array(
            'title' => esc_html__('Google Fonts', 'bldr' ),   
            'priority' => 45,
    ));
	
    $font_choices = 
        array(
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Lobster:400' => 'Lobster',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Mandali:400' => 'Mandali',
			'Vesper Libre:400,700' => 'Vesper Libre',
			'NTR:400' => 'NTR',
			'Dhurjati:400' => 'Dhurjati',
			'Faster One:400' => 'Faster One',
			'Mallanna:400' => 'Mallanna',
			'Averia Libre:400,300,700,400italic,700italic' => 'Averia Libre',
			'Galindo:400' => 'Galindo',
			'Titan One:400' => 'Titan One',
			'Abel:400' => 'Abel',
			'Nunito:400,300,700' => 'Nunito',
			'Poiret One:400' => 'Poiret One',
			'Signika:400,300,600,700' => 'Signika',
			'Muli:400,400italic,300italic,300' => 'Muli',
			'Play:400,700' => 'Play',
			'Bree Serif:400' => 'Bree Serif',
			'Archivo Narrow:400,400italic,700,700italic' => 'Archivo Narrow',
			'Cuprum:400,400italic,700,700italic' => 'Cuprum',
			'Noto Serif:400,400italic,700,700italic' => 'Noto Serif',
			'Pacifico:400' => 'Pacifico',
			'Alegreya:400,400italic,700italic,700,900,900italic' => 'Alegreya',
			'Asap:400,400italic,700,700italic' => 'Asap',
			'Maven Pro:400,500,700' => 'Maven Pro',
			'Dancing Script:400,700' => 'Dancing Script',
			'Karla:400,700,400italic,700italic' => 'Karla',
			'Merriweather Sans:400,300,700,400italic,700italic' => 'Merriweather Sans',
			'Exo:400,300,400italic,700,700italic' => 'Exo',
			'Varela Round:400' => 'Varela Round',
			'Cabin Condensed:400,600,700' => 'Cabin Condensed',
			'PT Sans Caption:400,700' => 'PT Sans Caption',
			'Cinzel:400,700' => 'Cinzel',
			'News Cycle:400,700' => 'News Cycle',
			'Inconsolata:400,700' => 'Inconsolata',
			'Architects Daughter:400' => 'Architects Daughter',
			'Quicksand:400,700,300' => 'Quicksand',
			'Titillium Web:400,300,400italic,700,700italic' => 'Titillium Web',
			'Quicksand:400,700,300' => 'Quicksand',
			'Monda:400,700' => 'Monda',
			'Didact Gothic:400' => 'Didact Gothic',
			'Coming Soon:400' => 'Coming Soon',
			'Ropa Sans:400,400italic' => 'Ropa Sans',
			'Tinos:400,400italic,700,700italic' => 'Tinos',
			'Glegoo:400,700' => 'Glegoo',
			'Pontano Sans:400' => 'Pontano Sans',
			'Fredoka One:400' => 'Fredoka One',
			'Lobster Two:400,400italic,700,700italic' => 'Lobster Two',
			'Quattrocento Sans:400,700,400italic,700italic' => 'Quattrocento Sans',
			'Covered By Your Grace:400' => 'Covered By Your Grace',
			'Changa One:400,400italic' => 'Changa One',
			'Marvel:400,400italic,700,700italic' => 'Marvel',
			'BenchNine:400,700,300' => 'BenchNine',
			'Orbitron:400,700,500' => 'Orbitron',
			'Crimson Text:400,400italic,600,700,700italic' => 'Crimson Text',
			'Bangers:400' => 'Bangers',
			'Courgette:400' => 'Courgette',
			'Dekko:400' => 'Dekko',
    );
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'bldr_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
            'description' => esc_html__('Select your desired font for the headings. Source Sans Pro is the default Heading font.', 'bldr'),
            'section' => 'bldr_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'bldr_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
            'description' => esc_html__( 'Select your desired font for the body. Source Sans Pro is the default Body font.', 'bldr' ), 
            'section' => 'bldr_typography',   
            'choices' => $font_choices
    ));
	
	// Colors
	$wp_customize->add_setting( 'bldr_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'bldr' ),
        'section'  => 'colors',
        'settings' => 'bldr_text_color',
		'priority' => 10 
    )));
	
	$wp_customize->add_setting( 'bldr_custom_color', array( 
        'default'     => '#039BE5', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_custom_color', array(
        'label'	   => esc_html__( 'Theme Color', 'bldr' ),
        'section'  => 'colors',
        'settings' => 'bldr_custom_color', 
		'priority' => 20
    )));
	
    $wp_customize->add_setting( 'bldr_link_color', array( 
        'default'     => '#039BE5',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'bldr'),
        'section'  => 'colors',
        'settings' => 'bldr_link_color',
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'bldr_hover_color', array(
        'default'     => '#039BE5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_hover_color',
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'bldr_site_title_color', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_site_title_color',
		'priority' => 40 
    )));
	
	$wp_customize->add_setting( 'bldr_page_site_title_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_page_site_title_color', array(
        'label'	   => esc_html__( 'Page + Sticky Nav Site Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_page_site_title_color',
		'priority' => 43
    )));
	
	$wp_customize->add_setting( 'bldr_blockquote', array(
        'default'     => '#f5f5f5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_blockquote', array(
        'label'	   => esc_html__( 'Blockquote Background', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_blockquote', 
		'priority' => 45
    )));
	
	$wp_customize->add_setting( 'bldr_blockquote_border', array(
        'default'     => '#222222', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_blockquote_border', array(
        'label'	   => esc_html__( 'Blockquote Accent Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_blockquote_border', 
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'bldr_entry', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_entry', array(
        'label'	   => esc_html__( 'Entry Title Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_entry',  
		'priority' => 55
    )));
	
	$wp_customize->add_setting( 'bldr_button_text', array( 
        'default'     => '#FFFFFF', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_button_text', array(
        'label'	   => esc_html__( 'Button Text Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_button_text',  
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'bldr_skill_bar', array( 
        'default'     => '#039be5', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bldr_skill_bar', array(
        'label'	   => esc_html__( 'Skill Bar Color', 'bldr' ), 
        'section'  => 'colors',
        'settings' => 'bldr_skill_bar',  
		'priority' => 65
    ))); 
	
	//Animations
	$wp_customize->add_section( 'bldr_animations' , array(  
	    'title'       => esc_html__( 'Animations', 'bldr' ),
	    'priority'    => 50,  
	    'description' => esc_html__( 'We can make things fly across the screen.', 'bldr' ),
	)); 
	
    $wp_customize->add_setting(
        'bldr_animate',
        array(
            'sanitize_callback' => 'bldr_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'bldr_animate',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Check this box if you want to disable the animations.', 'bldr'),
            'section' => 'bldr_animations',  
            'priority' => 1,           
    ));
	
	// Choose excerpt or full content on blog
    $wp_customize->add_section( 'bldr_layout_section' , array( 
	    'title'       => esc_html__( 'Blog Layout', 'bldr' ),
	    'priority'    => 51,   
	    'description' => esc_html__( 'Change how BLDR displays posts', 'bldr' ),
	));

	$wp_customize->add_setting( 'bldr_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'bldr_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bldr_post_content', array(
		'label'    => esc_html__( 'Post content', 'bldr' ),
		'section'  => 'bldr_layout_section',
		'settings' => 'bldr_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content', 
			),
	)));
	
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '50',
    )); 
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'bldr_layout_section',
        'label'       => esc_html__('Excerpt length', 'bldr'),
        'description' => esc_html__('Choose your excerpt length here. Default: 50 words', 'bldr'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5
        ), 
	));
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	
}
add_action( 'customize_register', 'bldr_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bldr_customize_preview_js() {
	wp_enqueue_script( 'bldr_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bldr_customize_preview_js' );

