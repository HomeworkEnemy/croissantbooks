<?php
/**
 * Custom About us Widget
 */

class Pest_Control_Treatment_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Pest_Control_Treatment_About_Widget',
			__('VW About us', 'pest-control-treatment'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'pest-control-treatment' ), ) 
		);
	}
	
	public function widget( $pest_control_treatment_args, $pest_control_treatment_instance ) {
		?>
		<aside class="widget">
			<?php
			$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
			$pest_control_treatment_author = isset( $pest_control_treatment_instance['author'] ) ? $pest_control_treatment_instance['author'] : '';
			$pest_control_treatment_designation = isset( $pest_control_treatment_instance['designation'] ) ? $pest_control_treatment_instance['designation'] : '';
			$pest_control_treatment_description = isset( $pest_control_treatment_instance['description'] ) ? $pest_control_treatment_instance['description'] : '';
			$pest_control_treatment_read_more_url = isset( $pest_control_treatment_instance['read_more_url'] ) ? $pest_control_treatment_instance['read_more_url'] : '';
			$pest_control_treatment_read_more_text = isset( $pest_control_treatment_instance['read_more_text'] ) ? $pest_control_treatment_instance['read_more_text'] : '';
			$pest_control_treatment_upload_image = isset( $pest_control_treatment_instance['upload_image'] ) ? $pest_control_treatment_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($pest_control_treatment_title) ){ ?><h3 class="custom_title"><?php echo esc_html($pest_control_treatment_title); ?></h3><?php } ?>
		        <?php if($pest_control_treatment_upload_image): ?>
	      			<img src="<?php echo esc_url($pest_control_treatment_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($pest_control_treatment_author) ){ ?><p class="custom_author"><?php echo esc_html($pest_control_treatment_author); ?></p><?php } ?>
				<?php if(!empty($pest_control_treatment_designation) ){ ?><p class="custom_designation"><?php echo esc_html($pest_control_treatment_designation); ?></p><?php } ?>
		        <?php if(!empty($pest_control_treatment_description) ){ ?><p class="custom_desc"><?php echo esc_html($pest_control_treatment_description); ?></p><?php } ?>
		        <?php if(!empty($pest_control_treatment_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($pest_control_treatment_read_more_url); ?>"><?php if(!empty($pest_control_treatment_read_more_text) ){ ?><?php echo esc_html($pest_control_treatment_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $pest_control_treatment_instance ) {	

		$pest_control_treatment_title= ''; $pest_control_treatment_author = ''; $pest_control_treatment_designation = ''; $pest_control_treatment_description= ''; $pest_control_treatment_read_more_text = ''; $pest_control_treatment_read_more_url = ''; $pest_control_treatment_upload_image = '';

		$pest_control_treatment_title = isset( $pest_control_treatment_instance['title'] ) ? $pest_control_treatment_instance['title'] : '';
		$pest_control_treatment_author = isset( $pest_control_treatment_instance['author'] ) ? $pest_control_treatment_instance['author'] : '';
		$pest_control_treatment_designation = isset( $pest_control_treatment_instance['designation'] ) ? $pest_control_treatment_instance['designation'] : '';
		$pest_control_treatment_description = isset( $pest_control_treatment_instance['description'] ) ? $pest_control_treatment_instance['description'] : '';
		$pest_control_treatment_read_more_url = isset( $pest_control_treatment_instance['read_more_url'] ) ? $pest_control_treatment_instance['read_more_url'] : '';
		$pest_control_treatment_read_more_text = isset( $pest_control_treatment_instance['read_more_text'] ) ? $pest_control_treatment_instance['read_more_text'] : '';
		$pest_control_treatment_upload_image = isset( $pest_control_treatment_instance['upload_image'] ) ? $pest_control_treatment_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','pest-control-treatment'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','pest-control-treatment'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','pest-control-treatment'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','pest-control-treatment'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','pest-control-treatment'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($pest_control_treatment_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','pest-control-treatment'); ?></label>
		<?php
			if ( $pest_control_treatment_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($pest_control_treatment_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $pest_control_treatment_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $pest_control_treatment_new_instance, $pest_control_treatment_old_instance ) {
		$pest_control_treatment_instance = array();	
		$pest_control_treatment_instance['title'] = (!empty($pest_control_treatment_new_instance['title']) ) ? strip_tags($pest_control_treatment_new_instance['title']) : '';
		$pest_control_treatment_instance['author'] = ( ! empty( $pest_control_treatment_new_instance['author'] ) ) ? strip_tags($pest_control_treatment_new_instance['author']) : '';
		$pest_control_treatment_instance['designation'] = ( ! empty( $pest_control_treatment_new_instance['designation'] ) ) ? strip_tags($pest_control_treatment_new_instance['designation']) : '';
		$pest_control_treatment_instance['description'] = (!empty($pest_control_treatment_new_instance['description']) ) ? strip_tags($pest_control_treatment_new_instance['description']) : '';
        $pest_control_treatment_instance['read_more_text'] = (!empty($pest_control_treatment_new_instance['read_more_text']) ) ? strip_tags($pest_control_treatment_new_instance['read_more_text']) : '';
        $pest_control_treatment_instance['read_more_url'] = (!empty($pest_control_treatment_new_instance['read_more_url']) ) ? esc_url_raw($pest_control_treatment_new_instance['read_more_url']) : '';
        $pest_control_treatment_instance['upload_image'] = ( ! empty( $pest_control_treatment_new_instance['upload_image'] ) ) ? strip_tags($pest_control_treatment_new_instance['upload_image']) : '';

		return $pest_control_treatment_instance;
	}
}
// Register and load the widget
function pest_control_treatment_about_custom_load_widget() {
	register_widget( 'Pest_Control_Treatment_About_Widget' );
}
add_action( 'widgets_init', 'pest_control_treatment_about_custom_load_widget' );