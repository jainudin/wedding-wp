<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newlyweds' ); ?></a>

	<div id="site-wrapper">

		<header id="masthead" class="site-header">

			<a id="nav-toggle" class="nav-slide-button" href="#"><span></span></a>
			<nav class="pull">
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'top-nav',
					'depth'          => 1
				) ); ?>
			</nav><!-- #site-navigation -->

			<div class="site-branding">
				<?php
				if ( has_custom_logo() ) :
					// Display the Custom Logo
					the_custom_logo();

				// No Custom Logo, but bride and groom images
				elseif ( ! has_custom_logo() && get_theme_mod( 'newlyweds_header_image1_setting' ) || get_theme_mod( 'newlyweds_header_image2_setting' ) ) : ?>
					<div class="header-avatar" style="background-image: url(<?php echo esc_url(wp_get_attachment_url( get_theme_mod( 'newlyweds_header_image1_setting' ))); ?>);"></div>
					<div class="header-avatar" style="background-image: url(<?php echo esc_url(wp_get_attachment_url( get_theme_mod( 'newlyweds_header_image2_setting' ))); ?>);"></div>
				<?php endif; ?>


				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
				<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</p>
					<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif ?>

				<div class="clear"></div>
				<div class="ribbon"></div>
			</div><!-- .site-branding -->

		</header><!-- #masthead -->

		<?php if ( is_front_page() && is_home() ) { ?>

			<?php newlyweds_wedding_countdown(); ?>

			<?php if ( get_theme_mod( 'newlyweds_details_main_title' ) || get_theme_mod( 'newlyweds_details_subtitle_one' ) ) { ?>
				<section class="section-wide">
					<h2 class="section-title">
						<?php
						if ( get_theme_mod( 'newlyweds_details_main_title' ) ) {
							echo esc_html(get_theme_mod( 'newlyweds_details_main_title' ));
						} else {
							echo ( esc_html__( 'Events', 'newlyweds' ));
						} ?>
					</h2>

					<div class="clear"></div>

					<div class="subsection-wrapper">

						<?php if ( get_theme_mod( 'newlyweds_details_subtitle_one' ) ) { ?>
							<div class="subsection">
								<h3 class="subsection-title">
									<?php
									if ( get_theme_mod( 'newlyweds_details_subtitle_one' ) ) {
										echo esc_html(get_theme_mod( 'newlyweds_details_subtitle_one' ));
									} ?>
								</h3>
								<div class="subsection-text">
									<?php
									if ( get_theme_mod( 'newlyweds_details_text_one' ) ) {
										$a = esc_html(get_theme_mod( 'newlyweds_details_text_one' ));
										echo nl2br( $a );
									} ?>
								</div>
							</div>
						<?php } ?>

						<?php if ( get_theme_mod( 'newlyweds_details_subtitle_two' ) ) { ?>
							<div class="subsection">
								<h3 class="subsection-title">
									<?php
									if ( get_theme_mod( 'newlyweds_details_subtitle_two' ) ) {
										echo esc_html(get_theme_mod( 'newlyweds_details_subtitle_two' ));
									} ?>
								</h3>
								<div class="subsection-text">
									<?php
									if ( get_theme_mod( 'newlyweds_details_text_two' ) ) {
										$b = esc_html(get_theme_mod( 'newlyweds_details_text_two' ));
										echo nl2br( $b );
									} ?>
								</div>
							</div>
						<?php } ?>

						<?php if ( get_theme_mod( 'newlyweds_details_subtitle_three' ) ) { ?>
							<div class="subsection">
								<h3 class="subsection-title">
									<?php
									if ( get_theme_mod( 'newlyweds_details_subtitle_three' ) ) {
										echo esc_html(get_theme_mod( 'newlyweds_details_subtitle_three' ));
									} ?>
								</h3>
								<div class="subsection-text">
									<?php
									if ( get_theme_mod( 'newlyweds_details_text_three' ) ) {
										$c = esc_html(get_theme_mod( 'newlyweds_details_text_three' ));
										echo nl2br( $c );
									} ?>
								</div>
							</div>
						<?php } ?>

						<?php if ( get_theme_mod( 'newlyweds_details_subtitle_four' ) ) { ?>
							<div class="subsection">
								<h3 class="subsection-title">
									<?php
									if ( get_theme_mod( 'newlyweds_details_subtitle_four' ) ) {
										echo esc_html(get_theme_mod( 'newlyweds_details_subtitle_four' ));
									} ?>
								</h3>
								<div class="subsection-text">
									<?php
									if ( get_theme_mod( 'newlyweds_details_text_four' ) ) {
										$d = esc_html(get_theme_mod( 'newlyweds_details_text_four' ));
										echo nl2br( $d );
									} ?>
								</div>
							</div>
						<?php } ?>

						<?php if ( get_theme_mod( 'newlyweds_details_subtitle_five' ) ) { ?>
							<div class="subsection">
								<h3 class="subsection-title">
									<?php
									if ( get_theme_mod( 'newlyweds_details_subtitle_five' ) ) {
										echo esc_html(get_theme_mod( 'newlyweds_details_subtitle_five' ));
									} ?>
								</h3>
								<div class="subsection-text">
									<?php
									if ( get_theme_mod( 'newlyweds_details_text_five' ) ) {
										$e = esc_html(get_theme_mod( 'newlyweds_details_text_five' ));
										echo nl2br( $e );
									} ?>
								</div>
							</div>
						<?php } ?>
					</div>

				</section>
			<?php } ?>

			<div class="clear"></div>
		<?php } ?>

		<div id="content" class="site-content">
