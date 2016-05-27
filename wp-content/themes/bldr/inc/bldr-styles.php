<?php
/**
 * BLDR Pro Theme Customizer 
 *
 * @package bldr
 */

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function bldr_add_customizer_css() { 
	
	$color = ( get_theme_mod( 'bldr_link_color', __( '#039BE5', 'bldr' ) ) );
	
	?>
	<!-- BLDR customizer CSS --> 
	<style>
		
		<?php if ( get_theme_mod( 'bldr_link_color' ) ) : ?>
		a { color: <?php echo $color; ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_hover_color' ) ) : ?>
		a:hover {
			color: <?php echo esc_attr( get_theme_mod( 'bldr_hover_color', __( '#039BE5', 'bldr' ) )) ?>;   
		}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_color' ) ) : ?>
		.social-media-icons .fa { color: <?php echo esc_attr( get_theme_mod( 'bldr_social_color', __( '#888888', 'bldr' ) )) ?>; -o-transition:.5s;
  		 }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_color_hover' ) ) : ?>
		.social-media-icons .fa:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_social_color_hover', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_social_bg_color' ) ) : ?>
		.social-bar { background: <?php echo esc_attr( get_theme_mod( 'bldr_social_bg_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_social_border_color' ) ) : ?>
		.social-bar { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_social_border_color', __( '#dadada', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_color' ) ) : ?>
		.site-footer { background: <?php echo esc_attr( get_theme_mod( 'bldr_footer_color', __( '#161B1F', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_text_color' ) ) : ?>
		.site-footer { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_text_color', __( '#6c7980', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_heading_color' ) ) : ?>
		.site-footer .widget-title { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_heading_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_footer_link_color' ) ) : ?>
		.site-footer a { color: <?php echo esc_attr( get_theme_mod( 'bldr_footer_link_color', __( '#cccccc', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_custom_color' ) ) : ?>
		.services .service-icon { background: <?php echo esc_attr( get_theme_mod( 'bldr_custom_color', __( '#039BE5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_site_title_color' ) ) : ?>
		.site-header-home h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'bldr_site_title_color', __( '#efefef', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_text_color' ) ) : ?> 
		body, button, input, select, textarea { color: <?php echo esc_attr( get_theme_mod( 'bldr_text_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_link_color' ) ) : ?>
		.site-header-home .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_link_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_link_hover_color' ) ) : ?>
		.site-header-home .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_link_hover_color', __( '#ffffff', 'bldr' ) )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_nav_bg_color' ) ) : ?>
		.banner--clone { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_bg_color', __( '#ffffff', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_link_color' ) ) : ?>
		.banner--clone .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_link_color', __( '#404040', 'bldr' ) )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_link_hover_color' ) ) : ?> 
		.banner--clone .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_link_hover_color', __( '#404040', 'bldr' ) )) ?> !important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_color' ) ) : ?>
		.banner--clone .main-navigation ul ul { background: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_color', __( '#ffffff', 'bldr' ) )) ?> !important; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_stickynav_accent_color' ) ) : ?> 
		.banner--clone .main-navigation ul ul { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_accent_color', __( '#039be5', 'bldr' ) )) ?>!important; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_link_color' ) ) : ?> 
		.banner--clone .main-navigation ul ul a { color: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_link_color', __( '#666666', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_stickynav_drop_link_bg_color' ) ) : ?>
		.banner--clone .main-navigation ul ul a:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_stickynav_drop_link_bg_color', __( '#f5f5f5', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_nav_bg_color' ) ) : ?>
		.site-header { background: <?php echo esc_attr( get_theme_mod( 'bldr_page_nav_bg_color', __( '#ffffff', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_link_color' ) ) : ?>
		.site-header .main-navigation a { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_link_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_link_hover_color' ) ) : ?>
		.site-header .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_link_hover_color', __( '#404040', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_color' ) ) : ?>
		.main-navigation ul ul { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_color', __( '#ffffff', 'bldr' ) )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_accent_color' ) ) : ?>
		.main-navigation ul ul { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_accent_color', __( '#039be5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_link_color' ) ) : ?>
		.main-navigation ul ul a { color: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_link_color', __( '#666666', 'bldr' ) )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_nav_drop_link_bg_color' ) ) : ?>
		.main-navigation ul ul a:hover { background: <?php echo esc_attr( get_theme_mod( 'bldr_nav_drop_link_bg_color', __( '#f5f5f5', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_blockquote' ) ) : ?>
		blockquote { background: <?php echo esc_attr( get_theme_mod( 'bldr_blockquote', __( '#f5f5f5', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_blockquote_border' ) ) : ?>
		blockquote { border-color:<?php echo esc_attr( get_theme_mod( 'bldr_blockquote_border', __( '#222222', 'bldr' ) )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_entry' ) ) : ?> 
		.entry-title { color: <?php echo esc_attr( get_theme_mod( 'bldr_entry', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_page_site_title_color' ) ) : ?> 
		.banner--clone h1.site-title a, h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'bldr_page_site_title_color', __( '#404040', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_button_text' ) ) : ?>  
		 button, input[type="button"], input[type="reset"], input[type="submit"] { color: <?php echo esc_attr( get_theme_mod( 'bldr_button_text', __( '#FFFFFF', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu' ) ) : ?>  
		 .navigation-container button, .navigation-container input[type="button"], .navigation-container input[type="reset"], .navigation-container input[type="submit"] { background-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu' ) ) : ?>  
		 .navigation-container button, .navigation-container input[type="button"], .navigation-container input[type="reset"], .navigation-container input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu_hover' ) ) : ?>  
		 .navigation-container button:hover, .navigation-container input[type="button"]:hover, .navigation-container input[type="reset"]:hover, .navigation-container input[type="submit"]:hover { background-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu_hover', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'bldr_mobile_menu_hover' ) ) : ?>  
		 .navigation-container button:hover, .navigation-container input[type="button"]:hover, .navigation-container input[type="reset"]:hover, .navigation-container input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'bldr_mobile_menu_hover', __( '#039be5', 'bldr' ) )) ?>; } 
		<?php endif; ?>
		  
	</style> 
<?php } 

add_action( 'wp_head', 'bldr_add_customizer_css' );
