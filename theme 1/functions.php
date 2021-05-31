<?php 


// load file
function theme_Files() {
    wp_enqueue_style('style_CSS', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_script('scripts_JS', get_template_directory_uri(). '/JS/script.js', array(), '1.0.0', true);
}
 
add_action('wp_enqueue_scripts', 'theme_Files'); 
// end load file



// add theme support
function theme_setup() {
    add_theme_support('menus');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    register_nav_menu('primary nav', 'primary navigation');
    register_nav_menu('footer', 'footer navigation');
}

add_action('init', 'theme_setup');

function theme_logo_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'theme_logo_setup');
// end theme support