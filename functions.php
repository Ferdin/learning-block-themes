<?php

// Some code

function my_block_theme_enqueue_styles() {
    wp_enqueue_style('my-block-theme-style',
    get_parent_theme_file_uri('assets/css/main.css'));
}

add_action('wp_enqueue_scripts', 'my_block_theme_enqueue_styles');

function my_block_theme_enqueue_scripts(){
    wp_enqueue_script('my-block-theme-scripts', get_parent_theme_file_uri('assets/js/main.js'), [], wp_get_theme()->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'my_block_theme_enqueue_scripts' );
// function my_block_theme_set_up(){
//     add_editor_style( [get_parent_theme_file_uri('assets/css/main.css'), get_stylesheet_uri()] );
// }

// add_action( 'after_setup_theme', 'my_block_theme_set_up');