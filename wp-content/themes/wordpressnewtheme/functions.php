<?php


function custom_theme_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
    
}


add_action('wp_enqueue_scripts', 'custom_theme_files');


