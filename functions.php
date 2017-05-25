<?php


function register_my_menu() {
  register_nav_menus(
  	array(
  	  'header-menu' => __( 'Main Menu' ),
  	  'footer-l-menu' => __( 'Footer Left Menu' ),
  	  'footer-c-menu' => __( 'Footer Center Menu' ),
  	  'footer-r-menu' => __( 'Footer Right Menu' )
  	)
  );	
}
add_action( 'init', 'register_my_menu' );


function enqueue_styles() {

	wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'styles' );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script( 'jquery.min', 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js' );  
    wp_enqueue_script( 'jquery.min' );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


require get_template_directory() . '/inc/total-functions.php';

require get_template_directory() . '/inc/customizer.php';

?>