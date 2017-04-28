<?php
/**
 * Include Kirki for customizer options and global content
 */
require_once get_template_directory() . '/inc/kirki/include-kirki.php';

/**
 * Enqueue a script with jQuery as a dependency.
 */
function include_hugoandlily_scripts() {
    // These scripts
    wp_enqueue_script( 'hugoandlily-scripts', get_template_directory_uri() . '/js/bundle.js', array( 'jquery' ) );

    // Theme stylesheets
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'hugoandlily-style', get_template_directory_uri() . '/css/bundle.css' );
}
add_action( 'wp_enqueue_scripts', 'include_hugoandlily_scripts' );

/**
 * Add theme support for basic features
 */
 add_theme_support( 'menus' );
 add_theme_support( 'custom-logo' );
 add_theme_support( 'wc-product-gallery-zoom' );
 add_theme_support( 'wc-product-gallery-lightbox' );
 add_theme_support( 'wc-product-gallery-slider' );

/**
 * Add Qoo Commerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
 * Add Custom image sizes
 */
add_image_size( 'menu-logo', 120, 120, false );


/**
 * Create custom menu locations
 */
register_nav_menus( array(
	'main_navigation_menu' => 'Main Navigation Menu',
) );

/**
 * Register widget areas
 *
 */
function hugoandlily_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div class="footer-widget col-sm-3 center-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
    'name'          => 'Shop Sidebar',
    'id'            => 'shop_sidebar',
    'before_widget' => '<div class="shop-widget-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'News Sidebar',
    'id'            => 'news_sidebar',
    'before_widget' => '<div class="news-widget-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'hugoandlily_widgets_init' );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
/**
 * Manage WooCommerce styles and scripts.
 */
function grd_woocommerce_script_cleaner() {

  // Unless we're in the store, remove all the cruft!
	if ( is_archive() ) {
		wp_dequeue_style( 'woocommerce-layout' );
	}
}
add_action( 'wp_enqueue_scripts', 'grd_woocommerce_script_cleaner', 99 );
