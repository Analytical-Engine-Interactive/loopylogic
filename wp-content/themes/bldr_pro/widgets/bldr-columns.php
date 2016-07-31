<?php



class bldr_columns extends WP_Widget {
	
// constructor

    function bldr_columns() {

		$widget_ops = array('classname' => 'bldr_columns_widget', 'description' => __( 'Populate four columns for your home page.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Columns', 'bldr'), $widget_ops);

		$this->alt_option_name = 'bldr_columns_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );	 	

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		
		
		$column_icon_one   	= isset( $instance['column_icon_one'] ) ? esc_html( $instance['column_icon_one'] ) : '';

		$column_one   	= isset( $instance['column_one'] ) ? esc_html( $instance['column_one'] ) : '';

		$column_one_text  = isset( $instance['column_one_text'] ) ? esc_textarea( $instance['column_one_text'] ) : '';
		
		$column_one_link 	= isset( $instance['column_one_link'] ) ? esc_url( $instance['column_one_link'] ) : '';
		
		$column_one_button  = isset( $instance['column_one_button'] ) ? esc_html( $instance['column_one_button'] ) : '';
		
		$column_icon_two   	= isset( $instance['column_icon_two'] ) ? esc_html( $instance['column_icon_two'] ) : '';

		$column_two   	= isset( $instance['column_two'] ) ? esc_html( $instance['column_two'] ) : '';

		$column_two_text  = isset( $instance['column_two_text'] ) ? esc_textarea( $instance['column_two_text'] ) : ''; 
		
		$column_two_link 	= isset( $instance['column_two_link'] ) ? esc_url( $instance['column_two_link'] ) : '';
		
		$column_two_button  = isset( $instance['column_two_button'] ) ? esc_html( $instance['column_two_button'] ) : '';
		
		$column_icon_three   	= isset( $instance['column_icon_three'] ) ? esc_html( $instance['column_icon_three'] ) : '';

		$column_three   	= isset( $instance['column_three'] ) ? esc_html( $instance['column_three'] ) : '';

		$column_three_text = isset( $instance['column_three_text'] ) ? esc_textarea( $instance['column_three_text'] ) : '';
		
		$column_three_link 	= isset( $instance['column_three_link'] ) ? esc_url( $instance['column_three_link'] ) : '';
		
		$column_three_button  = isset( $instance['column_three_button'] ) ? esc_html( $instance['column_three_button'] ) : '';
		
		$column_icon_four   	= isset( $instance['column_icon_four'] ) ? esc_html( $instance['column_icon_four'] ) : '';

		$column_four   	= isset( $instance['column_four'] ) ? esc_html( $instance['column_four'] ) : '';		

		$column_four_text = isset( $instance['column_four_text'] ) ? esc_textarea( $instance['column_four_text'] ) : '';
		
		$column_four_link 	= isset( $instance['column_four_link'] ) ? esc_url( $instance['column_four_link'] ) : '';
		
		$column_four_button  = isset( $instance['column_four_button'] ) ? esc_html( $instance['column_four_button'] ) : '';
		
		$column_number_cols  = isset( $instance['column_number_cols'] ) ? esc_attr( $instance['column_number_cols'] ) : '';


	?>



	


	<!-- column one -->
    
    <p>

	<label for="<?php echo $this->get_field_id('column_number_cols'); ?>"><?php _e('Number of Columns', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_number_cols'); ?>" name="<?php echo $this->get_field_name('column_number_cols'); ?>" type="text" value="<?php echo $column_number_cols; ?>" /> 

	</p>

    
    <p>

	<label for="<?php echo $this->get_field_id('column_icon_one'); ?>"><?php _e('First column icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_icon_one'); ?>" name="<?php echo $this->get_field_name('column_icon_one'); ?>" type="text" value="<?php echo $column_icon_one; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('column_one'); ?>"><?php _e('First column name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_one'); ?>" name="<?php echo $this->get_field_name('column_one'); ?>" type="text" value="<?php echo $column_one; ?>" />

	</p>
    

	<p>

	<label for="<?php echo $this->get_field_id('column_one_text'); ?>"><?php _e('First column text', 'bldr'); ?></label>
    
    <textarea class="widefat" id="<?php echo $this->get_field_id('column_one_text'); ?>" name="<?php echo $this->get_field_name('column_one_text'); ?>"><?php echo $column_one_text; ?></textarea>

	</p>
    
    
    <p>

	<label for="<?php echo $this->get_field_id('column_one_link'); ?>"><?php _e('Link for first button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_one_link'); ?>" name="<?php echo $this->get_field_name('column_one_link'); ?>" type="text" value="<?php echo $column_one_link; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_one_button'); ?>"><?php _e('Title for first button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_one_button'); ?>" name="<?php echo $this->get_field_name('column_one_button'); ?>" type="text" value="<?php echo $column_one_button; ?>" />

	</p>



	<!-- column two -->
    
    <p>

	<label for="<?php echo $this->get_field_id('column_icon_two'); ?>"><?php _e('Second column icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_icon_two'); ?>" name="<?php echo $this->get_field_name('column_icon_two'); ?>" type="text" value="<?php echo $column_icon_two; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('column_two'); ?>"><?php _e('Second column name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_two'); ?>" name="<?php echo $this->get_field_name('column_two'); ?>" type="text" value="<?php echo $column_two; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_two_text'); ?>"><?php _e('Second column text', 'bldr'); ?></label>
    
    <textarea class="widefat" id="<?php echo $this->get_field_id('column_two_text'); ?>" name="<?php echo $this->get_field_name('column_two_text'); ?>"><?php echo $column_two_text; ?></textarea>

	</p>
    
    <p>

	<label for="<?php echo $this->get_field_id('column_two_link'); ?>"><?php _e('Link for second button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_two_link'); ?>" name="<?php echo $this->get_field_name('column_two_link'); ?>" type="text" value="<?php echo $column_two_link; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_two_button'); ?>"><?php _e('Title for second button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_two_button'); ?>" name="<?php echo $this->get_field_name('column_two_button'); ?>" type="text" value="<?php echo $column_two_button; ?>" />

	</p>



	<!-- column three -->
    
     <p>

	<label for="<?php echo $this->get_field_id('column_icon_three'); ?>"><?php _e('Third column icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_icon_three'); ?>" name="<?php echo $this->get_field_name('column_icon_three'); ?>" type="text" value="<?php echo $column_icon_three; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('column_three'); ?>"><?php _e('Third column name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_three'); ?>" name="<?php echo $this->get_field_name('column_three'); ?>" type="text" value="<?php echo $column_three; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_three_text'); ?>"><?php _e('Third column text', 'bldr'); ?></label>

	<textarea class="widefat" id="<?php echo $this->get_field_id('column_three_text'); ?>" name="<?php echo $this->get_field_name('column_three_text'); ?>"><?php echo $column_three_text; ?></textarea> 

	</p>
    
	
    <p>

	<label for="<?php echo $this->get_field_id('column_three_link'); ?>"><?php _e('Link for third button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_three_link'); ?>" name="<?php echo $this->get_field_name('column_three_link'); ?>" type="text" value="<?php echo $column_three_link; ?>" /> 

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_three_button'); ?>"><?php _e('Title for third button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_three_button'); ?>" name="<?php echo $this->get_field_name('column_three_button'); ?>" type="text" value="<?php echo $column_three_button; ?>" /> 

	</p>


	<!-- column four -->
    
    <p>

	<label for="<?php echo $this->get_field_id('column_icon_four'); ?>"><?php _e('Fourth column icon. Use fortawesome.github.io/Font-Awesome/cheatsheet/ to choose icons.', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_icon_four'); ?>" name="<?php echo $this->get_field_name('column_icon_four'); ?>" type="text" value="<?php echo $column_icon_four; ?>" />

	</p>

	<p>

	<label for="<?php echo $this->get_field_id('column_four'); ?>"><?php _e('Fourth column name', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_four'); ?>" name="<?php echo $this->get_field_name('column_four'); ?>" type="text" value="<?php echo $column_four; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_four_text'); ?>"><?php _e('Fourth column value', 'bldr'); ?></label>

	<textarea class="widefat" id="<?php echo $this->get_field_id('column_four_text'); ?>" name="<?php echo $this->get_field_name('column_four_text'); ?>"><?php echo $column_four_text; ?></textarea> 

	</p>
    
 	<p>

	<label for="<?php echo $this->get_field_id('column_four_link'); ?>"><?php _e('Link for fourth button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_four_link'); ?>" name="<?php echo $this->get_field_name('column_four_link'); ?>" type="text" value="<?php echo $column_four_link; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('column_four_button'); ?>"><?php _e('Title for fourth button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('column_four_button'); ?>" name="<?php echo $this->get_field_name('column_four_button'); ?>" type="text" value="<?php echo $column_four_button; ?>" /> 

	</p>
	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;
		
		$instance['column_icon_one'] 		= strip_tags($new_instance['column_icon_one']);

		$instance['column_one'] 		= strip_tags($new_instance['column_one']);

		$instance['column_one_text'] 	= strip_tags($new_instance['column_one_text']);
		
		$instance['column_one_link'] = esc_url_raw($new_instance['column_one_link']);

		$instance['column_one_button'] = strip_tags($new_instance['column_one_button']);
		
		$instance['column_icon_two'] 		= strip_tags($new_instance['column_icon_two']);

		$instance['column_two'] 		= strip_tags($new_instance['column_two']);

		$instance['column_two_text'] 	= strip_tags($new_instance['column_two_text']);
		
		$instance['column_two_link'] = esc_url_raw($new_instance['column_two_link']);

		$instance['column_two_button'] = strip_tags($new_instance['column_two_button']);
		
		$instance['column_icon_three'] 		= strip_tags($new_instance['column_icon_three']);

		$instance['column_three'] 	= strip_tags($new_instance['column_three']);

		$instance['column_three_text'] = strip_tags($new_instance['column_three_text']);
		
		$instance['column_three_link'] = esc_url_raw($new_instance['column_three_link']);

		$instance['column_three_button'] = strip_tags($new_instance['column_three_button']);
		
		$instance['column_icon_four'] 		= strip_tags($new_instance['column_icon_four']);

		$instance['column_four'] 	= strip_tags($new_instance['column_four']);

		$instance['column_four_text'] = strip_tags($new_instance['column_four_text']);
		
		$instance['column_four_link'] = esc_url_raw($new_instance['column_four_link']);

		$instance['column_four_button'] = strip_tags($new_instance['column_four_button']);
		
		$instance['column_number_cols'] = esc_attr($new_instance['column_number_cols']);
		

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_columns']) )

			delete_option('bldr_columns');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_columns', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_columns', 'widget' );

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

		
		
		$column_icon_one   	= isset( $instance['column_icon_one'] ) ? esc_html( $instance['column_icon_one'] ) : '';

		$column_one   	= isset( $instance['column_one'] ) ? esc_html( $instance['column_one'] ) : '';

		$column_one_text  = isset( $instance['column_one_text'] ) ? esc_textarea( $instance['column_one_text'] ) : '';
		
		$column_one_link 	= isset( $instance['column_one_link'] ) ? esc_url( $instance['column_one_link'] ) : '';
		
		$column_one_button  = isset( $instance['column_one_button'] ) ? esc_html( $instance['column_one_button'] ) : '';
		
		$column_icon_two   	= isset( $instance['column_icon_two'] ) ? esc_html( $instance['column_icon_two'] ) : '';

		$column_two   	= isset( $instance['column_two'] ) ? esc_html( $instance['column_two'] ) : '';

		$column_two_text  = isset( $instance['column_two_text'] ) ? esc_textarea( $instance['column_two_text'] ) : '';
		
		$column_two_link 	= isset( $instance['column_two_link'] ) ? esc_url( $instance['column_two_link'] ) : '';
		
		$column_two_button  = isset( $instance['column_two_button'] ) ? esc_html( $instance['column_two_button'] ) : '';
		
		$column_icon_three   	= isset( $instance['column_icon_three'] ) ? esc_html( $instance['column_icon_three'] ) : '';

		$column_three   	= isset( $instance['column_three'] ) ? esc_html( $instance['column_three'] ) : '';

		$column_three_text = isset( $instance['column_three_text'] ) ? esc_textarea( $instance['column_three_text'] ) : '';
		
		$column_three_link 	= isset( $instance['column_three_link'] ) ? esc_url( $instance['column_three_link'] ) : '';
		
		$column_three_button  = isset( $instance['column_three_button'] ) ? esc_html( $instance['column_three_button'] ) : '';
		
		$column_icon_four   	= isset( $instance['column_icon_four'] ) ? esc_html( $instance['column_icon_four'] ) : '';

		$column_four   	= isset( $instance['column_four'] ) ? esc_html( $instance['column_four'] ) : '';		

		$column_four_text = isset( $instance['column_four_text'] ) ? esc_textarea( $instance['column_four_text'] ) : '';
		
		$column_four_link 	= isset( $instance['column_four_link'] ) ? esc_url( $instance['column_four_link'] ) : '';
		
		$column_four_button  = isset( $instance['column_four_button'] ) ? esc_html( $instance['column_four_button'] ) : '';		
		
		$column_number_cols  = isset( $instance['column_number_cols'] ) ? esc_attr( $instance['column_number_cols'] ) : '';

?>


		<?php if ( ! $column_number_cols ) {

			$column_number_cols = 4; 

		} ?>

		<section id="columns" class="home-columns"> 

				<div class="columns"> 
                <div class="grid grid-pad">
                
				<?php if ($column_one !='') : ?> 

            		<div class="col-1-<?php echo esc_attr( $column_number_cols ); ?> column animate-plus" data-animations="fadeIn" data-animation-when-visible="true"> 
						
                        <i class="fa <?php echo esc_html($column_icon_one); ?> column-icon"></i>

						<h4><?php echo esc_html($column_one); ?></h4>
                        
                        <?php if ($column_one_text !='') : ?>				

							<p><?php echo $column_one_text; ?></p>

						<?php endif; ?>
                        
                        <?php if ($column_one_link !='') : ?>

							<a href="<?php echo esc_url($column_one_link); ?>" class="call-to-action">
                    
							<?php echo esc_html($column_one_button); ?>
                    
                    		</a>

						<?php endif; ?>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($column_two !='') : ?>

            		<div class="col-1-<?php echo esc_attr( $column_number_cols ); ?> column animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.2s"> 
						
                        <i class="fa <?php echo esc_html($column_icon_two); ?> column-icon"></i>

						<h4><?php echo esc_html($column_two); ?></h4>
                        
                        <?php if ($column_two_text !='') : ?>				

							<p><?php echo $column_two_text; ?></p>

						<?php endif; ?>
                        
                        <?php if ($column_two_link !='') : ?>

							<a href="<?php echo esc_url($column_two_link); ?>" class="call-to-action">
                    
							<?php echo esc_html($column_two_button); ?>
                    
                    		</a>

						<?php endif; ?>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($column_three !='') : ?>

            		<div class="col-1-<?php echo esc_attr( $column_number_cols ); ?> column animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.4s"> 
						
                        <i class="fa <?php echo esc_html($column_icon_three); ?> column-icon"></i>

						<h4><?php echo esc_html($column_three); ?></h4>
                        
                        <?php if ($column_three_text !='') : ?>				

							<p><?php echo $column_three_text; ?></p>

						<?php endif; ?>
                        
                        <?php if ($column_three_link !='') : ?>

							<a href="<?php echo esc_url($column_three_link); ?>" class="call-to-action">
                    
							<?php echo esc_html($column_three_button); ?>
                    
                    		</a>

						<?php endif; ?>

					</div><!-- .fact -->

				<?php endif; ?>

				<?php if ($column_four !='') : ?>

            		<div class="col-1-<?php echo esc_attr( $column_number_cols ); ?> column animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.4s"> 
						
                        <i class="fa <?php echo esc_html($column_icon_four); ?> column-icon"></i>

						<h4><?php echo esc_html($column_four); ?></h4>
                        
                        <?php if ($column_four_text !='') : ?>				

							<p><?php echo $column_four_text; ?></p>

						<?php endif; ?>
                        
                        <?php if ($column_four_link !='') : ?>

							<a href="<?php echo esc_url($column_four_link); ?>" class="call-to-action">
                    
							<?php echo esc_html($column_four_button); ?>
                    
                    		</a>

						<?php endif; ?>

					</div><!-- .fact --> 

				<?php endif; ?>
               																

			</div>
            
            </div>							

		</section> 			

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_columns', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}