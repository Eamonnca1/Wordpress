<?php // H5 custom functions



// default content width
if (!isset($content_width)) $content_width = 960;



// theme support: feed links
add_theme_support('automatic-feed-links');

// theme support: post thumbnails
add_theme_support('post-thumbnails');

// add theme support: custom headers
add_theme_support('custom-header');

// add theme support: custom backgrounds
add_theme_support('custom-background');



// enable widgetized sidebars
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> __('Widgets Sidebar', 'h5'),
		'id' => 'widgets_sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	));
}



// enqueue javascript
if (!function_exists('h5_add_scripts')) {
	function h5_add_scripts() {
		if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) { 
			wp_enqueue_script('comment-reply');
		}
	}
	add_action('wp_enqueue_scripts', 'h5_add_scripts');
}

// Enable menus
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Enable bootstrap nav
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');