<?php
// inc/enqueue.php
// Parent + Child style enqueue


add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
// Parent style (Astra) - make sure 'astra-theme-css' handle exists in parent theme
// Safer method: use wp_get_theme to get parent stylesheet
$parenthandle = 'astra-theme-css'; // fallback handle name used by Astra (commonly)


// enqueue parent style if not already
if ( ! wp_style_is( $parenthandle, 'enqueued' ) ) {
wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css' );
}


// enqueue child style
wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(), array( $parenthandle ), wp_get_theme()->get('Version') );


// optional: enqueue child custom js
wp_enqueue_script( 'astra-child-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), wp_get_theme()->get('Version'), true );
}