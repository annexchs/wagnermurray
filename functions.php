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
add_filter( 'excerpt_length', 'custom_excerpt_length', 999)

function blog-post_register()
{
$labels = array(
'name' => _x('blog-post', 'Blog Post'),
'singular_name' => _x('blog-post', 'Blog Post')
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true,
'query_var' => true,
'rewrite' => true,
'capability_type' => 'post',
'hierarchical' => false,
'supports' => array('title','editor','thumbnail')
);
register_post_type( 'blog-post' , $args );
}
?>