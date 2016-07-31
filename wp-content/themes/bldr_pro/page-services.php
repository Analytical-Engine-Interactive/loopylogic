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

		<?php query_posts( array ( 'post_type' => 'services', 'posts_per_page' => -1 ) );
			
					while ( have_posts() ) : the_post(); ?> 

			<div class="col-1-3 tri-clear">
            	<div class="single-service">
                	<i class="fa <?php echo types_render_field("icon", array("output"=>"raw")); ?> service-icon"></i>
                	<?php the_title( '<h3 class="service-title">', '</h3>' ); ?>
                    <?php the_content( '<p>', '</p>' ); ?>
                </div>
            </div>

		<?php endwhile; ?> 

	</div> 
    </div>
</section>
<?php get_footer(); ?>
