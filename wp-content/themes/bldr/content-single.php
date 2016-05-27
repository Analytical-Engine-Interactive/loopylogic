<?php
/**
 * @package BLDR
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
        	<span class="meta-block"><i class="fa fa-list"></i> <?php the_category(); ?></span>
            <span class="meta-block"><?php echo get_avatar( get_the_author_meta('email'), get_the_author() ); ?><?php the_author(); ?></span>
            <span class="meta-block"><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
    	<?php the_post_thumbnail('full', array( 'class' => 'archive-img' )); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bldr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bldr_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
