<?php



class bldr_testimonials extends WP_Widget { 



// constructor

    function bldr_testimonials() {

		$widget_ops = array('classname' => 'bldr_testimonials_widget', 'description' => __( 'What are people saying? Let everyone know.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Testimonials', 'bldr'), $widget_ops); 

		$this->alt_option_name = 'bldr_testimonials_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';  	

		$number    		= isset( $instance['number'] ) ? intval( $instance['number'] ) : -1;

		$see_all   		= isset( $instance['see_all'] ) ? esc_url_raw( $instance['see_all'] ) : '';

		$see_all_text  	= isset( $instance['see_all_text'] ) ? esc_html( $instance['see_all_text'] ) : '';

		$random 		= isset( $instance['random'] ) ? (bool) $instance['random'] : false;				

	?>



	<p><?php _e('In order to display this widget, you must first add some Testimonial custom post types.', 'bldr'); ?></p> 

	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>


	<p><label for="<?php echo sanitize_text_field( $this->get_field_id( 'number' )); ?>"><?php _e( 'Number of testimonials to show (-1 shows all):', 'bldr' ); ?></label>

	<input id="<?php echo sanitize_text_field( $this->get_field_id( 'number' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'number' )); ?>" type="text" value="<?php echo intval( $number ); ?>" size="3" /></p>

    <p><label for="<?php echo sanitize_text_field( $this->get_field_id('see_all')); ?>"><?php _e('<em>Optional:</em> Enter the URL for your Testimonials page.', 'bldr'); ?></label>

	<input class="widefat custom_media_url" id="<?php echo sanitize_text_field( $this->get_field_id( 'see_all' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'see_all' )); ?>" type="text" value="<?php echo esc_url_raw( $see_all ); ?>" size="3" /></p>	

    <p><label for="<?php echo sanitize_text_field( $this->get_field_id('see_all_text')); ?>"><?php _e('Enter the Button Text. Default is set to <em>See All</em>.', 'bldr'); ?></label> 

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id( 'see_all_text' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'see_all_text' )); ?>" type="text" value="<?php echo esc_html( $see_all_text ); ?>" size="3" /></p>

	<p><input class="checkbox" type="checkbox" <?php checked( $random ); ?> id="<?php echo sanitize_text_field( $this->get_field_id( 'random' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'random' )); ?>" /> 

	<label for="<?php echo sanitize_text_field( $this->get_field_id( 'random' )); ?>"><?php _e( 'Show random testimonials?', 'bldr' ); ?></label></p>



	<?php 

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= esc_attr($new_instance['title']);

		$instance['number'] 		= intval($new_instance['number']);	

		$instance['see_all'] 		= esc_url_raw( $new_instance['see_all'] );	

		$instance['see_all_text'] 	= esc_html($new_instance['see_all_text']); 

		$instance['random'] 		= isset( $new_instance['random'] ) ? (bool) $new_instance['random'] : false;	



		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_testimonials']) )

			delete_option('bldr_testimonials');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_testimonials', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_testimonials', 'widget' );

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



		$title = ( ! empty( $instance['title'] ) ) ? esc_attr( $instance['title'] ) : __( 'Testimonials', 'bldr' );



		$title 			= apply_filters( 'widget_title', esc_attr( $title ), $instance, $this->id_base );

		$see_all 		= isset( $instance['see_all'] ) ? esc_url($instance['see_all']) : '';

		$see_all_text 	= isset( $instance['see_all_text'] ) ? esc_html($instance['see_all_text']) : '';

		$number 		= ( ! empty( $instance['number'] ) ) ? intval( $instance['number'] ) : -1;

		if ( ! $number ) {

			$number = -1;

		}	

		$random 		= isset( $instance['random'] ) ? (bool) $instance['random'] : false;

		if ( $random ) {

			$random = 'rand';	

		} else {

			$random = 'date';

		}			



		$mt = new WP_Query(array(

			'no_found_rows'       => true,

			'post_status'         => 'publish',

			'post_type' 		  => 'testimonial',

			'posts_per_page'	  => intval( $number ), 

			'orderby'        	  => $random, 			

		) );



		if ($mt->have_posts()) :

?>

		<section id="home-testimonials" class="testimonials">
    	
        	<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php if ( $title ) echo $before_title . esc_attr( $title ) . $after_title; ?> 
                </div>
        	</div>
        
    	<div class="grid grid-pad overflow">

				<?php while ( $mt->have_posts() ) : $mt->the_post(); ?>
               
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
            
            <?php if ( $see_all ) : ?>

				<a href="<?php echo esc_url( $see_all ); ?>" class="bldr-home-widget">

					<?php if ( $see_all_text ) : ?>

						<button><?php echo esc_html( $see_all_text ); ?></button> 

					<?php else : ?>

						<button><?php echo __('See All', 'bldr'); ?></button>

					<?php endif; ?>

				</a>

			<?php endif; ?> 

		</section>
        
        

	<?php

		// Reset the global $the_post as this query will have stomped on it

		wp_reset_postdata();



		endif;



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_testimonials', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	
}