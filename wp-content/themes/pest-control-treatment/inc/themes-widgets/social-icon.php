<?php
/**
 * Custom Social Widget
 */

class Pest_Control_Treatment_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Pest_Control_Treatment_Social_Widget',
			__('VW Social Icon', 'pest-control-treatment'),
			array( 'description' => __( 'Widget for Social icons section', 'pest-control-treatment' ), ) 
		);
	}

	public function widget( $pest_control_treatment_args, $pest_control_treatment_instance ) { ?>
		<div class="widget">
			<?php
			$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
			$pest_control_treatment_facebook = isset( $pest_control_treatment_instance['facebook'] ) ? $pest_control_treatment_instance['facebook'] : '';
			$pest_control_treatment_twitter = isset( $pest_control_treatment_instance['twitter'] ) ? $pest_control_treatment_instance['twitter'] : '';
			$pest_control_treatment_instagram = isset( $pest_control_treatment_instance['instagram'] ) ? $pest_control_treatment_instance['instagram'] : '';
			$pest_control_treatment_youtube = isset( $pest_control_treatment_instance['youtube'] ) ? $pest_control_treatment_instance['youtube'] : '';
			$pest_control_treatment_dribbal = isset( $pest_control_treatment_instance['dribbal'] ) ? $pest_control_treatment_instance['dribbal'] : '';
			$pest_control_treatment_linkedin = isset( $pest_control_treatment_instance['linkedin'] ) ? $pest_control_treatment_instance['linkedin'] : '';
			$pest_control_treatment_pinterest = isset( $pest_control_treatment_instance['pinterest'] ) ? $pest_control_treatment_instance['pinterest'] : '';
			$pest_control_treatment_tumblr = isset( $pest_control_treatment_instance['tumblr'] ) ? $pest_control_treatment_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($pest_control_treatment_title) ){ ?><h3 class="custom_title"><?php echo esc_html($pest_control_treatment_title); ?></h3><?php } ?>
	        <?php if(!empty($pest_control_treatment_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($pest_control_treatment_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','pest-control-treatment' );?></span></a></p><?php } ?>

	        <?php if(!empty($pest_control_treatment_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($pest_control_treatment_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','pest-control-treatment' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($pest_control_treatment_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($pest_control_treatment_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','pest-control-treatment' );?></span></a></p><?php } ?>

	        <?php if(!empty($pest_control_treatment_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($pest_control_treatment_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','pest-control-treatment' );?></span></a></p><?php } ?>

	        <?php if(!empty($pest_control_treatment_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($pest_control_treatment_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','pest-control-treatment' );?></span></a></p><?php } ?>

	        <?php if(!empty($pest_control_treatment_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($pest_control_treatment_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','pest-control-treatment' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($pest_control_treatment_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($pest_control_treatment_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','pest-control-treatment' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($pest_control_treatment_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($pest_control_treatment_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','pest-control-treatment' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $pest_control_treatment_instance ) {

		$pest_control_treatment_title= ''; $pest_control_treatment_facebook = ''; $pest_control_treatment_twitter = ''; $pest_control_treatment_linkedin = '';  $pest_control_treatment_pinterest = '';$pest_control_treatment_tumblr = ''; $pest_control_treatment_instagram = ''; $pest_control_treatment_youtube = ''; 

		$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
		$pest_control_treatment_facebook = isset( $pest_control_treatment_instance['facebook'] ) ? $pest_control_treatment_instance['facebook'] : '';
		$pest_control_treatment_instagram = isset( $pest_control_treatment_instance['instagram'] ) ? $pest_control_treatment_instance['instagram'] : '';
		$pest_control_treatment_twitter = isset( $pest_control_treatment_instance['twitter'] ) ? $pest_control_treatment_instance['twitter'] : '';
		$pest_control_treatment_youtube = isset( $pest_control_treatment_instance['youtube'] ) ? $pest_control_treatment_instance['youtube'] : '';
		$pest_control_treatment_dribbal = isset( $pest_control_treatment_instance['dribbal'] ) ? $pest_control_treatment_instance['dribbal'] : '';
		$pest_control_treatment_linkedin = isset( $pest_control_treatment_instance['linkedin'] ) ? $pest_control_treatment_instance['linkedin'] : '';
		$pest_control_treatment_pinterest = isset( $pest_control_treatment_instance['pinterest'] ) ? $pest_control_treatment_instance['pinterest'] : '';
		$pest_control_treatment_tumblr = isset( $pest_control_treatment_instance['tumblr'] ) ? $pest_control_treatment_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','pest-control-treatment'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $pest_control_treatment_new_instance, $pest_control_treatment_old_instance ) {
		$pest_control_treatment_instance = array();
		$pest_control_treatment_instance['title'] = (!empty($pest_control_treatment_new_instance['title']) ) ? strip_tags($pest_control_treatment_new_instance['title']) : '';	
        $pest_control_treatment_instance['facebook'] = (!empty($pest_control_treatment_new_instance['facebook']) ) ? esc_url_raw($pest_control_treatment_new_instance['facebook']) : '';
        $pest_control_treatment_instance['twitter'] = (!empty($pest_control_treatment_new_instance['twitter']) ) ? esc_url_raw($pest_control_treatment_new_instance['twitter']) : '';
        $pest_control_treatment_instance['instagram'] = (!empty($pest_control_treatment_new_instance['instagram']) ) ? esc_url_raw($pest_control_treatment_new_instance['instagram']) : '';
        $pest_control_treatment_instance['youtube'] = (!empty($pest_control_treatment_new_instance['youtube']) ) ? esc_url_raw($pest_control_treatment_new_instance['youtube']) : '';
        $pest_control_treatment_instance['dribbal'] = (!empty($pest_control_treatment_new_instance['dribbal']) ) ? esc_url_raw($pest_control_treatment_new_instance['dribbal']) : '';
        $pest_control_treatment_instance['linkedin'] = (!empty($pest_control_treatment_new_instance['linkedin']) ) ? esc_url_raw($pest_control_treatment_new_instance['linkedin']) : '';
        $pest_control_treatment_instance['pinterest'] = (!empty($pest_control_treatment_new_instance['pinterest']) ) ? esc_url_raw($pest_control_treatment_new_instance['pinterest']) : '';
        $pest_control_treatment_instance['tumblr'] = (!empty($pest_control_treatment_new_instance['tumblr']) ) ? esc_url_raw($pest_control_treatment_new_instance['tumblr']) : '';
     	
     	
		return $pest_control_treatment_instance;
	}
}

function pest_control_treatment_custom_load_widget() {
	register_widget( 'Pest_Control_Treatment_Social_Widget' );
}
add_action( 'widgets_init', 'pest_control_treatment_custom_load_widget' );