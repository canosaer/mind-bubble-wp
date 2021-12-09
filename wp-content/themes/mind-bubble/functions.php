<?php

include('includes/post-type-workshops.php');
include('includes/post-type-team.php');
include('includes/post-type-games.php');
include('includes/post-type-featured-programs.php');
include('includes/post-type-tutors.php');

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

    // wp_enqueue_script('mb-nav-menu-toggle', get_template_directory_uri() . '/js/dist/menu-toggle.js', array(), '1.0.0', true);
    // wp_enqueue_script('mb-nav-fixer', get_template_directory_uri() . '/js/dist/nav-fixer.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'mb_load_scripts');