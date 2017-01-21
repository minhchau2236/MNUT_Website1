<?php

/** Walker_Nav_Menu class */
require_once 'consultToSee-walker-nav-menu.php';

if(!function_exists('consultToSee_setup')) {
    function consultToSee_setup()
    {
        add_theme_support('title_tag');
		add_theme_support('menus');
        add_theme_support( 'post-thumbnails' ); 
		register_consultToSee_menus();
    }
}
add_action('after_setup_theme', 'consultToSee_setup');

/* Register menus*/
function register_consultToSee_menus()
{
    register_nav_menus( array(
		'primary' => __( 'primary_menu', 'consultToSee' ),
		'footer'  => __( 'Social footer Menu', 'consultToSee' ),
	) );
}
//add_action('init', 'register_consultToSee_menus');


/*---Add stylesheets---*/
function consultToSee_scripts()
{
    wp_enqueue_style('consultToSee_style',get_stylesheet_uri());
    wp_enqueue_style('consultToSee_google_fonts','https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}
add_action('wp_enqueue_scripts', 'consultToSee_scripts');

/*---Add widgets---*/
function consultToSee_widget_init()
{
    register_sidebar(array (
        'name' => __('Main Sidebar', 'consultToSee'),
        'id' => 'main-sidebar',
        'description' => __('Widgets added here will display on all two-column-page'),
        'before-widget' => '<section id="%1$s" class="widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ));

    register_sidebar(array (
        'name' => __('Lasted News', 'consultToSee2'),
        'id' => 'lasted-news',
        'description' => __('Widget add here will apear in lasted news area'),
        'before-widget' => '<section id="%1$s" class="widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ));
}

add_action('widgets_init','consultToSee_widget_init');
?>