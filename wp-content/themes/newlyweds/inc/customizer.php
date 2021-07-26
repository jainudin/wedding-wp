<?php
/**
 * newlyweds Theme Customizer.
 *
 * @package newlyweds
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function newlyweds_customize_register( $wp_customize ) {

	// Bride and Groom Images

	$wp_customize->add_section(
		'newlyweds_header_images',
		array(
			'title'    => __( 'Bride and Groom Images', 'newlyweds' ),
			'priority' => 1,
		) );

	$wp_customize->add_setting(
		'newlyweds_header_image1_setting',
		array(
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'newlyweds_header_image1_control',
			array(
				'label'    => __( 'Image Left', 'newlyweds' ),
				'section'  => 'newlyweds_header_images',
				'settings' => 'newlyweds_header_image1_setting',
				'type'     => 'cropped_image',
				'width'     => 400,
				'height'     => 400,
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_header_image2_setting',
		array(
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'newlyweds_header_image2_control',
			array(
				'label'    => __( 'Image Right', 'newlyweds' ),
				'section'  => 'newlyweds_header_images',
				'settings' => 'newlyweds_header_image2_setting',
				'type'     => 'cropped_image',
				'width'     => 400,
				'height'     => 400,
			)
		)
	);

	// Countdown

	$wp_customize->add_section(
		'newlyweds_countdown_section',
		array(
			'title'    => __( 'Countdown', 'newlyweds' ),
			'priority' => 2,
		) );

	require_once get_template_directory() . '/inc/date/date-picker-custom-control.php';
	$wp_customize->add_setting( 'newlyweds_countdown_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control( new newlyweds_Date_Picker_Custom_Control( $wp_customize, 'newlyweds_countdown_control',
			array(
				'label'    => __( 'Countdown date and time', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_setting',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_countdown_weeks',
		array(
			'default'           => 'Weeks',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_countdown_weeks_control',
			array(
				'label'    => __( 'Weeks translation', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_weeks',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_countdown_days',
		array(
			'default'           => 'Days',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_countdown_days_control',
			array(
				'label'    => __( 'Days translation', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_days',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_countdown_hours',
		array(
			'default'           => 'Hours',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_countdown_hours_control',
			array(
				'label'    => __( 'Hours translation', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_hours',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_countdown_minutes',
		array(
			'default'           => 'Minutes',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_countdown_minutes_control',
			array(
				'label'    => __( 'Minutes translation', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_minutes',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_countdown_seconds',
		array(
			'default'           => 'Seconds',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_countdown_seconds_control',
			array(
				'label'    => __( 'Seconds translation', 'newlyweds' ),
				'section'  => 'newlyweds_countdown_section',
				'settings' => 'newlyweds_countdown_seconds',
				'type'     => 'text',
			)
		)
	);

	// Events

	$wp_customize->add_section(
		'newlyweds_details_section',
		array(
			'title'    => __( 'Events', 'newlyweds' ),
			'priority' => 3,
		) );

	$wp_customize->add_setting(
		'newlyweds_details_main_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_main_title_control',
			array(
				'label'    => __( 'Section Title', 'newlyweds' ),
				'description'    => __( 'Default is Events', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_main_title',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_subtitle_one',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_subtitle_one_control',
			array(
				'label'    => __( 'Event 1 title', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_subtitle_one',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_text_one',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_text_one_control',
			array(
				'label'    => __( 'Event 1 text', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_text_one',
				'type'     => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_subtitle_two',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_subtitle_two_control',
			array(
				'label'    => __( 'Event 2 title', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_subtitle_two',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_text_two',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_text_two_control',
			array(
				'label'    => __( 'Event 2 text', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_text_two',
				'type'     => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_subtitle_three',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_subtitle_three_control',
			array(
				'label'    => __( 'Event 3 title', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_subtitle_three',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_text_three',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_text_three_control',
			array(
				'label'    => __( 'Event 3 text', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_text_three',
				'type'     => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_subtitle_four',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_subtitle_four_control',
			array(
				'label'    => __( 'Event 4 title', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_subtitle_four',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_text_four',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_text_four_control',
			array(
				'label'    => __( 'Event 4 text', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_text_four',
				'type'     => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_subtitle_five',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_subtitle_five_control',
			array(
				'label'    => __( 'Event 5 title', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_subtitle_five',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_details_text_five',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_details_text_five_control',
			array(
				'label'    => __( 'Event 5 text', 'newlyweds' ),
				'section'  => 'newlyweds_details_section',
				'settings' => 'newlyweds_details_text_five',
				'type'     => 'textarea',
			)
		)
	);

	// Social Media Icons

	$wp_customize->add_section(
		'newlyweds_social_media_section',
		array(
			'title'    => __( 'Social Media Icons', 'newlyweds' ),
			'priority' => 4,
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_twitter',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_sm_twitter',
			array(
				'label'    => __( 'Twitter URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_twitter',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_facebook',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_sm_facebook',
			array(
				'label'    => __( 'Facebook URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_facebook',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_instagram',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'newlyweds_sm_instagram',
			array(
				'label'    => __( 'Instagram URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_instagram',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_snapchat',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'newlyweds_sm_snapchat', array(
				'label'    => __( 'Snapchat URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_snapchat',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_youtube',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_sm_youtube',
			array(
				'label'    => __( 'YouTube URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_youtube',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'newlyweds_social_media_googleplus',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'newlyweds_sm_googleplus',
			array(
				'label'    => __( 'Google+ URL', 'newlyweds' ),
				'section'  => 'newlyweds_social_media_section',
				'settings' => 'newlyweds_social_media_googleplus',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}

add_action( 'customize_register', 'newlyweds_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function newlyweds_customize_preview_js() {
	wp_enqueue_script( 'newlyweds-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20160308.001', true );
}

add_action( 'customize_preview_init', 'newlyweds_customize_preview_js' );

function newlyweds_customize_control_js() {
	wp_enqueue_script( 'newlyweds-customizer-controls', get_template_directory_uri() . '/js/customizer-controls.js', array( 'customize-controls' ), '20160214.003', true );
}

add_action( 'customize_controls_init', 'newlyweds_customize_control_js' );
