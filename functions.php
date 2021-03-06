<?php
//declare the name of child theme
$themename = "Wagner-Murray";

// enqueue styles
if( !function_exists("theme_styles") ) {  
    function theme_styles() { 
        // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
        wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'bootstrap' );

        // For child themes
        wp_register_style( 'wpbs-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs-style' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function custom_excerpt_length( $length ) {
  return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999);

function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'blog' )) {
          $single_template = dirname( __FILE__ ) . '/single-blog.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;

?>