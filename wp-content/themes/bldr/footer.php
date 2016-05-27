<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BLDR
 */
?>

	</div><!-- #content -->
    
    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
        
        <?php get_template_part( 'content', 'social' ); // Social Icons ?>
        	
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        
        	<?php if ( is_active_sidebar('footer-1') ) : ?> 
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-2') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-3') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-4') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-4'); ?>
                </div>
            <?php endif; ?>
            
        </div>
    	<div class="grid grid-pad">
        	<div class="col-1-1">
                <div class="site-info">
                    <?php if ( get_theme_mod( 'bldr_footerid' ) ) : ?> 
        				<?php echo esc_html( get_theme_mod( 'bldr_footerid' )); // footer id ?> 
					<?php else : ?>  
    					<?php printf( __( 'Theme: %1$s by %2$s', 'bldr' ), 'bldr', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?>
					<?php endif; ?> 
                </div><!-- .site-info -->
        	</div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
