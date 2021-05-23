<?php 


// load file
function theme_Files() {
    wp_enqueue_style('style_CSS', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_script('scripts_JS', get_template_directory_uri(). '/JS/script.js', array(), '1.0.0', true);
}
 
add_action('wp_enqueue_scripts', 'theme_Files'); 
// end load file



// setup menus
function theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary nav', 'primary navigation');
    register_nav_menu('footer', 'footer navigation');
}

add_action('init', 'theme_setup');
// end setup menus



// add theme support
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
// end theme support


// add_image_size('Main Image', 10, 10);