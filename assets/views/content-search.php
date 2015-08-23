<?php
/**
 * The template part for displaying results in search pages.
 *
 * @package Neat
 */
?>

<article class="aa_article">

	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	<?php if ( 'post' == get_post_type() ) : ?>


		<div class="aa_article__meta">

			<?php aa_posted_on(); ?>

		</div>
		<!-- /.aa_article__meta -->

	<?php endif; ?>

		<div class="aa_article__excerpt">

			<?php the_excerpt(); ?>

		</div>
		<!-- /.aa_article__excerpt -->

</article>
<!-- /.aa_search -->
