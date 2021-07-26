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
		<?php $nikah_wedding_blog_layout = get_theme_mod( 'nikah_wedding_blog_post_layout','Default');
  		if($nikah_wedding_blog_layout == 'Default'){ ?>
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
			<div class="row">
			    <div class="col-lg-4 col-md-4">
			      <?php if(has_post_thumbnail()) { ?>
			          <?php the_post_thumbnail(); ?>  
			      <?php }?>
			    </div>
			    <div class="<?php if(has_post_thumbnail()) { ?>col-lg-8 col-md-8"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>">
			        <h2><a href="<?php echo esc_url(get_permalink() ); ?>" class="text-capitalize"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
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
			</div>
		<?php }else if($nikah_wedding_blog_layout == 'Center' || $nikah_wedding_blog_layout == 'Left'){ ?>
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
			<h2><a href="<?php echo esc_url(get_permalink() ); ?>" class="text-capitalize"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if(has_post_thumbnail()) { ?>
	            <?php the_post_thumbnail(); ?>  
	        <?php }?>
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
		<?php } ?>
	</div>
</article>
<div class="clearfix"></div>