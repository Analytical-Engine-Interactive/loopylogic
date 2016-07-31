<?php
/**
Template Name: Home Page w/ Video
 *
 * @package BLDR
 */

get_header('home'); ?>

	<?php
	$home_video_mp4 = get_theme_mod( 'bldr_banner_mp4' ); 
	$home_video_webm = get_theme_mod( 'bldr_banner_webm' );
	$home_video_ogv = get_theme_mod( 'bldr_banner_ogv' );
	?>

	<section id="home-hero" class="hero-video">
		<?php if ( (!empty($home_video_mp4) OR !empty($home_video_webm) OR !empty($home_video_ogv)) AND !wp_is_mobile() ) : 	?>
		<video autoplay="" loop="" muted=""> 
        	<?php if ( !empty($home_video_mp4) ) : ?>
				<source src="<?php echo get_theme_mod( 'bldr_banner_mp4' ); ?>" type="video/mp4">
            <?php endif; ?>
			<?php if ( !empty($home_video_webm) ) : ?>
				<source src="<?php echo get_theme_mod( 'bldr_banner_webm' ); ?>" type="video/webm">
			<?php endif; ?>
			<?php if ( !empty($home_video_ogv) ) : ?>   
				<source src="<?php echo get_theme_mod( 'bldr_banner_ogv' ); ?>" type="video/ogg">
			<?php endif; ?>
		</video>
		
		<?php else : ?> 
			<?php the_post_thumbnail('full'); ?>
		<?php endif; ?>
 
	</section> 
   

    <section id="home-content">
    	<div class="grid-home grid-home-pad">
			<div class="col-home">
                <div id="primary" class="content-area"> 
                    <main id="main" class="site-main" role="main">
            
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'page-home' ); ?>
            
                        <?php endwhile; // end of the loop. ?>
            
                    </main><!-- #main -->
                </div><!-- #primary -->
        	</div> 
        </div><!-- grid -->
    </section><!-- home-content --> 

<?php get_footer(); ?>
