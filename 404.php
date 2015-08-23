<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Neat
 */

get_header(); ?>

	<div class="aa_wrap">
		<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'neat' ); ?></h1>

		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'neat' ); ?></p>

		<?php get_search_form(); ?>
	</div>

<?php get_footer(); ?>
