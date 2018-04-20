<?php
// Theme Support
function english_theme_support() {
	// Featured Image Support
	add_theme_support('post-thumbnails');
	
	// Nav Menus
	register_nav_menus(array(
		'primary' => __('Primary header navigation'),
		'footer' => __('Footer navigation')
	));
}

add_action('after_setup_theme', 'english_theme_support');

// Widget Locations
function english_init_widgets($id) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	
	));
}

add_action('widgets_init', 'english_init_widgets');

// Excerpt Length
function english_set_excerpt_length() {
	return 18;
}

add_filter('excerpt_length', 'english_set_excerpt_length');