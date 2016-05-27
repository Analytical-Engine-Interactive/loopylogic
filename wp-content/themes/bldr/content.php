<?php
/**
 * @package BLDR
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
        	<span class="meta-block"><i class="fa fa-list"></i> <?php the_category(); ?></span>
            <span class="meta-block"><?php echo get_avatar( get_the_author_meta('email'), get_the_author() ); ?><?php the_author(); ?></span>
            <span class="meta-block"><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    	<?php the_post_thumbnail('bldr-blog-archive', array( 'class' => 'archive-img' )); ?>
        
		<?php if ( 'option2' == bldr_sanitize_index_content( get_theme_mod( 'bldr_post_content' ) ) ) :
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bldr' ) );
				else :
				the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bldr' ) );
				endif;  ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bldr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->