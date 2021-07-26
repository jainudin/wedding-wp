<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newlyweds
 */

?>

</div><!-- #content -->


<footer id="colophon" class="site-footer" role="contentinfo">

	<?php get_sidebar( 'footer' ); ?>

	<ul class="social-buttons">
		<?php if ( get_theme_mod( 'newlyweds_social_media_twitter' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_twitter' ) ); ?>"><i class="fa fa-twitter"></i></a>
			</li>
		<?php } ?>
		<?php if ( get_theme_mod( 'newlyweds_social_media_facebook' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_facebook' ) ); ?>"><i class="fa fa-facebook"></i></a>
			</li>
		<?php } ?>
		<?php if ( get_theme_mod( 'newlyweds_social_media_instagram' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_instagram' ) ); ?>"><i class="fa fa-instagram"></i></a>
			</li>
		<?php } ?>
		<?php if ( get_theme_mod( 'newlyweds_social_media_snapchat' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_snapchat' ) ); ?>"><i class="fa fa-snapchat-ghost"></i></a>
			</li>
		<?php } ?>
		<?php if ( get_theme_mod( 'newlyweds_social_media_youtube' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_youtube' ) ); ?>"><i class="fa fa-youtube-play"></i></a>
			</li>
		<?php } ?>
		<?php if ( get_theme_mod( 'newlyweds_social_media_googleplus' ) ) { ?>
			<li>
				<a href="<?php echo esc_url( get_theme_mod( 'newlyweds_social_media_googleplus' ) ); ?>"><i class="fa fa-google-plus"></i></a>
			</li>
		<?php } ?>
	</ul>

	<div class="site-info">
		&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> &middot;
		<?php printf( esc_html__( 'Newlyweds Theme by %2$s', 'newlyweds' ), 'newlyweds', '<a href="https://glam.ink/" rel="nofollow">Glam Ink</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
