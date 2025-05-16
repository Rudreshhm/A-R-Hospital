<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Theme setup
function novena_wp_setup() {
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnails support
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'novena-wp'),
        'footer' => __('Footer Menu', 'novena-wp')
    ));
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'novena_wp_setup');

// Enqueue scripts and styles
function novena_wp_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('novena-wp-style', get_stylesheet_uri());
    
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('novena-wp-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'novena_wp_scripts');

// Custom Post Types
function novena_wp_custom_post_types() {
    // Doctors CPT
    register_post_type('doctor', array(
        'labels' => array(
            'name' => __('Doctors'),
            'singular_name' => __('Doctor')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'doctors'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-users',
        'show_in_rest' => true
    ));
    
    // Services CPT
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('Service')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools'
    ));
}
add_action('init', 'novena_wp_custom_post_types');
// Customizer Settings
function novena_wp_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('novena_hero_section', array(
        'title' => __('Hero Section', 'novena-wp'),
        'priority' => 30,
    ));
    
    // Hero Title
    $wp_customize->add_setting('novena_hero_title', array(
        'default' => 'We Provide All Health Care Solution',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('novena_hero_title_control', array(
        'label' => __('Hero Title', 'novena-wp'),
        'section' => 'novena_hero_section',
        'settings' => 'novena_hero_title',
        'type' => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('novena_hero_subtitle', array(
        'default' => 'Protect Your Health And Take Care To Of Your Health',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('novena_hero_subtitle_control', array(
        'label' => __('Hero Subtitle', 'novena-wp'),
        'section' => 'novena_hero_section',
        'settings' => 'novena_hero_subtitle',
        'type' => 'textarea',
    ));
    
    // Hero Button Text
    $wp_customize->add_setting('novena_hero_button_text', array(
        'default' => 'Read More',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('novena_hero_button_text_control', array(
        'label' => __('Button Text', 'novena-wp'),
        'section' => 'novena_hero_section',
        'settings' => 'novena_hero_button_text',
        'type' => 'text',
    ));
    
    // Hero Button URL
    $wp_customize->add_setting('novena_hero_button_url', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('novena_hero_button_url_control', array(
        'label' => __('Button URL', 'novena-wp'),
        'section' => 'novena_hero_section',
        'settings' => 'novena_hero_button_url',
        'type' => 'url',
    ));
    
    // Hero Image
    $wp_customize->add_setting('novena_hero_image', array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'novena_hero_image_control', array(
        'label' => __('Hero Image', 'novena-wp'),
        'section' => 'novena_hero_section',
        'settings' => 'novena_hero_image',
    )));
}
add_action('customize_register', 'novena_wp_customize_register');
// ===== Step 12: Widget Areas ===== //
function novena_wp_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'novena-wp'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here for the sidebar.', 'novena-wp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    // Add footer widget areas here if needed...
}
add_action('widgets_init', 'novena_wp_widgets_init');
// Register a sidebar
function novena_wp_widgets_init() {
    register_sidebar(array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'novena_wp_widgets_init');