<?php
/**
 * Template part for displaying posts
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <div class="category">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?><span class="screen-reader-text"><?php esc_html_e( 'Category','nikah-wedding' );?></span></a>
    </div>
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>" class="text-capitalize"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod( 'nikah_wedding_date_hide',true) != '' || get_theme_mod( 'nikah_wedding_comment_hide',true) != '' || get_theme_mod( 'nikah_wedding_author_hide',true) != '') { ?>
      <div class="post-info">
        <?php if( get_theme_mod( 'nikah_wedding_date_hide',true) != '') { ?>
          <i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_post_date_icon_changer','fa fa-calendar')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('nikah_wedding_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'nikah_wedding_author_hide',true) != '') { ?>
          <i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_post_author_icon_changer','fa fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('nikah_wedding_blog_post_metabox_seperator') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'nikah_wedding_comment_hide',true) != '') { ?>
          <i class="<?php echo esc_attr(get_theme_mod('nikah_wedding_post_comment_icon_changer','fas fa-comments')); ?>"></i><span class="entry-comments"><?php comments_number( __('0 Comments','nikah-wedding'), __('0 Comments','nikah-wedding'), __('% Comments','nikah-wedding') ); ?></span>
        <?php } ?>
      </div>
    <?php } ?>
    <?php if(get_theme_mod('nikah_wedding_blog_description') != 'Post Content'){ ?>
      <div class="post-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the gallery.
            if ( get_post_gallery() ) {
              echo '<div class="entry-gallery">';
                echo ( get_post_gallery() );
              echo '</div>';
            };
          };
        ?>
      </div>
    <?php } ?>
    <?php if(get_theme_mod('nikah_wedding_blog_description') == 'Post Content'){ ?>
      <div class="text"><?php the_content(); ?></div>
    <?php }
    if(get_theme_mod('nikah_wedding_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="text"><?php $excerpt = get_the_excerpt(); echo esc_html( nikah_wedding_string_limit_words( $excerpt, esc_attr(get_theme_mod('nikah_wedding_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('nikah_wedding_post_excerpt_suffix','{...}') ); ?></div>
      <?php } ?>
    <?php }?>
    <?php if( get_theme_mod('nikah_wedding_button_text','Read Full') != ''){ ?>
      <div class="post-link">
        <a href="<?php echo esc_url( get_permalink() );?>" title="<?php esc_attr_e( 'Read Full', 'nikah-wedding' ); ?>"><?php echo esc_html(get_theme_mod('nikah_wedding_button_text','Read Full'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('nikah_wedding_button_text','Read Full'));?></span></a>
      </div>
    <?php }?>
  </div>
</article>