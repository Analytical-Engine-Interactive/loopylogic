<?php



class bldr_clients extends WP_Widget { 



// constructor

    function bldr_clients() {

		$widget_ops = array('classname' => 'bldr_clients_widget', 'description' => __( 'Show your visitors your impressive client list.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Clients', 'bldr'), $widget_ops); 

		$this->alt_option_name = 'bldr_clients_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';	 
		
		$category     = isset( $instance['category'] ) ? esc_html( $instance['category'] ) : '';

	?>



	<p><?php _e('In order to display this widget, you must first add some Clients custom post types.', 'bldr'); ?></p>

	<p>

	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>
    
    <p>

	<label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category Name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo esc_html( $category ); ?>" />

	</p>


	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		
		$instance['category'] = esc_html($new_instance['category']);			

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_clients']) )

			delete_option('bldr_clients');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_clients', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_clients', 'widget' );

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



		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Clients', 'bldr' );
		
		$category     = isset( $instance['category'] ) ? esc_html( $instance['category'] ) : ''; 



		/** This filter is documented in wp-includes/default-widgets.php */

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );	



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
			
			'category_name' => $category,

			'post_type' 		  => 'client',

			'posts_per_page'	  => -1	

		) ) );



		if ($mt->have_posts()) :

?>

		<section id="home-clients" class="clients">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php if ( $title ) echo $before_title . $title . $after_title; ?> 
                </div>
        	</div>
    	<div class="grid grid-pad">
        	<div class="col-1-1"> 
            	<div class="client-carousel animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.3s">

					<?php while ( $mt->have_posts() ) : $mt->the_post(); ?> 

						<div>
                        	<div class="client-container">
                            <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                
                    <?php endwhile; // end of the loop. ?> 
            	</div>
            </div>
        </div>		

		</section>		

	<?php

		// Reset the global $the_post as this query will have stomped on it

		wp_reset_postdata();



		endif;



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_clients', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}