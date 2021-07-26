<?php
/*--------------------------------------------------------------
 * newlyweds functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newlyweds
--------------------------------------------------------------*/

if ( ! function_exists( 'newlyweds_setup' ) ) :
	/*--------------------------------------------------------------
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	--------------------------------------------------------------*/
	function newlyweds_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on newlyweds, use a find and replace
		 * to change 'newlyweds' to the name of your theme in all the template files.
		--------------------------------------------------------------*/
		load_theme_textdomain( 'newlyweds', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		--------------------------------------------------------------*/
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		--------------------------------------------------------------*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'newlyweds' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		--------------------------------------------------------------*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Custom Logo.
		 * See https://codex.wordpress.org/Theme_Logo
		--------------------------------------------------------------*/
		add_theme_support( 'custom-logo', array(
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'newlyweds_custom_background_args', array(
			'default-color' => 'f2e9da',
			'default-image' => '',
		) ) );

		// Visual editor stylesheet
		add_editor_style( 'editor.css' );

		// Enable support for WooCommerce.
		add_theme_support( 'woocommerce' );
	}
endif;
add_action( 'after_setup_theme', 'newlyweds_setup' );

/*--------------------------------------------------------------
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
--------------------------------------------------------------*/
function newlyweds_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newlyweds_content_width', 640 );
}

add_action( 'after_setup_theme', 'newlyweds_content_width', 0 );

/*--------------------------------------------------------------
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
--------------------------------------------------------------*/
function newlyweds_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'newlyweds' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Footer', 'newlyweds' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Shop', 'newlyweds' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'newlyweds_widgets_init' );

/*--------------------------------------------------------------
* Countdown
--------------------------------------------------------------*/
function newlyweds_wedding_countdown() {
	$timeLeft = max( 0, strtotime( get_theme_mod( 'newlyweds_countdown_setting' ) ) - current_time( 'timestamp' ) );

	$w  = intval( $timeLeft / ( 60 * 60 * 24 * 7 ) );
	$tl = ( $timeLeft - ( $w * 7 * 24 * 60 * 60 ) );
	$d  = intval( $tl / ( 60 * 60 * 24 ) );
	$tl = ( $tl - ( $d * 24 * 60 * 60 ) );
	$h  = intval( $tl / ( 60 * 60 ) );
	$tl = ( $tl - ( $h * 60 * 60 ) );
	$m  = intval( $tl / 60 );
	$s  = $tl - $m * 60;

	$wclass = 'countdown-nr countdown-weeks-digit';
	if ( $w >= 100 ) {
		$wclass = 'countdown-tdash countdown-weeks-tdash';
	}

	$weeks = array();
	do {
		array_unshift( $weeks, $w % 10 );
		$w = intval( $w / 10 );
	} while ( $w >= 10 );
	array_unshift( $weeks, $w );

	$days = array();
	do {
		array_unshift( $days, $d % 10 );
		$d = intval( $d / 10 );
	} while ( $d >= 10 );
	array_unshift( $days, $d );

	$hours = array();
	do {
		array_unshift( $hours, $h % 10 );
		$h = intval( $h / 10 );
	} while ( $h >= 10 );
	array_unshift( $hours, $h );

	$mins = array();
	do {
		array_unshift( $mins, $m % 10 );
		$m = intval( $m / 10 );
	} while ( $m >= 10 );
	array_unshift( $mins, $m );

	$secs = array();
	do {
		array_unshift( $secs, $s % 10 );
		$s = intval( $s / 10 );
	} while ( $s >= 10 );
	array_unshift( $secs, $s );
	?>

	<?php if ( get_theme_mod( 'newlyweds_countdown_setting' ) && is_front_page() ) { ?>
		<section id="countdown-section-wrapper">
			<div id="countdown-section">
				<div class="<?php echo $wclass; ?>">
					<?php foreach ( $weeks as $week ) { ?>
						<div class="countdown-digit">
							<div class="top"><?php echo $week; ?></div>
							<div class="bottom"></div>
						</div>
					<?php } ?>
					<span class="countdown-text">
					<?php
					if ( get_theme_mod( 'newlyweds_countdown_weeks' ) ) {
						echo esc_html( get_theme_mod( 'newlyweds_countdown_weeks' ) );
					} else {
						echo( esc_html__( 'Weeks', 'newlyweds' ) );
					} ?>
				</span>
				</div>
				<div class="countdown-nr countdown-days">
					<?php foreach ( $days as $day ) { ?>
						<div class="countdown-digit">
							<div class="top"><?php echo $day; ?></div>
							<div class="bottom"></div>
						</div>
					<?php } ?>
					<span class="countdown-text">
					<?php
					if ( get_theme_mod( 'newlyweds_countdown_days' ) ) {
						echo esc_html( get_theme_mod( 'newlyweds_countdown_days' ) );
					} else {
						echo( esc_html__( 'Days', 'newlyweds' ) );
					} ?>
				</span>
				</div>
				<div class="countdown-nr countdown-hours-digit">
					<?php foreach ( $hours as $hour ) { ?>
						<div class="countdown-digit">
							<div class="top"><?php echo $hour; ?></div>
							<div class="bottom"></div>
						</div>
					<?php } ?>
					<span class="countdown-text">
					<?php
					if ( get_theme_mod( 'newlyweds_countdown_hours' ) ) {
						echo esc_html( get_theme_mod( 'newlyweds_countdown_hours' ) );
					} else {
						echo( esc_html__( 'Hours', 'newlyweds' ) );
					} ?>
				</span>
				</div>
				<div class="countdown-nr countdown-mins-digit">
					<?php foreach ( $mins as $min ) { ?>
						<div class="countdown-digit">
							<div class="top"><?php echo $min; ?></div>
							<div class="bottom"></div>
						</div>
					<?php } ?>
					<span class="countdown-text">
					<?php
					if ( get_theme_mod( 'newlyweds_countdown_minutes' ) ) {
						echo esc_html( get_theme_mod( 'newlyweds_countdown_minutes' ) );
					} else {
						echo( esc_html__( 'Minutes', 'newlyweds' ) );
					} ?>
				</span>
				</div>
				<div class="countdown-nr countdown-secs-digit">
					<?php foreach ( $secs as $sec ) { ?>
						<div class="countdown-digit">
							<div class="top"><?php echo $sec; ?></div>
							<div class="bottom"></div>
						</div>
					<?php } ?>
					<span class="countdown-text">
					<?php
					if ( get_theme_mod( 'newlyweds_countdown_seconds' ) ) {
						echo esc_html( get_theme_mod( 'newlyweds_countdown_seconds' ) );
					} else {
						echo( esc_html__( 'Seconds', 'newlyweds' ) );
					} ?>
				</span>
				</div>
			</div>
			<div id="countdown-section-bg"></div>
		</section>
	<?php }
}

/*--------------------------------------------------------------
 * Fallback for sanitize_textarea_field
--------------------------------------------------------------*/
if ( ! function_exists( 'sanitize_textarea_field' ) ) {
	function sanitize_textarea_field( $str ) {
		return sanitize_text_field( $str );
	}
}

/*--------------------------------------------------------------
 * Enqueue scripts and styles.
--------------------------------------------------------------*/
function newlyweds_scripts() {
	// Load latest css version
	wp_enqueue_style( 'newlyweds-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.4', "all" );

	// Fonts
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', '4.7.0' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,600|Great+Vibes&subset=latin,latin-ext', null, array(), 'all' );

	wp_enqueue_script( 'newlyweds-countdown-script', get_template_directory_uri() . '/js/countdown.js', array( 'jquery' ), '1.0.1', true );

	wp_localize_script( 'newlyweds-countdown-script', 'newlyweds_countdown',
		array(
			'timeLeft' => max( 0, strtotime( get_theme_mod( 'newlyweds_countdown_setting' ) ) - time() )
		)
	);

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'newlyweds-custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'newlyweds_scripts' );

/*--------------------------------------------------------------
 * Custom template tags for this theme.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';

/*--------------------------------------------------------------
 * Custom functions that act independently of the theme templates.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/extras.php';

/*--------------------------------------------------------------
 * Customizer additions.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/customizer.php';

/*--------------------------------------------------------------
 * Load Jetpack compatibility file.
--------------------------------------------------------------*/
require get_template_directory() . '/inc/jetpack.php';
