<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BLDR
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_144') ) : ?>
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_theme_mod('apple_touch_144')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_114') ) : ?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_theme_mod('apple_touch_114')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_72') ) : ?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_theme_mod('apple_touch_72')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_57') ) : ?>
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_mod('apple_touch_57')); ?>" />
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bldr' ); ?></a>

	<header id="masthead" class="site-header-home" role="banner">
    	<div class="grid grid-pad header-overflow">
			<div class="site-branding">
        
			<?php if ( get_theme_mod( 'bldr_logo' ) ) : ?>
    				<div class="site-title">
       					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'bldr_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size', __( '165', 'bldr' ) )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    				</div><!-- site-logo -->
				<?php else : ?>
    				<hgroup>
       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
    				</hgroup>
			<?php endif; ?>
   
		</div><!-- .site-branding -->
        
        
		<div class="navigation-container">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="toggle-menu menu-right push-body">
            
            	 <?php $menu_toggle_option = get_theme_mod( 'bldr_menu_toggle', 'label' );

							$menu_display = '';

						if ( $menu_toggle_option == 'icon' ) {
				
							$menu_display = sprintf( '<i class="fa fa-bars"></i>' );
			
						} else if ( $menu_toggle_option == 'label' ) {
				
							$menu_display = esc_html( get_theme_mod( 'bldr_menu_name', esc_html__( 'Menu', 'bldr' )  ));
			
						}

				echo $menu_display; ?>
                        
            </button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
                </nav><!-- #site-navigation -->
        	</div>
        </div>
	</header><!-- #masthead -->
    
    <?php if ( get_theme_mod('bldr_sticky_active') != 1 ) { ?>
    
    <header id="masthead" class="site-header banner--clone overlay-banner" role="banner">
    	<div class="grid grid-pad header-overflow">
			<div class="site-branding">
        
			<?php if ( get_theme_mod( 'bldr_logo_page' ) ) : ?>
    				<div class="site-title">
       					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'bldr_logo_page' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size' )); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    				</div><!-- site-logo -->
				<?php else : ?>
    				<hgroup>
       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1> 
    				</hgroup>
			<?php endif; ?>
            
		</div><!-- .site-branding -->
        
        
			<div class="navigation-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="toggle-menu menu-right push-body">
                    	
                        <?php $menu_toggle_option = get_theme_mod( 'bldr_menu_toggle', 'label' );

							$menu_display = '';

						if ( $menu_toggle_option == 'icon' ) {
				
							$menu_display = sprintf( '<i class="fa fa-bars"></i>' );
			
						} else if ( $menu_toggle_option == 'label' ) {
				
							$menu_display = esc_html( get_theme_mod( 'bldr_menu_name', esc_html__( 'Menu', 'bldr' )  ));
			
						}

						echo $menu_display; ?>  
                    	
                    </button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
        	</div> 
        </div>
	</header><!-- #masthead -->
    
    <?php } ?>
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <h3>
        <i class="fa fa-close"></i> <?php esc_html_e( 'Close', 'bldr' ); ?></h3>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?> 
	</nav>

	<div id="content" class="site-content">
