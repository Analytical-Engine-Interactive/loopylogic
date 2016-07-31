<?php


function bldr_admin_page_styles() {
    wp_enqueue_style( 'bldr-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'bldr-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'bldr_admin_page_styles' ); 

     
    add_action('admin_menu', 'bldr_setup_menu');
     
    function bldr_setup_menu(){
    	add_theme_page( esc_html__('BLDR Theme Details', 'bldr' ), esc_html__('BLDR Theme Details', 'bldr' ), 'edit_theme_options', 'bldr-setup', 'bldr_init' ); 
    }  
     
 	function bldr_init(){ 
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">';
		printf(esc_html__('Thank you for using BLDR!', 'bldr' )); 
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf(esc_html__('BLDR Pro Theme Setup', 'bldr' )); 
        echo '</h2>';
		
		echo '<p>';
		printf(__('We created a quick theme setup video to help you get started with BLDR. Watch the video <a href="http://modernthemes.net/documentation/bldr-documentation/bldr-pro-content-import-tutorial/" target="_blank">here</a>', 'bldr' )); 
		echo '</p>';
		
		echo '<a href="http://modernthemes.net/documentation/bldr-documentation/bldr-pro-content-import-tutorial/" target="_blank"><button>'; 
		printf(esc_html__('View Video', 'bldr' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf(esc_html__('Documentation', 'bldr' ));
        echo '</h2>';  
		
		echo '<p>';
		printf(__('Check out our <a href="http://modernthemes.net/documentation/bldr-pro-documentation/" target="_blank">BLDR Pro Documentation</a> to learn how to use BLDR Pro and for tutorials on theme functions. ', 'bldr' ));  
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/bldr-pro-documentation/" target="_blank"><button>';
		printf(esc_html__('Read Pro Docs', 'bldr' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf(esc_html__('About ModernThemes', 'bldr' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf(__('Want more to learn more about ModernThemes? Let us help you at <a href="http://modernthemes.net/" target="_blank">modernthemes.net</a>.', 'bldr' ));
		echo '</p>';
		
		echo '<a href="http://modernthemes.net/" target="_blank"><button>'; 
		printf(esc_html__('About Us', 'bldr' ));
		echo '</button></a></div></div>'; 
		
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'bldr' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'bldr' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'bldr' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'bldr' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( esc_html__( 'Access to New Themes', 'bldr' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'bldr' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="//modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'bldr' ));
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">';
		printf( esc_html__( 'Changelog' , 'bldr' ) ); 
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.3 - Update: added option in theme customizer to select a menu icon as the mobile menu toggle button display. Go to Appearance => Customizer => Navigation to pick between icon or label.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.2 - Fix: number input bug in theme customizer', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.1 - Fix: removed http from Skype social icons', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.0 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.9 - Update: adds one-click option to add Child Theme. Go to Appearance => Editor and activate child theme from notification.', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.8 - Update: blog page will go fullwidth if no sidebar active', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.7 - Update: added many new social icon options to theme customizer', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.6 - minor bug fix', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.5 - updated font awesome icons to 4.5', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.4 - new theme update method', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.3 - added options to customize Mobile Menu colors in Appearance => Customize => Navigation', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.2 - add option to open social icon links in new window', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.1 - added Navigation section that was deleted when WordPress switched to 4.3. Removed color options from Menu Locations.', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.0 - bug fixes', 'bldr' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.12 - added category options for Services, Projects, Team Members, Testimonials, Clients Post Types and content widgets', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.11 - Updated Font Awesome icons', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.10 - Added slides option that will hide the title from displaying', 'bldr' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.9 - Widget "See All" buttons will not display if you do not populate a URL or button text', 'bldr' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf(esc_html__('1.0.8 - added Mobile Menu color options. Go to Apperance -> Customize and click under Navigation to edit colors', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.5 - added option to change number of columns in Columns widget. Just enter number in field and update page (Ex. enter in 4 for four columns)', 'bldr' ));
		echo '</p></div></div>'; 
		
    }
?>