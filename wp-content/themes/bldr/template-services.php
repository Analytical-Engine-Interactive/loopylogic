<?php
/**
Template Name: Page - Services
 *
 * @package BLDR
 */

get_header(); ?>

<section id="services-entry-content">
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
    
    <div class="services">
    <div class="grid grid-pad">
        
        <?php 
		// the query
		$the_query = new WP_Query( 'post_type=services', 'posts_per_page= -1' ); ?>
		
		<?php if ( $the_query->have_posts() ) : ?>
		
			<!-- pagination here -->
		
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-1-3 tri-clear">
                    <div class="single-service">
                        <i class="fa <?php echo types_render_field("icon", array("output"=>"raw")); ?> service-icon"></i>
                        <?php the_title( '<h3 class="service-title">', '</h3>' ); ?>
                        <?php the_content( '<p>', '</p>' ); ?>
                    </div>
            	</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
		
			<!-- pagination here -->
		
			<?php wp_reset_postdata(); ?>
		
		<?php else : ?>
			<p><?php __( 'Sorry, no Services have been added yet!', 'bldr' ); ?></p>
		<?php endif; ?>

	</div> 
    </div>
</section>
<?php get_footer(); ?>
