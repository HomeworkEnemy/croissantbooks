<?php
/**
 * The template for displaying search forms in pest-control-treatment
 *
 * @package Pest Control Treatment 
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','pest-control-treatment' ); ?>">
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'pest-control-treatment' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_html( '|', 'placeholder','pest-control-treatment' ); ?>  <?php echo esc_attr_x( 'Search...', 'placeholder','pest-control-treatment' ); ?>" value="<?php echo esc_attr( get_search_query()); ?>" name="s">
	</label>
</form> 