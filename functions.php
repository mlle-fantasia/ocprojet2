<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles',2000 );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/jscss/bootstrap.min.css', array(), '4.2.1', 'all');
 	wp_enqueue_style( 'child-style', get_stylesheet_uri()  );

}