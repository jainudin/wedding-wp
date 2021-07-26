<?php

add_action( 'admin_menu', 'nikah_wedding_gettingstarted' );
function nikah_wedding_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'nikah-wedding'), esc_html__('About Theme', 'nikah-wedding'), 'edit_theme_options', 'nikah-wedding-guide-page', 'nikah_wedding_guide');   
}

function nikah_wedding_admin_theme_style() {
   wp_enqueue_style('nikah-wedding-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'nikah_wedding_admin_theme_style');

function nikah_wedding_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Nikah Wedding Lite Theme', 'nikah-wedding' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'nikah-wedding' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=nikah-wedding-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'nikah-wedding' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'nikah_wedding_notice');


/**
 * Theme Info Page
 */
function nikah_wedding_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'nikah-wedding' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Nikah Wedding Theme', 'nikah-wedding' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'nikah-wedding' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="nikah_wedding_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="nikah_wedding_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Nikah Wedding Lite Theme', 'nikah-wedding' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'nikah-wedding'); ?></th>
											<th><?php esc_html_e('Click Here', 'nikah-wedding'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'nikah-wedding'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'nikah-wedding'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'nikah-wedding'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'nikah-wedding'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'nikah-wedding'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=nikah_wedding_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'nikah-wedding'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'nikah-wedding'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=nikah_wedding_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'nikah-wedding'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'nikah-wedding'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=nikah_wedding_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'nikah-wedding'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','nikah-wedding'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','nikah-wedding'); ?></a> <?php esc_html_e( 'your website.','nikah-wedding'); ?> </li>
								<li><?php esc_html_e( 'Nikah Wedding','nikah-wedding'); ?> <a target="_blank" href="<?php echo esc_url( NIKAH_WEDDING_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','nikah-wedding'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','nikah-wedding'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( NIKAH_WEDDING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'nikah-wedding'); ?></a>
							<a href="<?php echo esc_url( NIKAH_WEDDING_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'nikah-wedding'); ?></a>
							<a href="<?php echo esc_url( NIKAH_WEDDING_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'nikah-wedding'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','nikah-wedding'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'This wedding WordPress theme loads seamlessly on all browsers. You get dedicated customer support and theme updates for one year so your website will continue working smoothly even after your wedding. It is packed with Font Awesome icons so you can include beautiful wedding icons to make your site more attractive. It has all the sections necessary in a wedding website pre designed, so you get everything atone place. Each of these sections can be disabled according to your needs. It has gorgeous layout for gallery, two blog layouts to tell your journey of love, separate space to introduce bridesmaids and groomsmen and Google map integration to help find wedding venue easily.', 'nikah-wedding' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','nikah-wedding'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Documention','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','nikah-wedding'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','nikah-wedding'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','nikah-wedding'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( NIKAH_WEDDING_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','nikah-wedding'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( NIKAH_WEDDING_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','nikah-wedding'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','nikah-wedding'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','nikah-wedding'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','nikah-wedding'); ?></a> <?php esc_html_e( 'your website.','nikah-wedding'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','nikah-wedding'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( NIKAH_WEDDING_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','nikah-wedding'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( NIKAH_WEDDING_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','nikah-wedding'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','nikah-wedding'); ?></h3>
						<ol>
							<li><a href="<?php echo esc_url( NIKAH_WEDDING_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'nikah-wedding'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?php
}?>