<?php
/**
Template Name: Page - Projects
 *
 * @package BLDR
 */

get_header(); ?>

<section id="projects-entry-content">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php get_template_part( 'content', 'page' ); ?>
        
                    <?php endwhile; // end of the loop. ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
    
    <div class="projects">
    <div class="grid grid-pad overflow">

		<?php query_posts( array ( 'post_type' => 'projects', 'posts_per_page' => -1 ) );
			
				while ( have_posts() ) : the_post(); ?> 
                
                <div class="col-1-3 tri-clear"> 
                	<div class="grid-block fade">
                    	<a href="<?php the_permalink(); ?>">
                            <div class="caption" style="display: none;">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                		<?php the_post_thumbnail( 'large', array( 'class' => 'project-img' ) ); ?>
                    </div>
            	</div> 

		<?php endwhile; ?> 

	</div> 
    </div>
</section>
<?php get_footer(); ?>
