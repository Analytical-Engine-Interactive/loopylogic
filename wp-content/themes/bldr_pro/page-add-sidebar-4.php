<?php
/**
Template Name: Page - Additional Sidebar 4
 *
 * This is the page template used for your fourth addtional sidebar 
 *
 * @package bldr
 */

get_header(); ?> 

<section id="page-entry-content">
    <div class="grid grid-pad">
        <div class="col-9-12">
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
        
        <div id="secondary" class="widget-area col-3-12" role="complementary">
		<?php dynamic_sidebar( 'add-sidebar-4' ); ?> 
	</div> 
        
    </div><!-- grid -->
</section><!-- page-entry-content -->

<?php get_footer(); ?>