<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newlyweds
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside><!-- #secondary -->
