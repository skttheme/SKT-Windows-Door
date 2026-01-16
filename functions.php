<?php 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'skt_windows_door_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_windows_door_setup() {
	$GLOBALS['content_width'] = apply_filters( 'skt_windows_door_content_width', 640 );
	load_theme_textdomain( 'skt-windows-door', get_stylesheet_directory_uri() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 25,
		'width'       => 295,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'skt-windows-door' )				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
} 
endif; // skt_windows_door_setup
add_action( 'after_setup_theme', 'skt_windows_door_setup' );

function skt_windows_door_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'skt-windows-door' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-windows-door' ),
		'id'            => 'fc-1-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'skt-windows-door' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-windows-door' ),
		'id'            => 'fc-2-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'skt-windows-door' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-windows-door' ),
		'id'            => 'fc-3-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
}
add_action( 'widgets_init', 'skt_windows_door_widgets_init' );


add_action( 'wp_enqueue_scripts', 'skt_windows_door_enqueue_styles' );
function skt_windows_door_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

add_action( 'wp_enqueue_scripts', 'skt_windows_door_child_styles', 99);
function skt_windows_door_child_styles() {
  wp_enqueue_style( 'skt-windows-door-child-style', get_stylesheet_directory_uri()."/css/responsive.css" );
} 

add_action( 'wp_enqueue_scripts', 'skt_windows_door_child_navigation', 99);
function skt_windows_door_child_navigation() {
  wp_enqueue_script( 'skt-windows-door-child-navigation', get_stylesheet_directory_uri(). '/js/navigation.js', array(), '01062020', true );
} 

function skt_windows_door_admin_style() {
  wp_enqueue_script('skt-windows-door-admin-script', get_stylesheet_directory_uri()."/js/skt-windows-door-admin-script.js");
}
add_action('admin_enqueue_scripts', 'skt_windows_door_admin_style');

function skt_windows_door_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_skt_windows_door_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'skt-windows-door-about-page-style', get_stylesheet_directory_uri() . '/css/skt-windows-door-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_windows_door_admin_about_page_css_enqueue' );

function skt_windows_door_admin_css_style() {
  wp_enqueue_style('skt-windows-door-admin-style', get_stylesheet_directory_uri()."/css/skt-windows-door-admin-style.css");
}
add_action('admin_enqueue_scripts', 'skt_windows_door_admin_css_style');

function skt_windows_door_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'skt_windows_door_load_dashicons', 999);

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'skt_windows_door_activation_notice' );
}
function skt_windows_door_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-windows-door-notice-container">
        	<div class="skt-windows-door-notice-img"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/icon-skt-templates.png' ); ?>" alt="<?php echo esc_attr('SKT Templates');?>" ></div>
            <div class="skt-windows-door-notice-content">
            <div class="skt-windows-door-notice-heading"><?php echo esc_html__('Thank you for installing SKT Windows Door!', 'skt-windows-door'); ?></div>
            <p class="largefont"><?php echo esc_html__('SKT Windows Door comes with 150+ ready to use Elementor templates. Install the SKT Templates plugin to get started.', 'skt-windows-door'); ?></p>
            </div>
            <div class="skt-windows-door-clear"></div>
        </div>
    </div>
    <?php
}

if ( ! function_exists( 'skt_windows_door_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function skt_windows_door_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

define('SKT_WINDOWS_DOOR_SKTTHEMES_URL','https://www.sktthemes.org');
define('SKT_WINDOWS_DOOR_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/windows-doors-wordpress-theme/');
define('SKT_WINDOWS_DOOR_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-windows-doors-wordpress-theme/');
define('SKT_WINDOWS_DOOR_SKTTHEMES_THEME_DOC','https://sktthemesdemo.net/documentation/skt-windows-door-doc/');
define('SKT_WINDOWS_DOOR_SKTTHEMES_LIVE_DEMO','https://www.sktperfectdemo.com/demos/windowsanddoors/');
define('SKT_WINDOWS_DOOR_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('SKT_WINDOWS_DOOR_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function skt_windows_door_remove_parent_function(){	 
	remove_action( 'admin_notices', 'decor_lite_activation_notice');
	remove_action( 'admin_menu', 'decor_lite_abouttheme');
	remove_action( 'customize_register', 'decor_lite_customize_register');
	remove_action( 'wp_enqueue_scripts', 'decor_lite_custom_css');
}
add_action( 'init', 'skt_windows_door_remove_parent_function' );

function skt_windows_door_dequeue_parent_theme_style() {
    wp_dequeue_style('decor-lite-animation-style');
}
add_action( 'wp_enqueue_scripts', 'skt_windows_door_dequeue_parent_theme_style',9999);

function skt_windows_door_remove_parent_theme_stuff() {
    remove_action( 'after_setup_theme', 'decor_lite_setup' );
}
add_action( 'after_setup_theme', 'skt_windows_door_remove_parent_theme_stuff', 0 );

function skt_windows_door_unregister_widgets_area(){
	unregister_sidebar( 'fc-1' );
	unregister_sidebar( 'fc-2' );
	unregister_sidebar( 'fc-3' );
	unregister_sidebar( 'fc-4' );
}
add_action( 'widgets_init', 'skt_windows_door_unregister_widgets_area', 11 );

require_once get_stylesheet_directory() . '/inc/about-themes.php';  
require_once get_stylesheet_directory() . '/inc/customizer.php';