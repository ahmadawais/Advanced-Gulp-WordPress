<?php
/**
 * The blog page.
 *
 * @package Neat
 */

get_header(); ?>


	<div class="aa_wrap">

		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'assets/views/content' ) ?>

				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.aa_wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
