<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newlyweds
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php newlyweds_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_single() ) :
			the_content();
		else :
			the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn-read" title="<?php the_title_attribute(); ?>"><?php _e( 'Continue reading', 'newlyweds' ); ?></a>
		<?php endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newlyweds' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php newlyweds_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
