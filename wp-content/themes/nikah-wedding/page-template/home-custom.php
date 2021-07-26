<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>
<main id="main" role="main">
  <?php do_action('nikah_wedding_above_slider_section'); ?>

  <?php if( get_theme_mod('nikah_wedding_slider_arrows', false) != '' || get_theme_mod('nikah_wedding_enable_disable_slider', false) != ''){ ?>
    <?php /** slider section **/ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('nikah_wedding_slider_speed', 3000)); ?>"> 
        <?php $nikah_wedding_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'nikah_wedding_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $nikah_wedding_slider_pages[] = $mod;
            }
          }
          if( !empty($nikah_wedding_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $nikah_wedding_slider_pages,
              'orderby' => 'post__in'
            );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('nikah_wedding_slider_title',true) != ''){ ?>
                  <h1 class="my-2 text-capitalize"><?php the_title(); ?></h1> 
                <?php } ?>
                <?php if( get_theme_mod('nikah_wedding_slider_content',true) != ''){ ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( nikah_wedding_string_limit_words( $excerpt, esc_attr(get_theme_mod('nikah_wedding_slider_excerpt_number','20')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'nikah_wedding_slider_button',true) != '' || get_theme_mod( 'nikah_wedding_show_hide_slider_button',true) != ''){ ?>
                <?php if( get_theme_mod('nikah_wedding_slider_button_text','Read More') != ''){ ?>
                  <div class="read-more mt-3">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('nikah_wedding_slider_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('nikah_wedding_slider_button_text','Read More'));?></span></a>
                  </div>  
                <?php } ?>
              <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','nikah-wedding' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','nikah-wedding' );?></span>
          </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action('nikah_wedding_below_slider_section'); ?>

  <div class="front-page-header">
    <?php get_template_part( 'template-parts/navigation/navigation-top' ); ?> 
  </div>

  <?php if( get_theme_mod('nikah_wedding_love_story_setting') != ''){ ?>
    <?php /*--The Story of Love Us--*/?>
    <section id="love-story" class="py-5 text-center">
      <div class="container">
        <div class="row">
          <?php
          $nikah_wedding_postData1 =  get_theme_mod('nikah_wedding_love_story_setting');
          if($nikah_wedding_postData1){
            $args = array( 'name' => esc_html($nikah_wedding_postData1 ,'nikah-wedding'));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-7 col-md-7 love-story-box">
                  <h2 class="text-uppercase"><?php the_title(); ?></h2>
                  <div class="meta-info py-1 px-2 mb-3">
                    <span class="dateday"><?php echo esc_html( get_the_date( 'd') ); ?> .</span>
                    <span class="month"><?php echo esc_html( get_the_date( 'm' ) ); ?> .</span>
                    <span class="year"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
                  </div>
                  <?php the_excerpt(); ?>
                  <div class="read-more mt-3 mb-3">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','nikah-wedding'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read More','nikah-wedding' );?></span></a>
                  </div>
                </div>  
                <div class="col-lg-5 col-md-5">
                  <div class="abt-image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
          endif; }?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action('nikah_wedding_after_the_story_of_love_section'); ?>
</main>

<?php get_footer(); ?>