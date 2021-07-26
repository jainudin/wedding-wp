<?php
/**
 * The header for our theme 
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('nikah_wedding_loader_setting',false)){ ?>
	    <div id="pre-loader">
	      	<div class='demo'>
		        <?php $nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_preloader_types','Default');
		        if($nikah_wedding_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($nikah_wedding_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($nikah_wedding_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		     	<?php } ?>
	      	</div>
		</div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'nikah-wedding' ); ?></a>
	<div id="page" class="site">
	<?php get_template_part( 'template-parts/navigation/navigation-top' ); ?>

		<div class="site-content-contain">
			<div id="content">
