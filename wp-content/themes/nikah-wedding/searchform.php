<?php
/**
 * Template for displaying search forms in Nikah Wedding
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'label', 'nikah-wedding' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'nikah-wedding' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><span><?php echo esc_html_x( 'Search', 'submit button', 'nikah-wedding' ); ?></span></button>
</form>