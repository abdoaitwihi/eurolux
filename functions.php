<?php 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	// define( '_S_VERSION', '1.0.0' );
	define( '_S_VERSION', '3.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function eurolux_scripts() {
	wp_enqueue_style( 'eurolux-bootstrap.min', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'eurolux-font.awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' );
	wp_enqueue_style( 'eurolux-flightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.3/css/lightgallery.min.css' );
	wp_enqueue_style( 'eurolux-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );

	wp_enqueue_script( 'eurolux-jquery.min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
	wp_enqueue_script( 'eurolux-bootstrap.js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js' );
	wp_enqueue_script( 'eurolux-lightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.3/lightgallery.min.js' );
	wp_enqueue_script( 'eurolux-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'eurolux-main', 'wpTemplateData', $translation_array );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eurolux_scripts' );


function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header menu' ),
        'footer-menu-1' => __( 'Footer menu 1' ),
        'footer-menu-2' => __( 'Footer menu 2' ),
        'footer-menu-3' => __( 'Footer menu 3' ),
        'particular-page-menu' => __( 'Particulare page menu' )
      )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );