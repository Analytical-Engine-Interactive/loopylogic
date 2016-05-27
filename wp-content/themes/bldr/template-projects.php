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
        
        <?php 
		// the query
		$the_query = new WP_Query( 'post_type=projects', 'posts_per_page= -1' ); ?>
		
		<?php if ( $the_query->have_posts() ) : ?>
		
			<!-- pagination here -->
		
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-1-3 tri-clear"> 
                	<div class="grid-block fade">
                    	
                            <div class="caption" style="display: none;">
                            	<a href="<?php the_permalink(); ?>">
                                	<i class="fa fa-plus"></i>
                                </a> 
                            </div>
                       
                		<?php the_post_thumbnail( 'large', array( 'class' => 'project-img' ) ); ?>
                    </div>
            	</div> 
			<?php endwhile; ?>
			<!-- end of the loop -->
		
			<!-- pagination here -->
		
			<?php wp_reset_postdata(); ?>
		
		<?php else : ?>
			<p><?php __( 'Sorry, no Projects have been added yet!', 'bldr' ); ?></p>
		<?php endif; ?>

	</div> 
    </div>
</section>
<?php get_footer(); ?>