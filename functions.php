<?php

/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
	wp_enqueue_style('hello-elementor-child-main-css', get_stylesheet_directory_uri() . '/assets/css/child-main.css', [], time());
	wp_enqueue_script('hello-elementor-child-vendor-js', get_stylesheet_directory_uri() . '/assets/js/child-vendor.js', ['jquery'], time());
	wp_enqueue_script('hello-elementor-child-main-js', get_stylesheet_directory_uri() . '/assets/js/child-main.js', ['jquery'], time());
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);


/**
 *  Load Elementor widget init file
 */
if (did_action('elementor/loaded')) {
	require get_stylesheet_directory() . '/inc/elementor-widgets/elementor-widget-init.php';
}
