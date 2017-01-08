<?php
if(! function_exists('glasseys_setup')) :
    function glasseys_setup()
    {
        add_theme_support('title_tag');
    }
endif;
add_action('after_setup_theme', 'glasseys_setup');

/* Register menus*/
function register_glasseye_menus()
{
    register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'glasseys' ),
		'footer'  => __( 'Social footer Menu', 'glasseys' ),
	) );
}
add_action('init', 'register_glasseye_menus');

/*---Add stylesheets---*/
function glasseye_scripts()
{
    wp_enqueue_style('glasseye_style',get_stylesheet_uri());
    wp_enqueue_style('glasseye_google_fonts','https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}
add_action('wp_enqueue_scripts', 'glasseye_scripts');

/*---Add widgets---*/
function glasseye_widget_init()
{
    register_sidebar(array (
        'name' => __('Main Sidebar', 'glasseye'),
        'id' => 'main-sidebar',
        'description' => __('Widgets added here will display on all two-column-page'),
        'before-widget' => '<section id="%1$s" class="widget %2$s">',
        'after-widget' => '</section>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '</h2>'
    ));
}

add_action('widgets_init','glasseye_widget_init');
?>