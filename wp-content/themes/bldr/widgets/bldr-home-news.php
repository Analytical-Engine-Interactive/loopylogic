<?php



class bldr_home_news extends WP_Widget {



// constructor

    function bldr_home_news() {

		$widget_ops = array('classname' => 'bldr_home_news_widget', 'description' => __( 'Show all your news posts on your home page.', 'bldr') );

        parent::__construct(false, $name = __('Home Page News Posts', 'bldr'), $widget_ops);

		$this->alt_option_name = 'bldr_home_news_widget'; 

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';

		$category  		= isset( $instance['category'] ) ? esc_attr( $instance['category'] ) : '';

		$see_all_text  	= isset( $instance['see_all_text'] ) ? esc_html( $instance['see_all_text'] ) : '';											
	

	?>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title')); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />

	</p>



	<p><label for="<?php echo sanitize_text_field( $this->get_field_id( 'category' )); ?>"><?php _e( 'Enter the slug for your category or leave empty to show posts from all categories.', 'bldr' ); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id( 'category' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'category' )); ?>" type="text" value="<?php echo esc_attr( $category ); ?>" size="3" /></p>	



    <p><label for="<?php echo sanitize_text_field( $this->get_field_id('see_all_text')); ?>"><?php _e('Button Text. Default is set to <em>See All</em>.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id( 'see_all_text' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'see_all_text' )); ?>" type="text" value="<?php echo esc_html( $see_all_text ); ?>" size="3" /></p>

	

	<?php 

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= esc_html($new_instance['title']); 

		$instance['category'] 		= esc_attr($new_instance['category']);

		$instance['see_all_text'] 	= esc_html($new_instance['see_all_text']);									

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_home_news']) )

			delete_option('bldr_home_news');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_home_news', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_home_news', 'widget' );

		}



		if ( ! is_array( $cache ) ) {

			$cache = array();

		}



		if ( ! isset( $args['widget_id'] ) ) {

			$args['widget_id'] = $this->id;

		}



		if ( isset( $cache[ $args['widget_id'] ] ) ) {

			echo $cache[ $args['widget_id'] ];

			return;

		}



		ob_start();

		extract($args);



		$title = ( ! empty( $instance['title'] ) ) ? esc_html( $instance['title'] ) : __( 'News', 'bldr' );



		/** This filter is documented in wp-includes/default-widgets.php */

		$title = apply_filters( 'widget_title', esc_html( $title ), $instance, $this->id_base ); 

		$category = isset( $instance['category'] ) ? esc_attr($instance['category']) : ''; 

		$see_all_text = isset( $instance['see_all_text'] ) ? esc_html($instance['see_all_text']) : __( 'See All', 'bldr' );	



		/**

		 * Filter the arguments for the Recent Posts widget.

		 *

		 * @since 3.4.0

		 *

		 * @see WP_Query::get_posts()

		 *

		 * @param array $args An array of arguments used to retrieve the recent posts.

		 */

		$mt = new WP_Query( apply_filters( 'widget_posts_args', array(

			'no_found_rows'       => true,

			'post_status'         => 'publish',

			'posts_per_page'	  => 3,

			'category_name'		  => esc_attr( $category )

		) ) );



		if ($mt->have_posts()) :

?>

		<section id="home-news" class="home-news-area"> 
        
        	<div class="grid grid-pad">
            	<div class="col-1-1">
                    <?php if ( $title ) echo $before_title . esc_html( $title ) . $after_title; ?> 
                </div><!-- col-1-1 -->  
            </div><!-- grid -->

			<div class="grid grid-pad">
                        
            	<?php while ( $mt->have_posts() ) : $mt->the_post(); ?>
             
                	<div class="col-1-3 tri-clear">
            			<div class="grid-block fade">
                        	<div class="caption" style="display: none;">
                        	<a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a>
                        	</div>
            				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('bldr-home-blog'); ?></a> 
                        </div>
							<h5><?php the_title(); ?></h5>
                        	<p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?> <a href="<?php the_permalink(); ?>">
                             <?php __( 'Read More', 'bldr' ); ?></a></p>
                    </div><!-- col-1-3 -->

				<?php endwhile; ?>
                        
            </div><!-- grid -->
            
            	<?php if ( $see_all_text ) : ?>

				<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="all-news">
				<button><?php echo esc_html( $see_all_text ); ?></button>
                </a>
                
                <?php endif; ?>		

		</section>		

	<?php

		// Reset the global $the_post as this query will have stomped on it

		wp_reset_postdata();



		endif;



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_home_news', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}