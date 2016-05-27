<?php
/**
Template Name: Home Page
 *
 * @package BLDR
 */

get_header('home'); ?>

     
     <?php if( get_theme_mod( 'active_hero' ) == '') : ?>
     
     <section id="home-hero">
     	
     	<div class="bldr-hero-bg" style="background-image: url('<?php echo esc_url( get_theme_mod( 'bldr_main_bg', ( get_stylesheet_directory_uri( 'stylesheet_directory' ) . '/img/bldr.jpg' ))); ?>');"></div>
       
        <div class="bldr-hero-content-container"> 
            <div class="bldr-hero-content">
            
            	<?php if ( get_theme_mod( 'bldr_first_heading' ) ) : ?>
                	<h1 class="animate-plus animate-init" data-animations="fadeInDown" data-animation-delay="0.5s">
						<?php echo esc_html( get_theme_mod( 'bldr_first_heading')) ?>
                    </h1> 
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'bldr_second_heading' ) ) : ?>
                	<h2 class="animate-plus animate-init" data-animations="fadeIn" data-animation-delay="1s">
						<?php echo esc_html( get_theme_mod( 'bldr_second_heading')) ?>
                    </h2>
               	<?php endif; ?> 
                
                <?php if ( get_theme_mod( 'bldr_hero_button_text' ) ) : ?>
                
                            
                	<?php if ( get_theme_mod( 'hero_button_url' ) ) : ?>
                    
                    	<a href="<?php echo esc_url( get_page_link(get_theme_mod('hero_button_url'))) ?>" class="featured-link">
                        
					<?php endif; ?>
       
                	<?php if ( get_theme_mod( 'page_url_text' ) ) : ?>
                    
    					<a href="<?php echo esc_url( get_theme_mod( 'page_url_text' )) ?>" class="featured-link" target="_blank">
                           
					<?php endif; ?>
                    
                    <span class="animate-plus animate-init" data-animations="fadeInUp" data-animation-delay="1.5s">
                    	<button>
							<?php echo esc_html( get_theme_mod( 'bldr_hero_button_text')) ?>
                        </button>
                    </span>
                    
                    
                    <?php if ( get_theme_mod( 'hero_button_url' ) ) : ?>
                    
                    	</a> 
                        
                    <?php endif; ?> 
                    
                    <?php if ( get_theme_mod( 'page_url_text' ) ) : ?>
                    
                    	</a> 
                        
                    <?php endif; ?> 
                    
                               
                <?php endif; ?>
               
                  
        	</div>
    	</div>
    </section>
     
	<?php endif; ?> 
   
    
    <section id="home-content">
    	<div class="grid-home grid-home-pad">
			<div class="col-home">
                <div id="primary" class="content-area"> 
                    <main id="main" class="site-main" role="main">
            
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'page-home' ); ?>
            
                        <?php endwhile; // end of the loop. ?>
            
                    </main><!-- #main -->
                </div><!-- #primary -->
        	</div> 
        </div><!-- grid -->
    </section><!-- home-content --> 

<?php get_footer(); ?>
