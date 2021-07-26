<?php
/**
 * Nikah Wedding: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function nikah_wedding_custom_controls() {

	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-control.php' );
}

add_action( 'customize_register', 'nikah_wedding_custom_controls' );

function nikah_wedding_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'nikah_wedding_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'nikah-wedding' ),
	    'description' => __( 'Description of what this panel does.', 'nikah-wedding' ),
	) );

	// font array
	$nikah_wedding_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'nikah_wedding_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'nikah-wedding' ),
		'panel' => 'nikah_wedding_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_paragraph_color', array(
		'label' => __('Paragraph Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_paragraph_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'Paragraph Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	$wp_customize->add_setting('nikah_wedding_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_atag_color', array(
		'label' => __('"a" Tag Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_atag_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( '"a" Tag Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_li_color', array(
		'label' => __('"li" Tag Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_li_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( '"li" Tag Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h1_color', array(
		'label' => __('H1 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h1_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'H1 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h1_font_size',array(
		'label'	=> __('H1 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h2_color', array(
		'label' => __('h2 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h2_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'h2 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h2_font_size',array(
		'label'	=> __('h2 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h3_color', array(
		'label' => __('h3 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h3_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'h3 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h3_font_size',array(
		'label'	=> __('h3 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h4_color', array(
		'label' => __('h4 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h4_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'h4 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h4_font_size',array(
		'label'	=> __('h4 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h5_color', array(
		'label' => __('h5 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h5_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'h5 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h5_font_size',array(
		'label'	=> __('h5 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'nikah_wedding_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_h6_color', array(
		'label' => __('h6 Color', 'nikah-wedding'),
		'section' => 'nikah_wedding_typography',
		'settings' => 'nikah_wedding_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('nikah_wedding_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control(
	    'nikah_wedding_h6_font_family', array(
	    'section'  => 'nikah_wedding_typography',
	    'label'    => __( 'h6 Fonts','nikah-wedding'),
	    'type'     => 'select',
	    'choices'  => $nikah_wedding_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('nikah_wedding_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_h6_font_size',array(
		'label'	=> __('h6 Font Size','nikah-wedding'),
		'section'	=> 'nikah_wedding_typography',
		'setting'	=> 'nikah_wedding_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('nikah_wedding_background_image_type',array(
        'default' => 'Transparent',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','nikah-wedding'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','nikah-wedding'),
            'Background' => __('Background','nikah-wedding'),
        ),
	) );

	// Add the Color Option typography section.
	$wp_customize->add_section( 'nikah_wedding_theme_color_option', array( 
		'panel' => 'nikah_wedding_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'nikah-wedding' )
	));

  	$wp_customize->add_setting( 'nikah_wedding_theme_color', array(
	    'default' => '#d20075',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_theme_color', array(
  		'label' => __( 'Color Option', 'nikah-wedding' ),
	    'description' => __('One can change complete theme color on just one click.', 'nikah-wedding'),
	    'section' => 'nikah_wedding_theme_color_option',
	    'settings' => 'nikah_wedding_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'nikah_wedding_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'nikah-wedding' ),
		'panel' => 'nikah_wedding_panel_id'
	) );

	$wp_customize->add_setting('nikah_wedding_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','nikah-wedding'),
       'section' => 'nikah_wedding_shop_page_options',
    ));

    $wp_customize->add_setting('nikah_wedding_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','nikah-wedding'),
       'section' => 'nikah_wedding_shop_page_options',
    ));

	$wp_customize->add_setting( 'nikah_wedding_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'nikah_wedding_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'nikah_wedding_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'nikah-wedding' ),
		'section'  => 'nikah_wedding_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('nikah_wedding_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));	
	$wp_customize->add_control('nikah_wedding_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','nikah-wedding'),
		'section'	=> 'nikah_wedding_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control( 'nikah_wedding_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control( 'nikah_wedding_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'nikah_wedding_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'nikah_wedding_shop_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','nikah-wedding' ),
		'section' => 'nikah_wedding_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	//Layout Settings
	$wp_customize->add_section( 'nikah_wedding_width_layout', array(
    	'title'      => __( 'Layout Settings', 'nikah-wedding' ),
		'panel' => 'nikah_wedding_panel_id'
	) );

	$wp_customize->add_setting( 'nikah_wedding_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ) );
    $wp_customize->add_control('nikah_wedding_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','nikah-wedding' ),
        'section' => 'nikah_wedding_width_layout'
    ));

	$wp_customize->add_setting('nikah_wedding_loader_setting',array(
       'default' => false,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','nikah-wedding'),
       'section' => 'nikah_wedding_width_layout'
    ));

    $wp_customize->add_setting('nikah_wedding_preloader_types',array(
        'default' => 'Default',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','nikah-wedding'),
        'section' => 'nikah_wedding_width_layout',
        'choices' => array(
            'Default' => __('Default','nikah-wedding'),
            'Circle' => __('Circle','nikah-wedding'),
            'Two Circle' => __('Two Circle','nikah-wedding')
        ),
	) );

    $wp_customize->add_setting( 'nikah_wedding_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'nikah-wedding'),
	    'section' => 'nikah_wedding_width_layout',
	    'settings' => 'nikah_wedding_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'nikah_wedding_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'nikah-wedding'),
	    'section' => 'nikah_wedding_width_layout',
	    'settings' => 'nikah_wedding_loader_background_color',
  	)));

	$wp_customize->add_setting('nikah_wedding_theme_options',array(
    'default' => 'Default',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','nikah-wedding'),
        'description' => __('Here you can change the Width layout. ','nikah-wedding'),
        'section' => 'nikah_wedding_width_layout',
        'choices' => array(
            'Default' => __('Default','nikah-wedding'),
            'Wide Layout' => __('Wide Layout','nikah-wedding'),
            'Box Layout' => __('Box Layout','nikah-wedding'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'nikah_wedding_button_option', array(
		'title' => __('Button','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));

	$wp_customize->add_setting('nikah_wedding_top_bottom_padding',array(
		'default'=> 10,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('nikah_wedding_left_right_padding',array(
		'default'=> 20,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_left_right_padding',array(
		'label'	=> __('Left and Right Padding','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_border_radius', array(
		'default'              => 0,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	) );
	$wp_customize->add_control( 'nikah_wedding_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','nikah-wedding' ),
		'section'     => 'nikah_wedding_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar setting
	$wp_customize->add_section( 'nikah_wedding_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'nikah-wedding' ),
		'panel' => 'nikah_wedding_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('nikah_wedding_layout_settings',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','nikah-wedding'),
        'section' => 'nikah_wedding_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','nikah-wedding'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','nikah-wedding'),
            'Right Sidebar' => __('Right Sidebar','nikah-wedding'),
            'One Column' => __('Full Column','nikah-wedding'),
            'Grid Layout' => __('Grid Layout','nikah-wedding')
        ),
	) );

	$wp_customize->add_setting('nikah_wedding_page_sidebar_option',array(
        'default' => 'One Column',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','nikah-wedding'),
        'section' => 'nikah_wedding_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','nikah-wedding'),
            'Right Sidebar' => __('Right Sidebar','nikah-wedding'),
            'One Column' => __('Full Column','nikah-wedding')
        ),
	) );

	// navigation menu 
	$wp_customize->add_section( 'nikah_wedding_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'nikah-wedding' ),
		'priority'   => null,
		'panel' => 'nikah_wedding_panel_id'
	) );

	$wp_customize->add_setting('nikah_wedding_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','nikah-wedding'),
		'section'=> 'nikah_wedding_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('nikah_wedding_menu_text_tranform',array(
        'default' => 'Default',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
    ));
    $wp_customize->add_control('nikah_wedding_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','nikah-wedding'),
        'section' => 'nikah_wedding_navigation_menu',
        'choices' => array(
            'Default' => __('Default','nikah-wedding'),
            'Capitalize' => __('Capitalize','nikah-wedding'),
        ),
	) );

	$wp_customize->add_setting('nikah_wedding_menu_font_weight',array(
        'default' => 'Default',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
    ));
    $wp_customize->add_control('nikah_wedding_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','nikah-wedding'),
        'section' => 'nikah_wedding_navigation_menu',
        'choices' => array(
            'Default' => __('Default','nikah-wedding'),
            'Normal' => __('Normal','nikah-wedding'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'nikah_wedding_slider' , array(
    	'title'      => __( 'Slider Settings', 'nikah-wedding' ),
		'panel' => 'nikah_wedding_panel_id'
	) );

	$wp_customize->add_setting('nikah_wedding_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
	));
	$wp_customize->add_control('nikah_wedding_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','nikah-wedding'),
      	'section' => 'nikah_wedding_slider',
	));

	$wp_customize->add_setting('nikah_wedding_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','nikah-wedding'),
       'section' => 'nikah_wedding_slider'
    ));

    $wp_customize->add_setting('nikah_wedding_slider_content',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_slider_content',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','nikah-wedding'),
       'section' => 'nikah_wedding_slider'
    ));

    $wp_customize->add_setting('nikah_wedding_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','nikah-wedding'),
       'section' => 'nikah_wedding_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'nikah_wedding_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'nikah_wedding_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'nikah_wedding_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'nikah-wedding' ),
			'section'  => 'nikah_wedding_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'nikah_wedding_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'nikah_wedding_sanitize_number_range',
	));
	$wp_customize->add_control( 'nikah_wedding_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','nikah-wedding' ),
		'section' => 'nikah_wedding_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('nikah_wedding_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_slider_height_option',array(
		'label'	=> __('Slider Height Option','nikah-wedding'),
		'section'=> 'nikah_wedding_slider',
		'type'=> 'number'
	));

    $wp_customize->add_setting('nikah_wedding_slider_content_option',array(
    'default' => 'Center',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','nikah-wedding'),
        'section' => 'nikah_wedding_slider',
        'choices' => array(
            'Center' => __('Center','nikah-wedding'),
            'Left' => __('Left','nikah-wedding'),
            'Right' => __('Right','nikah-wedding'),
        ),
	) );

	$wp_customize->add_setting('nikah_wedding_slider_button_text',array(
		'default'=> __('Read More','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_slider_button_text',array(
		'label'	=> __('Slider Button Text','nikah-wedding'),
		'section'=> 'nikah_wedding_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'nikah_wedding_slider_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'nikah_wedding_sanitize_number_range',
	) );
	$wp_customize->add_control( 'nikah_wedding_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','nikah-wedding' ),
		'section'     => 'nikah_wedding_slider',
		'type'        => 'range',
		'settings'    => 'nikah_wedding_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('nikah_wedding_slider_opacity_color',array(
      'default'              => __('0.7','nikah-wedding'),
      'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));

	$wp_customize->add_control( 'nikah_wedding_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','nikah-wedding' ),
	'section'     => 'nikah_wedding_slider',
	'type'        => 'select',
	'settings'    => 'nikah_wedding_slider_opacity_color',
	'choices' => array(
		'0' =>  esc_attr('0','nikah-wedding'),
		'0.1' =>  esc_attr('0.1','nikah-wedding'),
		'0.2' =>  esc_attr('0.2','nikah-wedding'),
		'0.3' =>  esc_attr('0.3','nikah-wedding'),
		'0.4' =>  esc_attr('0.4','nikah-wedding'),
		'0.5' =>  esc_attr('0.5','nikah-wedding'),
		'0.6' =>  esc_attr('0.6','nikah-wedding'),
		'0.7' =>  esc_attr('0.7','nikah-wedding'),
		'0.8' =>  esc_attr('0.8','nikah-wedding'),
		'0.9' =>  esc_attr('0.9','nikah-wedding')
	),
	));

	$wp_customize->add_setting('nikah_wedding_show_slider_image_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_show_slider_image_overlay',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Image Overlay Slider','nikah-wedding'),
       'section' => 'nikah_wedding_slider'
    ));

    $wp_customize->add_setting('nikah_wedding_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nikah_wedding_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'nikah-wedding'),
		'section'  => 'nikah_wedding_slider',
		'settings' => 'nikah_wedding_color_slider_image_overlay',
	)));

	//The Story of Love Section
	$wp_customize->add_section('nikah_wedding_love_story',array(
		'title'	=> __('The Story of Love Section','nikah-wedding'),
		'description'	=> __('Add The Story of Love sections below.','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('nikah_wedding_love_story_setting',array(
		'sanitize_callback' => 'nikah_wedding_sanitize_choices',
	));
	$wp_customize->add_control('nikah_wedding_love_story_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','nikah-wedding'),
		'section' => 'nikah_wedding_love_story',
	));

	//no Result Setting
	$wp_customize->add_section('nikah_wedding_no_result_setting',array(
		'title'	=> __('No Results Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));	

	$wp_customize->add_setting('nikah_wedding_no_search_result_title',array(
		'default'=> __('Nothing Found','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_no_search_result_title',array(
		'label'	=> __('No Search Results Title','nikah-wedding'),
		'section'=> 'nikah_wedding_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nikah_wedding_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_no_search_result_content',array(
		'label'	=> __('No Search Results Content','nikah-wedding'),
		'section'=> 'nikah_wedding_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('nikah_wedding_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));	

	$wp_customize->add_setting('nikah_wedding_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','nikah-wedding'),
		'section'=> 'nikah_wedding_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nikah_wedding_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','nikah-wedding'),
		'section'=> 'nikah_wedding_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('nikah_wedding_mobile_media',array(
		'title'	=> __('Mobile Media Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));

	$wp_customize->add_setting('nikah_wedding_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','nikah-wedding'),
       'section' => 'nikah_wedding_mobile_media'
    ));

    $wp_customize->add_setting('nikah_wedding_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','nikah-wedding'),
       'section' => 'nikah_wedding_mobile_media'
    ));

    $wp_customize->add_setting('nikah_wedding_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','nikah-wedding'),
       'section' => 'nikah_wedding_mobile_media'
    ));

    $wp_customize->add_setting('nikah_wedding_enable_disable_scrolltop',array(
       'default' => false,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','nikah-wedding'),
       'section' => 'nikah_wedding_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('nikah_wedding_blog_post',array(
		'title'	=> __('Post Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));	

	$wp_customize->add_setting('nikah_wedding_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','nikah-wedding'),
       'section' => 'nikah_wedding_blog_post'
    ));

    $wp_customize->add_setting('nikah_wedding_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new nikah_wedding_Icon_Changer(
        $wp_customize,'nikah_wedding_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','nikah-wedding'),
		'transport' => 'refresh',
		'section'	=> 'nikah_wedding_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('nikah_wedding_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','nikah-wedding'),
       'section' => 'nikah_wedding_blog_post'
    ));

    $wp_customize->add_setting('nikah_wedding_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new nikah_wedding_Icon_Changer(
        $wp_customize,'nikah_wedding_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','nikah-wedding'),
		'transport' => 'refresh',
		'section'	=> 'nikah_wedding_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('nikah_wedding_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','nikah-wedding'),
       'section' => 'nikah_wedding_blog_post'
    ));

    $wp_customize->add_setting('nikah_wedding_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new nikah_wedding_Icon_Changer(
        $wp_customize,'nikah_wedding_post_comment_icon_changer',array(
		'label'	=> __('Post Comments Icon','nikah-wedding'),
		'transport' => 'refresh',
		'section'	=> 'nikah_wedding_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'nikah_wedding_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'nikah_wedding_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','nikah-wedding' ),
		'section'     => 'nikah_wedding_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','nikah-wedding'),
		'type'        => 'text',
		'settings'    => 'nikah_wedding_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('nikah_wedding_blog_post_layout',array(
        'default' => 'Default',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
    ));
    $wp_customize->add_control('nikah_wedding_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','nikah-wedding'),
        'section' => 'nikah_wedding_blog_post',
        'choices' => array(
            'Default' => __('Default','nikah-wedding'),
            'Center' => __('Center','nikah-wedding'),
            'Left' => __('Left','nikah-wedding'),
        ),
	) );

	$wp_customize->add_setting('nikah_wedding_blog_description',array(
    	'default'   => 'Post Excerpt',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','nikah-wedding'),
        'section' => 'nikah_wedding_blog_post',
        'choices' => array(
            'None' => __('None','nikah-wedding'),
            'Post Excerpt' => __('Post Excerpt','nikah-wedding'),
            'Post Content' => __('Post Content','nikah-wedding'),
        ),
	) );

    $wp_customize->add_setting( 'nikah_wedding_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	) );
	$wp_customize->add_control( 'nikah_wedding_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','nikah-wedding' ),
		'section'     => 'nikah_wedding_blog_post',
		'type'        => 'number',
		'settings'    => 'nikah_wedding_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'nikah_wedding_post_excerpt_suffix', array(
		'default'   => __('{...}','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'nikah_wedding_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','nikah-wedding' ),
		'section'     => 'nikah_wedding_blog_post',
		'type'        => 'text',
		'settings'    => 'nikah_wedding_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('nikah_wedding_button_text',array(
		'default'=> __('Read Full','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_button_text',array(
		'label'	=> __('Add Button Text','nikah-wedding'),
		'section'=> 'nikah_wedding_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nikah_wedding_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','nikah-wedding'),
       'section' => 'nikah_wedding_blog_post'
    ));

	$wp_customize->add_setting( 'nikah_wedding_pagination_option', array(
        'default'			=> 'Default',
        'sanitize_callback'	=> 'nikah_wedding_sanitize_choices'
    ));
    $wp_customize->add_control( 'nikah_wedding_pagination_option', array(
        'section' => 'nikah_wedding_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'nikah-wedding' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'nikah-wedding' ),
            'next-prev' => __( 'Next / Previous', 'nikah-wedding' ),
    )));

    // Single post setting
    $wp_customize->add_section('nikah_wedding_single_post_section',array(
		'title'	=> __('Single Post Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));	

	$wp_customize->add_setting('nikah_wedding_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','nikah-wedding'),
       'section' => 'nikah_wedding_single_post_section'
    ));

    $wp_customize->add_setting('nikah_wedding_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','nikah-wedding'),
       'section' => 'nikah_wedding_single_post_section'
    ));

    $wp_customize->add_setting( 'nikah_wedding_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'nikah_wedding_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','nikah-wedding' ),
		'section'     => 'nikah_wedding_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','nikah-wedding'),
		'type'        => 'text',
		'settings'    => 'nikah_wedding_seperator_metabox',
	) );

	$wp_customize->add_setting('nikah_wedding_comment_form_heading',array(
       'default' => __('Leave a Reply','nikah-wedding'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('nikah_wedding_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','nikah-wedding'),
       'section' => 'nikah_wedding_single_post_section'
    ));

    $wp_customize->add_setting('nikah_wedding_comment_button_text',array(
       'default' => __('Post Comment','nikah-wedding'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('nikah_wedding_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','nikah-wedding'),
       'section' => 'nikah_wedding_single_post_section'
    ));

    $wp_customize->add_setting( 'nikah_wedding_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'nikah_wedding_sanitize_number_range',
	));
	$wp_customize->add_control('nikah_wedding_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','nikah-wedding' ),
		'section' => 'nikah_wedding_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('nikah_wedding_related_post_section',array(
		'title'	=> __('Related Post Settings','nikah-wedding'),
		'panel' => 'nikah_wedding_panel_id',
	));	

	$wp_customize->add_setting('nikah_wedding_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
    ));
    $wp_customize->add_control('nikah_wedding_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','nikah-wedding'),
       'section' => 'nikah_wedding_related_post_section',
    ));

	$wp_customize->add_setting( 'nikah_wedding_show_related_post', array(
        'default' => 'By Categories',
        'sanitize_callback'	=> 'nikah_wedding_sanitize_choices'
    ));
    $wp_customize->add_control( 'nikah_wedding_show_related_post', array(
        'section' => 'nikah_wedding_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'nikah-wedding' ),
        'choices' => array(
            'categories'  => __('By Categories', 'nikah-wedding'),
            'tags' => __('By Tags', 'nikah-wedding' ),
    )));

    $wp_customize->add_setting('nikah_wedding_change_related_post_title',array(
		'default'=> __('Related Posts','nikah-wedding'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nikah_wedding_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','nikah-wedding'),
		'section'=> 'nikah_wedding_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('nikah_wedding_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','nikah-wedding'),
		'section'=> 'nikah_wedding_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'nikah_wedding_footer' , array(
    	'title'      => __( 'Footer Section', 'nikah-wedding' ),
		'priority'   => null,
		'panel' => 'nikah_wedding_panel_id'
	) );

	$wp_customize->add_setting('nikah_wedding_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'nikah_wedding_sanitize_choices',
    ));
    $wp_customize->add_control('nikah_wedding_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'nikah-wedding'),
        'section'     => 'nikah_wedding_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'nikah-wedding'),
        'choices' => array(
            '1'     => __('One', 'nikah-wedding'),
            '2'     => __('Two', 'nikah-wedding'),
            '3'     => __('Three', 'nikah-wedding'),
            '4'     => __('Four', 'nikah-wedding')
        ),
    ));

    $wp_customize->add_setting( 'nikah_wedding_footer_widget_background', array(
	    'default' => '#3c3c3b',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nikah_wedding_footer_widget_background', array(
  		'label' => __('Footer Widget Background','nikah-wedding'),
	    'section' => 'nikah_wedding_footer',
  	)));

  	$wp_customize->add_setting('nikah_wedding_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'nikah_wedding_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','nikah-wedding'),
        'section' => 'nikah_wedding_footer'
	)));

	$wp_customize->add_setting('nikah_wedding_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'nikah_wedding_sanitize_checkbox'
	));
	$wp_customize->add_control('nikah_wedding_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','nikah-wedding'),
      	'section' => 'nikah_wedding_footer',
	));

	$wp_customize->add_setting('nikah_wedding_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new nikah_wedding_Icon_Changer(
        $wp_customize,'nikah_wedding_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','nikah-wedding'),
		'transport' => 'refresh',
		'section'	=> 'nikah_wedding_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('nikah_wedding_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'nikah_wedding_sanitize_choices'
	));
	$wp_customize->add_control('nikah_wedding_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','nikah-wedding'),
        'description' => __('Here you can change the Footer layout. ','nikah-wedding'),
        'section' => 'nikah_wedding_footer',
        'choices' => array(
            'Left align' => __('Left align','nikah-wedding'),
            'Right align' => __('Right align','nikah-wedding'),
            'Center align' => __('Center align','nikah-wedding'),
        ),
	) );

	$wp_customize->add_setting('nikah_wedding_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'nikah_wedding_sanitize_number_range',
	));
	$wp_customize->add_control('nikah_wedding_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('nikah_wedding_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('nikah_wedding_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'nikah_wedding_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	) );
	$wp_customize->add_control( 'nikah_wedding_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','nikah-wedding' ),
		'section'     => 'nikah_wedding_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('nikah_wedding_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('nikah_wedding_footer_text',array(
		'label'	=> __('Add Copyright Text','nikah-wedding'),
		'section'	=> 'nikah_wedding_footer',
		'setting'	=> 'nikah_wedding_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('nikah_wedding_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','nikah-wedding'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'nikah_wedding_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('nikah_wedding_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'nikah_wedding_sanitize_float',
	));
	$wp_customize->add_control('nikah_wedding_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','nikah-wedding'),
		'section'=> 'nikah_wedding_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'nikah_wedding_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'nikah_wedding_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'nikah_wedding_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Nikah Wedding 1.0
 * @see nikah-wedding_customize_register()
 *
 * @return void
 */
function nikah_wedding_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Nikah Wedding 1.0
 * @see nikah-wedding_customize_register()
 *
 * @return void
 */
function nikah_wedding_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function nikah_wedding_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Nikah_Wedding_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Nikah_Wedding_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Nikah_Wedding_Customize_Section_Pro(
				$manager,
				'nikah_wedding_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Nikah Wedding Pro', 'nikah-wedding' ),
					'pro_text' => esc_html__( 'Go Pro', 'nikah-wedding' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/wedding-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'nikah-wedding-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'nikah-wedding-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Nikah_Wedding_Customize::get_instance();