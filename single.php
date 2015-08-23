<?php
/**
 * The template for displaying all single posts.
 *
 * @package Neat
 */

get_header(); ?>

	<div class="aa_single">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'assets/views/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>


	</div>
	<!-- /.aa_single -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
