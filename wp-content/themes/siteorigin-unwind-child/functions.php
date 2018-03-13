<?php
define( 'SITEORIGIN_THEME_VERSION', '1.2.10' );
define( 'SITEORIGIN_THEME_CSS_PREFIX', '.min' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent`style', get_template_directory_uri() . '/style' . SITEORIGIN_THEME_CSS_PREFIX . '.css', array(), SITEORIGIN_THEME_VERSION );
  // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.min.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}
?>