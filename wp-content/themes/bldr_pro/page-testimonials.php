<?php
/**
Template Name: Page - Testimonials
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
    
    <div class="testimonials">
    <div class="grid grid-pad">

		<?php query_posts( array ( 'post_type' => 'testimonial', 'posts_per_page' => -1 ) );
			
					while ( have_posts() ) : the_post(); ?> 

                    <div class="col-1-3 tri-clear"> 
                        <div class="testimonial">
                            <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'testimonial-img' ) ); ?> 
                            <?php the_content( '<p>', '</p>' ); ?>
                            <h3><?php echo types_render_field("full-name", array("output"=>"raw")); ?></h3>
                            <h4><?php echo types_render_field("title-company", array("output"=>"raw")); ?></h4>
                        </div>
                    </div>

		<?php endwhile; ?> 

	</div> 
    </div>
</section>
<?php get_footer(); ?>
