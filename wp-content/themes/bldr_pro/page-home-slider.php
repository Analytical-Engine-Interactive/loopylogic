<?php
/**
Template Name: Home Page w/ Slider
 *
 * @package BLDR
 */

get_header('home'); ?>

	<?php if( get_theme_mod( 'active_slider' ) == '') : ?>
    
    <?php if ( get_theme_mod( 'slider_speed' ) ) : ?>
        
        	<div hidden id="sliderspeed"><?php echo esc_html( get_theme_mod( 'slider_speed', '5000' )); ?></div>
    
    <?php endif; ?> 
     
     <section id="home-hero-slider">
     	<div class="hero-slider">  
        
        	<?php
                global $post;
                $args = array( 'post_type' => 'slider', 'posts_per_page' => -1 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :    setup_postdata($post); ?>
                
                <div>
                	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>	
                    <div class="bldr-hero-bg" style="background-image: url('<?php echo $url?>');"></div> 
                    <div class="bldr-hero-content-container slider-container"> 
                        <div class="bldr-hero-content">
                        
                        	<?php if (get_post_meta( $post->ID, '_slide_primary_title_checkbox', true ) == '' ): ?> 
                            	<h1 class="animate-plus animate-init" data-animations="fadeInDown" data-animation-delay="0.5s">
									<?php the_title(); ?>
                                </h1>
                            <?php endif; ?>  
                           	
                            <?php if (get_post_meta( $post->ID, '_slide_subheading', true ) ): ?>
                                <h2 class="animate-plus animate-init" data-animations="fadeIn" data-animation-delay="1s">
                            	<?php global $post; $text = get_post_meta( $post->ID, '_slide_subheading', true ); echo $text; ?>
                                </h2>
                            <?php endif; ?>
                            
							<?php if (get_post_meta( $post->ID, '_slide_url', true ) ): ?>
                            	<a href="<?php global $post; $text = get_post_meta( $post->ID, '_slide_url', true ); echo $text; ?>" class="featured-link">
                            <?php endif; ?>    
                            
                            	<?php if (get_post_meta( $post->ID, '_slide_button', true ) ): ?>	
                                	<span class="animate-plus animate-init" data-animations="fadeInUp" data-animation-delay="1.5s">
                                	<button><?php global $post; $text = get_post_meta( $post->ID, '_slide_button', true ); echo $text; ?></button>
                                    </span>
                                <?php endif; ?>
                                
                            <?php if (get_post_meta( $post->ID, '_slide_url', true ) ): ?>
                            	</a>
                           	<?php endif; ?> 
                              
                        </div>
                    </div>
				</div>
               
            <?php endforeach; ?>
       
        </div>
     </section>
	
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?> 
   
    
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
