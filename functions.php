<?php

function fp_theme_support(){
    add_theme_support( 'title-tag');
}

add_action('after_setup_theme', 'fp_theme_support');

function fp_theme_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('fp_theme_style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'fp_theme_styles');

function fp_theme_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Frontpage Footer Area',
            'id' => 'footer',
            'description' => 'Frontpage Footer Area'
        )     
    );
}

add_action('widgets_init','fp_theme_widget_areas');

?>