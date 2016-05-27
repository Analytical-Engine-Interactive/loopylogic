<?php
/**
 * Sensible admin functions
 *
 * @package bldr 
 */

// admin area styling
function bldr_custom_colors() { 
   echo '<style type="text/css">
          #setting-error-tgmpa {
			border-left: 4px solid #37b492;
			padding: 15px 20px;
			}
		  #setting-error-tgmpa p {
			font-size: 14px;
			font-weight: 300 !important; 
			color: #404040;
			margin: 0;
		  }
		  #setting-error-tgmpa p strong {
			font-weight: 300 !important;
		  }
		  #setting-error-tgmpa p strong a {
			font-size: 14px !important;
			text-decoration: none !important;
			color: #37b492 !important;
			font-weight: 600 !important;
		  }
			
         </style>';
}

add_action('admin_head', 'bldr_custom_colors'); 

/**
 *TGM Plugin activation.
 */
require_once get_template_directory() . '/panel/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'bldr_recommend_plugin' );
function bldr_recommend_plugin() {
 
    $plugins = array(
        // Include plugin from the WordPress Plugin Repository
		array(
			'name'		=> 'Page Builder by SiteOrigin', // http://wordpress.org/plugins/siteorigin-panels/
			'slug'		=> 'siteorigin-panels',
			'required'	=> false
		),
		
		array(
			'name'		=> 'SiteOrigin Widgets Bundle', // http://wordpress.org/plugins/so-widgets-bundle/ 
			'slug'		=> 'so-widgets-bundle', 
			'required'	=> false
		),
		
		array(
			'name'		=> 'Types - Custom Fields and Custom Post Types Management', // http://wordpress.org/plugins/so-widgets-bundle/ 
			'slug'		=> 'types',
			'required'	=> false
		),
		
    );
 
    tgmpa( $plugins);
 
}
