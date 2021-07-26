<?php
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * Class to create a custom date picker
 */
class newlyweds_Date_Picker_Custom_Control extends WP_Customize_Control {
	/**
	 * Enqueue the styles and scripts
	 */
	public function enqueue() {
		wp_enqueue_script( 'newlyweds-timepicker-js', get_template_directory_uri() . '/inc/date/jquery-ui-timepicker-addon.js', array(
			'jquery-ui-core',
			'jquery-ui-datepicker'
		), '1.1' );
		wp_enqueue_style( 'newlyweds-jquery-ui-css', get_template_directory_uri() . '/inc/date/jquery-ui.css', false, '1.0' );
		wp_enqueue_style( 'newlyweds-timepicker-css', get_template_directory_uri() . '/inc/date/jquery-ui-timepicker-addon.css', false, '1.1' );
	}

	/**
	 * Render the content on the theme customizer page
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input <?php echo $this->get_link(); ?> type="text" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="datetimepicker"/>
		</label>
		<?php
	}
}
?>