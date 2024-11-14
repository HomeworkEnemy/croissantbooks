<?php
/**
 * Custom Contact us Widget
 */

class Pest_Control_Treatment_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Pest_Control_Treatment_Contact_Widget', 
			__('VW Contact us', 'pest-control-treatment'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'pest-control-treatment' ), ) 
		);
	}
	
	public function widget( $pest_control_treatment_args, $pest_control_treatment_instance ) {
		?>
		<aside class="widget py-3">
			<?php
			$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
			$pest_control_treatment_phone = isset( $pest_control_treatment_instance['phone'] ) ? $pest_control_treatment_instance['phone'] : '';
			$pest_control_treatment_email = isset( $pest_control_treatment_instance['email'] ) ? $pest_control_treatment_instance['email'] : '';
			$pest_control_treatment_address = isset( $pest_control_treatment_instance['address'] ) ? $pest_control_treatment_instance['address'] : '';
			$pest_control_treatment_timing = isset( $pest_control_treatment_instance['timing'] ) ? $pest_control_treatment_instance['timing'] : '';
			$pest_control_treatment_longitude = isset( $pest_control_treatment_instance['longitude'] ) ? $pest_control_treatment_instance['longitude'] : '';
			$pest_control_treatment_latitude = isset( $pest_control_treatment_instance['latitude'] ) ? $pest_control_treatment_instance['latitude'] : '';
			$pest_control_treatment_contact_form = isset( $pest_control_treatment_instance['contact_form'] ) ? $pest_control_treatment_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us py-3">';
	        if(!empty($pest_control_treatment_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($pest_control_treatment_title); ?></h3><?php } ?>
		        <?php if(!empty($pest_control_treatment_phone) ){ ?><p><span class="custom_details"><i class="fa-solid fa-phone me-2"></i></span><span class="custom_desc"><?php echo esc_html($pest_control_treatment_phone); ?></span></p><?php } ?>
		        <?php if(!empty($pest_control_treatment_email) ){ ?><p><span class="custom_details"><i class="fa-solid fa-envelope me-2"></i></span><span class="custom_desc"><?php echo esc_html($pest_control_treatment_email); ?></span></p><?php } ?>
		        <?php if(!empty($pest_control_treatment_address) ){ ?><p>
		        	<div class="d-flex gap-2 location-text">
			        	<span class="custom_details">
			        	<i class="fa-solid fa-location-dot me-2">
			        	</i></span>
			        	<span class="custom_desc"><?php echo esc_html($pest_control_treatment_address); ?></span>
			        	</div></p><?php } ?> 
		        <?php if(!empty($pest_control_treatment_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','pest-control-treatment'); ?></span><span class="custom_desc"><?php echo esc_html($pest_control_treatment_timing); ?></span></p><?php } ?>
		        <?php if(!empty($pest_control_treatment_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($pest_control_treatment_longitude); ?>,<?php echo esc_html($pest_control_treatment_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($pest_control_treatment_contact_form) ){ ?><?php echo do_shortcode($pest_control_treatment_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $pest_control_treatment_instance ) {

		$pest_control_treatment_title= ''; $pest_control_treatment_phone= ''; $pest_control_treatment_email = ''; $pest_control_treatment_address = ''; $pest_control_treatment_timing = ''; $pest_control_treatment_longitude = ''; $pest_control_treatment_latitude = ''; $pest_control_treatment_contact_form = ''; 
		
		$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
		$pest_control_treatment_phone = isset( $pest_control_treatment_instance['phone'] ) ? $pest_control_treatment_instance['phone'] : '';
		$pest_control_treatment_email = isset( $pest_control_treatment_instance['email'] ) ? $pest_control_treatment_instance['email'] : '';
		$pest_control_treatment_address = isset( $pest_control_treatment_instance['address'] ) ? $pest_control_treatment_instance['address'] : '';
		$pest_control_treatment_timing = isset( $pest_control_treatment_instance['timing'] ) ? $pest_control_treatment_instance['timing'] : '';
		$pest_control_treatment_longitude = isset( $pest_control_treatment_instance['longitude'] ) ? $pest_control_treatment_instance['longitude'] : '';
		$pest_control_treatment_latitude = isset( $pest_control_treatment_instance['latitude'] ) ? $pest_control_treatment_instance['latitude'] : '';
		$pest_control_treatment_contact_form = isset( $pest_control_treatment_instance['contact_form'] ) ? $pest_control_treatment_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','pest-control-treatment'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $pest_control_treatment_new_instance, $pest_control_treatment_old_instance ) {
		$pest_control_treatment_instance = array();	
		$pest_control_treatment_instance['title'] = (!empty($pest_control_treatment_new_instance['title']) ) ? strip_tags($pest_control_treatment_new_instance['title']) : '';
		$pest_control_treatment_instance['phone'] = (!empty($pest_control_treatment_new_instance['phone']) ) ? pest_control_treatment_sanitize_phone_number($pest_control_treatment_new_instance['phone']) : '';
		$pest_control_treatment_instance['email'] = (!empty($pest_control_treatment_new_instance['email']) ) ? sanitize_email($pest_control_treatment_new_instance['email']) : '';
		$pest_control_treatment_instance['address'] = (!empty($pest_control_treatment_new_instance['address']) ) ? strip_tags($pest_control_treatment_new_instance['address']) : '';
		$pest_control_treatment_instance['timing'] = (!empty($pest_control_treatment_new_instance['timing']) ) ? strip_tags($pest_control_treatment_new_instance['timing']) : '';
		$pest_control_treatment_instance['longitude'] = (!empty($pest_control_treatment_new_instance['longitude']) ) ? strip_tags($pest_control_treatment_new_instance['longitude']) : '';
		$pest_control_treatment_instance['latitude'] = (!empty($pest_control_treatment_new_instance['latitude']) ) ? strip_tags($pest_control_treatment_new_instance['latitude']) : '';
		$pest_control_treatment_instance['contact_form'] = (!empty($pest_control_treatment_new_instance['contact_form']) ) ? strip_tags($pest_control_treatment_new_instance['contact_form']) : '';
        
		return $pest_control_treatment_instance;
	}
}
// Register and load the widget
function pest_control_treatment_contact_custom_load_widget() {
	register_widget( 'Pest_Control_Treatment_Contact_Widget' );
}
add_action( 'widgets_init', 'pest_control_treatment_contact_custom_load_widget' );