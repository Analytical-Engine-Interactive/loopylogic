<?php
/**
Template Name: Page - Left Sidebar
 *
 * @package BLDR
 */

get_header(); ?>

<section id="page-right-entry-content">
    <div class="grid grid-pad">
        <div class="col-9-12 page-left-sidebar">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php get_template_part( 'content', 'page' ); ?>
        
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
        
        <?php get_sidebar('left'); ?>
        
    </div><!-- grid -->
</section><!-- page-right-entry-content -->
<?php get_footer(); ?>
