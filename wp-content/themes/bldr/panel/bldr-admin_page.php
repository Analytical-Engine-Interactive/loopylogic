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
		printf( esc_html__('Thank you for using BLDR!', 'bldr' ));  
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf( esc_html__('BLDR Theme Setup', 'bldr' ));
        echo '</h2>';
		
		echo '<p>';
		printf( esc_html__('We created a quick theme setup video to help you get started with BLDR. Watch the video by clicking the link below.', 'bldr' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/bldr-documentation/bldr-quick-setup-tutorial/" target="_blank"><button>';  
		printf( esc_html__('View Video', 'bldr' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('Documentation', 'bldr' ));
        echo '</h2>';  
		
		echo '<p>';
		printf( esc_html__('Check out our BLDR Documentation to learn how to use BLDR and for tutorials on theme functions. Click the link below.', 'bldr' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/bldr-documentation/" target="_blank"><button>'; 
		printf( esc_html__('Read Docs', 'bldr' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('About ModernThemes', 'bldr' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf( esc_html__('Want more to learn more about ModernThemes? Let us help you at modernthemes.net.', 'bldr' ));
		echo '</p>';
		
		echo '<a href="http://modernthemes.net/" target="_blank"><button>';
		printf( esc_html__('About Us', 'bldr' ));
		echo '</button></a></div></div>';
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Want more features? Go Pro.', 'bldr' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>';
		printf( esc_html__('Home Page Layouts', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('BLDR Pro comes with more packaged home template files including pre-made layouts ideal for businesses and creatives.', 'bldr' ));
		echo '</p></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
        printf( esc_html__('Sliders & Video', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Add a slider or video to your homepage and choose between a regular slider, fullscreen slider or video template.', 'bldr' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>';
		printf( esc_html__('More Theme Options', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Add information with home widget sections for a contact form, skill bars, details spinner, and more optional animations effects.', 'bldr' )); 
		echo '</p></div> '; 
            
        echo '<div class="col-1-4"><i class="fa fa-shopping-cart"></i><h4>';
		printf( esc_html__( 'WooCommerce', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Turn your website into a powerful eCommerce machine. BLDR Pro is fully compatible with WooCommerce.', 'bldr' ));
		echo '</p></div></div>';
            
        echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( esc_html__( 'More Sidebars', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'bldr' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( esc_html__( 'Access an additional 65 Google fonts with BLDR Pro right in the WordPress customizer.', 'bldr' ));
		echo '</p></div>'; 
		
       	echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>';
		printf( esc_html__( 'PSD Files', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'bldr' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'bldr' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'bldr' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="http://modernthemes.net/wordpress-themes/bldr-pro/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'View Pro Version', 'bldr' ));
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
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">';
		printf( esc_html__( 'Get Premium Membership', 'bldr' )); 
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">'; 
		printf( esc_html__( 'Changelog' , 'bldr' ) );
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.3 - Fix: number input bug in theme customizer', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.2 - Fix: removed http from Skype social icons', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.1 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';
		printf( esc_html__('1.2.0 - Update: adds one-click option to add Child Theme. Go to Appearance => Editor and activate child theme from notification.', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.9 - Update: blog page will go fullwidth if no sidebar active', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.7 - Fix: minor bug fixes', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.7 - Update: added many new social icon options to theme customizer', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.5 - updated demo link in description', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.4 - updated font awesome icons to 4.5', 'bldr' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.2 - added option to open social icon links in new window', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.1.1 - added Navigation section that was deleted when WordPress switched to 4.3. Removed color options from Menu Locations.', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.0 - minor bug fixes', 'bldr' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.21 - updated Font Awesome icons', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.20 - minor improvements, added pt_BR and ru_RU language translation', 'bldr' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.17 - added Mobile Menu color options. Go to Apperance -> Customize and click under Navigation to edit colors.', 'bldr' ));
		echo '</p></div></div>';  
		
    }
?>