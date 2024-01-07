<?php

function juliatheme_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'juliatheme_theme_support');

function juliatheme_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer'  => "Footer Menu Items",
        'side'    => "Side Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'juliatheme_menus');

function juliatheme_register_styles() {
    wp_enqueue_style('juliatheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('juliatheme-style', get_template_directory_uri() . "/assets/css/style.css", array('juliatheme-bootstrap'), '1.0', 'all');
    wp_enqueue_style('juliatheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), '3.3.7', 'all');
}

add_action('wp_enqueue_scripts', 'juliatheme_register_styles');

function juliatheme_register_scripts() {
    wp_enqueue_script('juliatheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('juliatheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('juliatheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true);
    wp_enqueue_script('juliatheme-main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}

add_action('wp_enqueue_scripts', 'juliatheme_register_scripts');

function juliatheme_widget_areas() {
    register_sidebar(
        array(
            'before_title'   => '<h2>',
            'after_title'    => '</h2>',
            'before_widget'  => '',
            'after_widget'   => '',
            'name'           => 'Sidebar Area',
            'id'             => 'sidebar-1',
            'description'    => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title'   => '',
            'after_title'    => '',
            'before_widget'  => '<ul>',
            'after_widget'   => '</ul>',
            'name'           => 'Footer Area',
            'id'             => 'footer-1',
            'description'    => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'juliatheme_widget_areas');

?>
