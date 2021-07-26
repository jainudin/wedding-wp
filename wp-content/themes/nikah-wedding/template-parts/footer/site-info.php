<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'nikah_wedding_hide_show_scroll',false) != '' || get_theme_mod( 'nikah_wedding_enable_disable_scrolltop',false) != '') { ?>
    <?php $nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_footer_options','Right');
        if($nikah_wedding_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'nikah-wedding' ); ?></span></a>
        <?php }else if($nikah_wedding_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'nikah-wedding' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'nikah-wedding' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php nikah_wedding_credit(); ?> <?php echo esc_html(get_theme_mod('nikah_wedding_footer_text',__('By ThemesEye','nikah-wedding'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','nikah-wedding') ?></span>
</div>