<?php
/**
 * @package Neat
 */
?>


<article class="aa_content">

	<h1 class="aa_content__title">
		<a href="<?php the_permalink(); ?>">

			<?php the_title(); ?>

		</a>
	</h1>


	<div class="aa_content__content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="aa_pagelinks">' . esc_html__( 'Pages:', 'AA_Theme' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aa_content__content -->

</article>
<!-- /.aa_content -->