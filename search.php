<?php
/**
 * The template for displaying search results pages.
 *
 * @package Neat
 */

get_header(); ?>

	<section class="aa_search">

		<?php if ( have_posts() ) : ?>

			<div class="aa_header">

				<h1 class="aa_h1">
					<?php printf( esc_html__( 'Search Results for: %s', 'neat' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
				<!-- /.aa_h1 -->

			</div>
			<!-- /.aa_header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'assets/views/content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</section>
	<!-- /.aa_search -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
