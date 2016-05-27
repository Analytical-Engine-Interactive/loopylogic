<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BLDR
 */

get_header(); ?>

<section id="blog-entry-content">
    <div class="grid grid-pad">
    
    	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        	<div class="col-9-12">
    	<?php else: ?>
    		<div class="col-1-1">
    	<?php endif; ?>
       
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                <?php if ( have_posts() ) : ?>
        
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        ?>
        
                    <?php endwhile; ?>
        
                    <?php bldr_the_posts_navigation(); ?>
        
                <?php else : ?>
        
                    <?php get_template_part( 'content', 'none' ); ?>
        
                <?php endif; ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- col-9-12 -->
        
    	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    		<?php get_sidebar(); ?>
    	<?php endif; ?>
    
    </div><!-- grid -->
</section><!-- blog-entry-content -->

<?php get_footer(); ?>
