<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package BLDR
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function bldr_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'bldr_jetpack_setup' );
