<?php
/**
 * The template for displaying all single posts.
 *
 * @package BLDR
 */

get_header(); ?>

<section id="page-entry-content">
    <div class="grid grid-pad">
        
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        	<div class="col-9-12">
    	<?php else: ?>
    		<div class="col-1-1">
    	<?php endif; ?>
        
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                <?php while ( have_posts() ) : the_post(); ?>
        
                    <?php get_template_part( 'content', 'single' ); ?>
        
                    <?php bldr_the_post_navigation(); ?> 
        
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
        
                <?php endwhile; // end of the loop. ?>
        
                </main><!-- #main -->
            </div><!-- #primary --> 
        </div><!-- col-9-12 --> 
        
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    	<?php get_sidebar(); ?>
    <?php endif; ?>
    
    </div><!-- grid -->
</section><!-- page-entry-content -->

<?php get_footer(); ?>
