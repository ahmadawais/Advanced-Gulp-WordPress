<?php
/**
 * @package Neat
 */
?>

<article class="aa_single">

	<h1 class="aa_single__title"><?php the_title(); ?></h1>

	<div class="aa_single__meta">

		<?php aa_posted_on(); ?>

	</div>
	<!-- /.aa_single__meta -->

	<div class="aa_single__content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="aa_pagelinks">' . esc_html__( 'Pages:', 'AA_Theme' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aa_single__content -->

</article>
<!-- /.aa_single -->
