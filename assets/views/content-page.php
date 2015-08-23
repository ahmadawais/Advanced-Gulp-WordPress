<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Neat
 */
?>

<article class="aa_page">

	<h1 class="entry-title"> <?php the_title(); ?> </h1>

	<div class="aa_content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'neat' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aa_content -->

</article>
<!-- /.aa_page -->
