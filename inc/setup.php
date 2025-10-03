<?php
// inc/setup.php
// Theme supports and cleanup


add_action( 'after_setup_theme', 'astra_child_theme_setup' );
function astra_child_theme_setup() {
// enable support for custom logo
add_theme_support( 'custom-logo' );


// support for title tag
add_theme_support( 'title-tag' );


// support for post thumbnails
add_theme_support( 'post-thumbnails' );


// HTML5 support
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );


// Register a footer menu (example)
register_nav_menus( array(
'footer' => __( 'Footer Menu', 'astra-child' ),
) );
}


// Example: remove unused meta generator header (optional)
remove_action('wp_head', 'wp_generator');