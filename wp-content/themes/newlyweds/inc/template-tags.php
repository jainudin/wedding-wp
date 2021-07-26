<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package newlyweds
 */

if ( ! function_exists( 'newlyweds_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function newlyweds_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			get_the_date( DATE_W3C ),
			get_the_date(),
			get_the_modified_date( DATE_W3C ),
			get_the_modified_date()
		);

		$posted_on = sprintf(
			esc_html( '%s', 'post date'),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'newlyweds_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function newlyweds_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'newlyweds' ) );
			if ( $categories_list && newlyweds_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'newlyweds' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'newlyweds' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( ' &middot; Tagged %1$s', 'newlyweds' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( ' &middot; Leave a comment', 'newlyweds' ), esc_html__( ' &middot; 1 Comment', 'newlyweds' ), esc_html__( ' &middot; % Comments', 'newlyweds' ) );
			echo '</span>';
		}

		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'newlyweds' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function newlyweds_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'newlyweds_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'newlyweds_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so newlyweds_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so newlyweds_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in newlyweds_categorized_blog.
 */
function newlyweds_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'newlyweds_categories' );
}

add_action( 'edit_category', 'newlyweds_category_transient_flusher' );
add_action( 'save_post', 'newlyweds_category_transient_flusher' );
