<?php


function custom_theme_files() {
    
    wp_enqueue_script('main-js',get_theme_file_uri('js/scripts-bundled.js'),'NULL', '1.0', true);
    wp_enqueue_style('main_style', get_stylesheet_uri());
    #wp_enqueue_style('main_style', get_stylesheet_uri(), NULL, microtime()); NULL MEANS thaht this stylesheet has no dependency, microstime is php function that generates an automatic string for the stylesheet version
    wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_action('wp_enqueue_scripts', 'custom_theme_files');

function custom_theme_features() {
    
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'custom_theme_features');





