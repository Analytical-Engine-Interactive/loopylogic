<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package BLDR
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-3-12">
<div id="secondary" class="widget-area sidebar-left" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
</div>
