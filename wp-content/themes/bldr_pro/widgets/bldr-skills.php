<?php



class bldr_skills extends WP_Widget {
	
	

// constructor

    function bldr_skills() {

		$widget_ops = array('classname' => 'bldr_skills_widget', 'description' => __( 'Got some skills? Show them off with some neat progress bars.', 'bldr') );

        parent::__construct(false, $name = __('Home Page Skills', 'bldr'), $widget_ops);

		$this->alt_option_name = 'bldr_skills_widget';

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

		$skills_desc 	= isset( $instance['skills_desc'] ) ? esc_textarea( $instance['skills_desc'] ) : '';

		$skill_one   	= isset( $instance['skill_one'] ) ? esc_html( $instance['skill_one'] ) : '';

		$skill_one_max  = isset( $instance['skill_one_max'] ) ? absint( $instance['skill_one_max'] ) : '';

		$skill_two   	= isset( $instance['skill_two'] ) ? esc_html( $instance['skill_two'] ) : '';

		$skill_two_max  = isset( $instance['skill_two_max'] ) ? absint( $instance['skill_two_max'] ) : '';

		$skill_three   	= isset( $instance['skill_three'] ) ? esc_html( $instance['skill_three'] ) : '';

		$skill_three_max= isset( $instance['skill_three_max'] ) ? absint( $instance['skill_three_max'] ) : '';

		$skill_four   	= isset( $instance['skill_four'] ) ? esc_html( $instance['skill_four'] ) : '';		

		$skill_four_max = isset( $instance['skill_four_max'] ) ? absint( $instance['skill_four_max'] ) : '';

		$skill_five   	= isset( $instance['skill_five'] ) ? esc_html( $instance['skill_five'] ) : '';

		$skill_five_max = isset( $instance['skill_five_max'] ) ? absint( $instance['skill_five_max'] ) : '';	
	

	?>



	<p>

	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skills_desc'); ?>"><?php _e('Enter your description for the skills area.', 'bldr'); ?></label>

	<textarea class="widefat" id="<?php echo $this->get_field_id('skills_desc'); ?>" name="<?php echo $this->get_field_name('skills_desc'); ?>"><?php echo $skills_desc; ?></textarea>

	</p>



	<!-- Skill one -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_one'); ?>"><?php _e('First Skill', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_one'); ?>" name="<?php echo $this->get_field_name('skill_one'); ?>" type="text" value="<?php echo $skill_one; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_one_max'); ?>"><?php _e('First Skill Percentage', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_one_max'); ?>" name="<?php echo $this->get_field_name('skill_one_max'); ?>" type="text" value="<?php echo $skill_one_max; ?>" />

	</p>



	<!-- Skill two -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_two'); ?>"><?php _e('Second Skill', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_two'); ?>" name="<?php echo $this->get_field_name('skill_two'); ?>" type="text" value="<?php echo $skill_two; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_two_max'); ?>"><?php _e('Second Skill Percentage', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_two_max'); ?>" name="<?php echo $this->get_field_name('skill_two_max'); ?>" type="text" value="<?php echo $skill_two_max; ?>" />

	</p>



	<!-- Skill three -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_three'); ?>"><?php _e('Third skill', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_three'); ?>" name="<?php echo $this->get_field_name('skill_three'); ?>" type="text" value="<?php echo $skill_three; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_three_max'); ?>"><?php _e('Third Skill Percentage', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_three_max'); ?>" name="<?php echo $this->get_field_name('skill_three_max'); ?>" type="text" value="<?php echo $skill_three_max; ?>" />

	</p>



	<!-- Skill four -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_four'); ?>"><?php _e('Fourth Skill', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_four'); ?>" name="<?php echo $this->get_field_name('skill_four'); ?>" type="text" value="<?php echo $skill_four; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_four_max'); ?>"><?php _e('Fourth Skill Percentage', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_four_max'); ?>" name="<?php echo $this->get_field_name('skill_four_max'); ?>" type="text" value="<?php echo $skill_four_max; ?>" />

	</p>



	<!-- Skill five -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_five'); ?>"><?php _e('Fifth Skill', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_five'); ?>" name="<?php echo $this->get_field_name('skill_five'); ?>" type="text" value="<?php echo $skill_five; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_five_max'); ?>"><?php _e('Fifth Skill Percentage', 'bldr'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_five_max'); ?>" name="<?php echo $this->get_field_name('skill_five_max'); ?>" type="text" value="<?php echo $skill_five_max; ?>" />

	</p>						

	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= strip_tags($new_instance['title']);

		$instance['skills_desc'] 	= strip_tags($new_instance['skills_desc']);

		$instance['skill_one'] 		= strip_tags($new_instance['skill_one']);

		$instance['skill_one_max'] 	= intval($new_instance['skill_one_max']);

		$instance['skill_two'] 		= strip_tags($new_instance['skill_two']);

		$instance['skill_two_max'] 	= intval($new_instance['skill_two_max']);

		$instance['skill_three'] 	= strip_tags($new_instance['skill_three']);

		$instance['skill_three_max']= intval($new_instance['skill_three_max']);

		$instance['skill_four'] 	= strip_tags($new_instance['skill_four']);

		$instance['skill_four_max'] = intval($new_instance['skill_four_max']);

		$instance['skill_five'] 	= strip_tags($new_instance['skill_five']);

		$instance['skill_five_max'] = intval($new_instance['skill_five_max']);	

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['bldr_skills']) )

			delete_option('bldr_skills');	  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('bldr_skills', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {
      		

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'bldr_skills', 'widget' );

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



		$title 			= ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Skills', 'bldr' );

		$title 			= apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$skills_desc 	= isset( $instance['skills_desc'] ) ? esc_textarea($instance['skills_desc']) : '';

		$skill_one   	= isset( $instance['skill_one'] ) ? esc_html( $instance['skill_one'] ) : '';

		$skill_one_max  = isset( $instance['skill_one_max'] ) ? absint( $instance['skill_one_max'] ) : '';

		$skill_two   	= isset( $instance['skill_two'] ) ? esc_attr( $instance['skill_two'] ) : '';

		$skill_two_max  = isset( $instance['skill_two_max'] ) ? absint( $instance['skill_two_max'] ) : '';

		$skill_three   	= isset( $instance['skill_three'] ) ? esc_attr( $instance['skill_three'] ) : '';

		$skill_three_max= isset( $instance['skill_three_max'] ) ? absint( $instance['skill_three_max'] ) : '';

		$skill_four   	= isset( $instance['skill_four'] ) ? esc_attr( $instance['skill_four'] ) : '';		

		$skill_four_max = isset( $instance['skill_four_max'] ) ? absint( $instance['skill_four_max'] ) : '';

		$skill_five   	= isset( $instance['skill_five'] ) ? esc_attr( $instance['skill_five'] ) : '';

		$skill_five_max = isset( $instance['skill_five_max'] ) ? absint( $instance['skill_five_max'] ) : ''; 				



?>

		<section id="home-skills" class="home-skills"> 	
                    
                    <div class="grid grid-pad">
        				<div class="col-1-1"><?php if ( $title ) echo $before_title . $title . $after_title; ?></div>
        			</div> 
					
                    <div class="grid grid-pad animate-plus" data-animations="fadeIn" data-animation-when-visible="true" data-animation-delay="0.5s">
                
                		<div class="col-1-2 skills-info"> 

						<?php

						if ($skill_one !='') {

							echo '<p>' . esc_html($skill_one) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_one_max) . '"><div></div></div>';

						}

						if ($skill_two !='') {

							echo '<p>' . esc_html($skill_two) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_two_max) . '"><div></div></div>';

						}

						if ($skill_three !='') {

							echo '<p>' . esc_html($skill_three) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_three_max) . '"><div></div></div>';

						}

						if ($skill_four !='') {

							echo '<p>' . esc_html($skill_four) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_four_max) . '"><div></div></div>';

						}

						if ($skill_five !='') {

							echo '<p>' . esc_html($skill_five) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_five_max) . '"><div></div></div>';

						}

						?>	
                    
                    	</div>
                         	
                    
                    	<?php if ($skills_desc !='') : ?>				

						<div class="col-1-2 skills-p">

							<?php echo esc_textarea($skills_desc); ?>

						</div>

					<?php endif; ?>
                    						

				
			</div>										
		</section>		

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'bldr_skills', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}