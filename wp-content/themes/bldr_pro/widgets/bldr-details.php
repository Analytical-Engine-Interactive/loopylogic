<?php



class bldr_details extends WP_Widget {
	
// constructor

    function bldr_details() {

		$widget_ops = array('classname' => 'bldr_details_widget', 'description' => __( 'With this widget you can tell the world what you have done.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Details', 'bldr'), $widget_ops);

		$this->alt_option_name = 'bldr_details_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		
		$detail_icon_one   	= isset( $instance['detail_icon_one'] ) ? esc_html( $instance['detail_icon_one'] ) : '';

		$detail_one   	= isset( $instance['detail_one'] ) ? esc_html( $instance['detail_one'] ) : '';

		$detail_one_max  = isset( $instance['detail_one_max'] ) ? absint( $instance['detail_one_max'] ) : '';
		
		$detail_icon_two   	= isset( $instance['detail_icon_two'] ) ? esc_html( $instance['detail_icon_two'] ) : '';

		$detail_two   	= isset( $instance['detail_two'] ) ? esc_attr( $instance['detail_two'] ) : '';

		$detail_two_max  = isset( $instance['detail_two_max'] ) ? absint( $instance['detail_two_max'] ) : '';
		
		$detail_icon_three   	= isset( $instance['detail_icon_three'] ) ? esc_html( $instance['detail_icon_three'] ) : '';

		$detail_three   	= isset( $instance['detail_three'] ) ? esc_attr( $instance['detail_three'] ) : '';

		$detail_three_max= isset( $instance['detail_three_max'] ) ? absint( $instance['detail_three_max'] ) : '';
		
		$detail_icon_four   	= isset( $instance['detail_icon_four'] ) ? esc_html( $instance['detail_icon_four'] ) : '';

		$detail_four   	= isset( $instance['detail_four'] ) ? esc_attr( $instance['detail_four'] ) : '';		

		$detail_four_max = isset( $instance['detail_four_max'] ) ? absint( $instance['detail_four_max'] ) : '';
		
		$detail_icon_five   	= isset( $instance['detail_icon_five'] ) ? esc_html( $instance['detail_icon_five'] ) : '';

		$detail_five   	= isset( $instance['detail_five'] ) ? esc_attr( $instance['detail_five'] ) : '';		

		$detail_five_max = isset( $instance['detail_five_max'] ) ? absint( $instance['detail_five_max'] ) : '';		

	?>



	<p>

	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />

	</p>



	<!-- detail one -->
    
    <p>

	<label for="<?php echo $this->get_field_id('detail_icon_one'); ?>"><?php _e('First detail icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_icon_one'); ?>" name="<?php echo $this->get_field_name('detail_icon_one'); ?>" type="text" value="<?php echo $detail_icon_one; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('detail_one'); ?>"><?php _e('First detail name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_one'); ?>" name="<?php echo $this->get_field_name('detail_one'); ?>" type="text" value="<?php echo $detail_one; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('detail_one_max'); ?>"><?php _e('First detail value', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_one_max'); ?>" name="<?php echo $this->get_field_name('detail_one_max'); ?>" type="text" value="<?php echo $detail_one_max; ?>" />

	</p>



	<!-- detail two -->
    
    <p>

	<label for="<?php echo $this->get_field_id('detail_icon_two'); ?>"><?php _e('Second detail icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_icon_two'); ?>" name="<?php echo $this->get_field_name('detail_icon_two'); ?>" type="text" value="<?php echo $detail_icon_two; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('detail_two'); ?>"><?php _e('Second detail name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_two'); ?>" name="<?php echo $this->get_field_name('detail_two'); ?>" type="text" value="<?php echo $detail_two; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('detail_two_max'); ?>"><?php _e('Second detail value', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_two_max'); ?>" name="<?php echo $this->get_field_name('detail_two_max'); ?>" type="text" value="<?php echo $detail_two_max; ?>" />

	</p>



	<!-- detail three -->
    
     <p>

	<label for="<?php echo $this->get_field_id('detail_icon_three'); ?>"><?php _e('Third detail icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_icon_three'); ?>" name="<?php echo $this->get_field_name('detail_icon_three'); ?>" type="text" value="<?php echo $detail_icon_three; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('detail_three'); ?>"><?php _e('Third detail name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_three'); ?>" name="<?php echo $this->get_field_name('detail_three'); ?>" type="text" value="<?php echo $detail_three; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('detail_three_max'); ?>"><?php _e('Third detail value', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_three_max'); ?>" name="<?php echo $this->get_field_name('detail_three_max'); ?>" type="text" value="<?php echo $detail_three_max; ?>" />

	</p>



	<!-- detail four -->
    
    <p>

	<label for="<?php echo $this->get_field_id('detail_icon_four'); ?>"><?php _e('Fourth detail icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_icon_four'); ?>" name="<?php echo $this->get_field_name('detail_icon_four'); ?>" type="text" value="<?php echo $detail_icon_four; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('detail_four'); ?>"><?php _e('Fourth detail name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_four'); ?>" name="<?php echo $this->get_field_name('detail_four'); ?>" type="text" value="<?php echo $detail_four; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('detail_four_max'); ?>"><?php _e('Fourth detail value', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_four_max'); ?>" name="<?php echo $this->get_field_name('detail_four_max'); ?>" type="text" value="<?php echo $detail_four_max; ?>" />

	</p>
    
    <!-- detail five -->
    
    <p>

	<label for="<?php echo $this->get_field_id('detail_icon_five'); ?>"><?php _e('Fifth detail icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label> 

	<input class="widefat" id="<?php echo $this->get_field_id('detail_icon_five'); ?>" name="<?php echo $this->get_field_name('detail_icon_five'); ?>" type="text" value="<?php echo $detail_icon_five; ?>" /> 

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('detail_five'); ?>"><?php _e('Fifth detail name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_five'); ?>" name="<?php echo $this->get_field_name('detail_five'); ?>" type="text" value="<?php echo $detail_five; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('detail_five_max'); ?>"><?php _e('Fifth detail value', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('detail_five_max'); ?>" name="<?php echo $this->get_field_name('detail_five_max'); ?>" type="text" value="<?php echo $detail_five_max; ?>" /> 

	</p>			

	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= strip_tags($new_instance['title']);
		
		$instance['detail_icon_one'] 		= strip_tags($new_instance['detail_icon_one']);

		$instance['detail_one'] 		= strip_tags($new_instance['detail_one']);

		$instance['detail_one_max'] 	= intval($new_instance['detail_one_max']);
		
		$instance['detail_icon_two'] 		= strip_tags($new_instance['detail_icon_two']);

		$instance['detail_two'] 		= strip_tags($new_instance['detail_two']);

		$instance['detail_two_max'] 	= intval($new_instance['detail_two_max']);
		
		$instance['detail_icon_three'] 		= strip_tags($new_instance['detail_icon_three']);

		$instance['detail_three'] 	= strip_tags($new_instance['detail_three']);

		$instance['detail_three_max']= intval($new_instance['detail_three_max']);
		
		$instance['detail_icon_four'] 		= strip_tags($new_instance['detail_icon_four']);

		$instance['detail_four'] 	= strip_tags($new_instance['detail_four']);

		$instance['detail_four_max'] = intval($new_instance['detail_four_max']);
		
		$instance['detail_icon_five'] 		= strip_tags($new_instance['detail_icon_five']);	
		
		$instance['detail_five'] 	= strip_tags($new_instance['detail_five']);

		$instance['detail_five_max'] = intval($new_instance['detail_five_max']);	

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_details']) )

			delete_option('bldr_details');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_details', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_details', 'widget' );

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



		$title 			= ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Details', 'bldr' );

		$title 			= apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$detail_icon_one   	= isset( $instance['detail_icon_one'] ) ? esc_html( $instance['detail_icon_one'] ) : '';

		$detail_one   	= isset( $instance['detail_one'] ) ? esc_html( $instance['detail_one'] ) : '';

		$detail_one_max  = isset( $instance['detail_one_max'] ) ? absint( $instance['detail_one_max'] ) : '';
		
		$detail_icon_two  	= isset( $instance['detail_icon_two'] ) ? esc_html( $instance['detail_icon_two'] ) : '';

		$detail_two   	= isset( $instance['detail_two'] ) ? esc_attr( $instance['detail_two'] ) : '';

		$detail_two_max  = isset( $instance['detail_two_max'] ) ? absint( $instance['detail_two_max'] ) : '';
		
		$detail_icon_three  	= isset( $instance['detail_icon_three'] ) ? esc_html( $instance['detail_icon_three'] ) : '';

		$detail_three   	= isset( $instance['detail_three'] ) ? esc_attr( $instance['detail_three'] ) : '';

		$detail_three_max= isset( $instance['detail_three_max'] ) ? absint( $instance['detail_three_max'] ) : '';
		
		$detail_icon_four  	= isset( $instance['detail_icon_four'] ) ? esc_html( $instance['detail_icon_four'] ) : '';

		$detail_four   	= isset( $instance['detail_four'] ) ? esc_attr( $instance['detail_four'] ) : '';		

		$detail_four_max = isset( $instance['detail_four_max'] ) ? absint( $instance['detail_four_max'] ) : '';	
		
		$detail_icon_five  	= isset( $instance['detail_icon_five'] ) ? esc_html( $instance['detail_icon_five'] ) : '';

		$detail_five   	= isset( $instance['detail_five'] ) ? esc_attr( $instance['detail_five'] ) : '';		

		$detail_five_max = isset( $instance['detail_five_max'] ) ? absint( $instance['detail_five_max'] ) : '';		



?>

		<section id="details" class="details-odometer">

				<div class="grid grid-pad">
        				<div class="col-1-1"><?php if ( $title ) echo $before_title . $title . $after_title; ?></div> 
        		</div> 


				<div class="details"> 
                <div class="grid grid-pad animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.5s">
                
				<?php if ($detail_one !='') : ?>

            		<div class="col-1-5 detail"> 
						
                        <i class="fa <?php echo esc_html($detail_icon_one); ?> detail-icon"></i>

						<span class="odometer" id="<?php echo absint($detail_one_max); ?>">00</span> 

						<h4><?php echo esc_html($detail_one); ?></h4>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($detail_two !='') : ?> 

					<div class="col-1-5 detail"> 
						
                        <i class="fa <?php echo esc_html($detail_icon_two); ?> detail-icon"></i>

						<span class="odometer" id="<?php echo absint($detail_two_max); ?>">00</span>

						<h4><?php echo esc_html($detail_two); ?></h4>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($detail_three !='') : ?>

					<div class="col-1-5 detail"> 
						
                        <i class="fa <?php echo esc_html($detail_icon_three); ?> detail-icon"></i>

						<span class="odometer" id="<?php echo absint($detail_three_max); ?>">00</span>

						<h4><?php echo esc_html($detail_three); ?></h4>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($detail_four !='') : ?>

					<div class="col-1-5 detail"> 
						
                        <i class="fa <?php echo esc_html($detail_icon_four); ?> detail-icon"></i>

						<span class="odometer" id="<?php echo absint($detail_four_max); ?>">00</span>

						<h4><?php echo esc_html($detail_four); ?></h4>

					</div><!-- .fact -->

				<?php endif; ?>	
                
                <?php if ($detail_five !='') : ?>

					<div class="col-1-5 detail"> 
						
                        <i class="fa <?php echo esc_html($detail_icon_five); ?> detail-icon"></i>

						<span class="odometer" id="<?php echo absint($detail_five_max); ?>">00</span>

						<h4><?php echo esc_html($detail_five); ?></h4> 

					</div><!-- .fact -->

				<?php endif; ?>																	

			</div>	
            
            </div>							

		</section> 				

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_details', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}
	

}