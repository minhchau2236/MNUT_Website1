<?php
/** Walker_Nav_Menu class */
require_once 'consultToSee-walker-nav-menu.php';

if(!function_exists('consultToSee_setup')) {
    function consultToSee_setup()
    {
        add_theme_support('title-tag');
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
	
	$template_url = get_template_directory_uri();
	
	// jQuery.
	//wp_enqueue_script( 'jquery' );
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', $template_url . '/vendors/js/jquery.min.js',array(), null, true);

	// Bootstrap
	wp_enqueue_script( 'bootstrap-script', $template_url . '/vendors/js/bootstrap.min.js', array( 'jquery' ), null, true );
	
	wp_enqueue_script( 'plugins', $template_url . '/vendors/plugins.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'scripts', $template_url . '/resources/js/scripts.js', array( 'jquery' ), null, true );	
		
	// normalize 	
	wp_enqueue_style( 'normalize', $template_url . '/vendors/css/normalize.css' );
	// Bootstrap 
	wp_enqueue_style( 'bootstrap-style', $template_url . '/vendors/css/bootstrap.min.css' );
	// Font-awesome
	wp_enqueue_style( 'font-awesome', $template_url . '/vendors/css/font-awesome.min.css' );
	// materialdesignicons
	wp_enqueue_style( 'materialdesignicons', $template_url . '/vendors/css/materialdesignicons.min.css' );
	
	//plugins
	wp_enqueue_style( 'plugins', $template_url . '/vendors/smartmenu/plugins.css' );
	

	//Main Style
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
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

// /**
// * Define a constant path to our single template folder
// */
// define(SINGLE_PATH, TEMPLATEPATH . '/single');

// /**
// * Filter the single_template with our custom function
// */
// add_filter('single_template', 'my_single_template');

// /**
// * Single template function which will choose our template
// */
// function my_single_template($single) {
// 	global $wp_query, $post;


// }

//additional function
function km_get_the_excerpt( $post_id = null, $num_words = 55 ) {
	$post = $post_id ? get_post( $post_id ) : get_post( get_the_ID() );
	$text = get_the_excerpt( $post );
	if ( ! $text ) {
		$text = get_post_field( 'post_content', $post );
	}
	$generated_excerpt = wp_trim_words( $text, $num_words );
	return apply_filters( 'get_the_excerpt', $generated_excerpt, $post );
}
	/**
	@ thiết lập hiển thị banner
	@ 
	**/
	register_sidebar(
		array(
			'name' => 'homepage - Banner',
			'id'   => 'banner',
			'description'=> 'Appears in the banner',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);
		/**
	@ thiết lập hiển thị service
	@ 
	**/
	register_sidebar(
		array(
			'name' => 'homepage - service',
			'id'   => 'service',
			'description'=> 'Appears in the home page service part',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);
		/**
	@ thiết lập hiển thị service_personal
	@ 
	**/
	register_sidebar(
		array(
			'name' => 'homepage - service_personal',
			'id'   => 'service_personal',
			'description'=> 'Appears in the home page service part',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);
	/**
	@ thiết lập hiển thị block 1
	@ 
	**/
	register_sidebar(
		array(
			'name' => 'homepage - block 1',
			'id'   => 'block-1',
			'description'=> 'Appears in the block',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);
	/**
	@ thiết lập hiển thị footer
	@ 
	**/
	register_sidebar(
		array(
			'name' => 'Footer Area 1',
			'id'   => 'footer-1',
			'description'=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' =>'</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer Area 2',
			'id'   => 'footer-2',
			'description'=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer Area 3 (Facebook)',
			'id'   => 'footer-3',
			'description'=> 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' =>'</h4>',
		)
	);

	function custom_pagination($numpages = '', $pagerange = '', $paged='') {

        if (empty($pagerange)) {
            $pagerange = 2;
        }

        /**
        * This first part of our function is a fallback
        * for custom pagination inside a regular loop that
        * uses the global $paged and global $wp_query variables.
        * 
        * It's good because we can now override default pagination
        * in our theme, and use this function in default quries
        * and custom queries.
        */
        global $paged;
        if (empty($paged)) {
            $paged = 1;
        }
        if ($numpages == '') {
            global $wp_query;
            $numpages = $wp_query->max_num_pages;
            if(!$numpages) {
                $numpages = 1;
            }
        }

        /** 
        * We construct the pagination arguments to enter into our paginate_links
        * function. 
        */
        $pagination_args = array(
            'base'            => get_pagenum_link(1) . '%_%',
            'format'          => 'page/%#%',
            'total'           => $numpages,
            'current'         => $paged,
            'show_all'        => False,
            'end_size'        => 1,
            'mid_size'        => $pagerange,
            'prev_next'       => True,
            'prev_text'       => __('&laquo;'),
            'next_text'       => __('&raquo;'),
            'type'            => 'plain',
            'add_args'        => false,
            'add_fragment'    => ''
        );

        $paginate_links = paginate_links($pagination_args);

        if ($paginate_links) {
            echo "<nav class='custom-pagination'>";
            echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
            echo $paginate_links;
            echo "</nav>";
        }

}
	function get_custom_cat_template($single_template) {
		global $post;
	
		if ( in_category( 'event' )) {
			$single_template = dirname( __FILE__ ) . '/single-event.php';
		}
		return $single_template;
	}
	
	add_filter( "single_template", "get_custom_cat_template" ) ;
	
 
	//Remove admin toolbar
	add_filter('show_admin_bar', '__return_false');
?>