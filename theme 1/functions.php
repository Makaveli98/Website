<?php 

function LoadCSS_File() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts', 'LoadCSS_File'); 