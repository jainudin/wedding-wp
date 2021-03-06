<?php
/**
 * Custom header implementation
 */

function nikah_wedding_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'nikah_wedding_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 140,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'nikah_wedding_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'nikah_wedding_custom_header_setup' );

if ( ! function_exists( 'nikah_wedding_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see nikah_wedding_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'nikah_wedding_header_style' );
function nikah_wedding_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$nikah_wedding_custom_css = "
        #masthead{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'nikah-wedding-basic-style', $nikah_wedding_custom_css );
	endif;
}
endif; // nikah_wedding_header_style