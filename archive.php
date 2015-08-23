<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Neat
 */

get_header(); ?>

	<div class="aa_wrap">

		<?php if ( have_posts() ) : ?>

			<header class="aa_headerblock">

				<h1 class="aa_h1"> <?php the_archive_title();?> </h1>
				<div class="aa_dsc"> <?php the_archive_description(); ?> </div>

			</header>
			<!-- /.aa_headerblock -->

		<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'assets/views/content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.aa_wrap -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
