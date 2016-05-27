<?php



class bldr_Action extends WP_Widget {



// constructor

    function bldr_action() {

		$widget_ops = array('classname' => 'bldr_action_widget', 'description' => __( 'Create a widget area for your home page.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Widget Call-to-Action', 'bldr'), $widget_ops); 

		$this->alt_option_name = 'bldr_action_widget'; 

		

		add_action( 'save_post', array($this, 'flush_widget_cache') ); 

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     			= isset( $instance['title'] ) ? esc_html( $instance['title'] ) : '';

		$action_text 		= isset( $instance['action_text'] ) ? wp_kses_post( $instance['action_text'] ) : '';

		$action_btn_link 	= isset( $instance['action_btn_link'] ) ? esc_url_raw( $instance['action_btn_link'] ) : ''; 

		$action_btn_text 	= isset( $instance['action_btn_text'] ) ? esc_html( $instance['action_btn_text'] ) : '';
		
		$image_upload 			= isset( $instance['image_upload'] ) ? esc_url_raw( $instance['image_upload'] ) : '';


	?>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('title')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('title')); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />

	</p>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('action_text')); ?>"><?php _e('Enter your call to action.', 'bldr'); ?></label>

	<textarea class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('action_text')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('action_text')); ?>"><?php echo wp_kses_post( $action_text ); ?></textarea> 

	</p>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('action_btn_link')); ?>"><?php _e('Link for the button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('action_btn_link')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('action_btn_link')); ?>" type="text" value="<?php echo esc_url_raw( $action_btn_link ); ?>" />

	</p>



	<p>

	<label for="<?php echo sanitize_text_field( $this->get_field_id('action_btn_text')); ?>"><?php _e('Title for the button', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo sanitize_text_field( $this->get_field_id('action_btn_text')); ?>" name="<?php echo sanitize_text_field( $this->get_field_name('action_btn_text')); ?>" type="text" value="<?php echo esc_html( $action_btn_text ); ?>" />

	</p>
    
    
    <?php

        if ( $image_upload != '' ) :

           echo '<p><img class="custom_media_image" src="' . esc_url_raw( $image_upload ) . '" style="max-width:100px;" /></p>';

        endif; 

    ?>

    <p><label for="<?php echo sanitize_text_field( $this->get_field_id('image_upload')); ?>"><?php _e('Make your Call-to-Action background an image (Use a picture that is 1200px x 800px for best results). IMPORTANT - Go to Edit Row > Theme > Background image and paste image URL to populate. Delete the URL below after you have copied it.', 'bldr'); ?></label></p> 

    <p><input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo sanitize_text_field( $this->get_field_name('image_upload')); ?>" value="Upload Image" style="margin-top:5px;" /></p>

	<p><input class="widefat custom_media_url" id="<?php echo sanitize_text_field( $this->get_field_id( 'image_upload' )); ?>" name="<?php echo sanitize_text_field( $this->get_field_name( 'image_upload' )); ?>" type="text" value="<?php echo esc_url_raw( $image_upload ); ?>" size="3" /></p>	

	

	<?php 

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			 = esc_html($new_instance['title']); 

		$instance['action_text'] 	 = wp_kses_post($new_instance['action_text']);

		$instance['action_btn_link'] = esc_url_raw($new_instance['action_btn_link']);

		$instance['action_btn_text'] = esc_html($new_instance['action_btn_text']); 
		
		$instance['image_upload'] 		 = esc_url_raw( $new_instance['image_upload'] );			

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_action']) )

			delete_option('bldr_action');		  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_action', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_action', 'widget' );

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



		$title 			 = ( ! empty( $instance['title'] ) ) ? esc_html( $instance['title'] ) : '';

		$title 			 = apply_filters( 'widget_title', $title, $instance, $this->id_base ); 

		$action_text 	 = isset( $instance['action_text'] ) ? wp_kses_post($instance['action_text']) : '';

		$action_btn_link = isset( $instance['action_btn_link'] ) ? esc_url($instance['action_btn_link']) : '';

		$action_btn_text = isset( $instance['action_btn_text'] ) ? esc_html($instance['action_btn_text']) : '';

		$image_upload 		 = isset( $instance['image_upload'] ) ? esc_url($instance['image_upload']) : '';


?>

		<section id="home-cta" class="action-area">

			<div class="grid grid-pad">
            
            	<div class="col-1-1">

				<?php if ( $title ) echo $before_title . esc_html( $title ) . $after_title; ?>  

				<?php if ($action_text !='') : ?>				

						<p><?php echo wp_kses_post( $action_text ); ?></p>

				<?php endif; ?>

				
                
                </div> 

			</div>	
            
            <?php if ($action_btn_link !='') : ?>

					<a href="<?php echo esc_url( $action_btn_link ); ?>" class="call-to-action"> 
                    
						<button><?php echo esc_html( $action_btn_text ); ?></button> 
                    
                    </a>

			<?php endif; ?>	
            
            <?php if ($image_upload != '') : ?>

			<style type="text/css">

				.action-area {

				    display: block;			    

					background: url(<?php echo esc_url( $image_upload ); ?>) no-repeat;
					background-position: center top;
					background-attachment: fixed; 
					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover; 
  					background-size: cover; 
					z-index: -1;

				}

			</style>

		<?php endif; ?>									

		</section>		

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_action', $cache, 'widget' ); 

		} else {

			ob_end_flush();

		}

	}

	

}