<?php

function mft_theme_setup(){
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'footer' => __('Footer Menu', 'my-first-theme')
        )
        );
}
add_action('after_setup_theme', 'mft_theme_setup');

function mft_load_scripts() {
    wp_enqueue_style('mft-styles2', get_template_directory_uri() . '/style2.css', array('mft-styles'));
    wp_enqueue_style('mft-styles', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('mft-scripts', get_template_directory_uri() . '/main.js', array(), '1.2.3', true);
}

add_action('wp_enqueue_scripts', 'mft_load_scripts');


