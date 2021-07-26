<?php
/**
 * Displays top navigation
 */
?>
<div class="<?php if( get_theme_mod( 'nikah_wedding_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
  <header id="masthead" class="site-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="logo py-2 text-md-start text-center">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if( get_theme_mod('nikah_wedding_show_site_title',true) != ''){ ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php }?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('nikah_wedding_show_tagline',true) != ''){ ?>
                <p class="site-description m-0">
                  <?php echo esc_html($description); ?>
                </p>
              <?php }?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'nikah-wedding' ); ?>">
    			<button role="tab" class="menu-toggle p-3 my-2 mx-auto" aria-controls="top-menu" aria-expanded="false">
    				<?php
    					esc_html_e( 'Menu', 'nikah-wedding' );
    				?>
    			</button>

    			<?php wp_nav_menu( array(
    				'theme_location' => 'top',
    				'menu_id'        => 'top-menu',
    			) ); ?>
    		  </nav>
        </div>
      </div>
    </div>
  </header>
</div>