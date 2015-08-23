<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Neat
 */

if ( ! is_active_sidebar( 'aa_sidebar_1' ) ) {
	return;
}
?>

<aside class="aa_sidebar">

	<?php dynamic_sidebar( 'aa_sidebar_1' ); ?>

</aside>
<!-- /.aa_sidebar -->
