<?php

include('includes/post-type-service.php');
include('includes/post-type-team-member.php');
function mb_theme_setup(){
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'footer' => __('Footer Menu', 'mind-bubble')
        )
        );
}
add_action('after_setup_theme', 'mb_theme_setup');

function mb_load_scripts() {
    wp_enqueue_style('mb-styles', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_script('mb-scripts', get_template_directory_uri() . '/main.js', array(), '1.2.3', true);
}

add_action('wp_enqueue_scripts', 'mb_load_scripts');


