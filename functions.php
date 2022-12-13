<?php

function sa_custom_logo_setup() {
    $defaults = array(
        'height'               =>  82,
        'width'                => 260,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action('after_setup_theme', 'sa_custom_logo_setup');

function sa_custom_theme(){
    wp_enqueue_style('bootstrap' ,get_stylesheet_directory_uri().'/bootstraplite.css');
   wp_enqueue_style('style' ,get_stylesheet_directory_uri().'/style.css' );
   wp_enqueue_script( 'application', get_stylesheet_directory_uri().'/assets/js/application.js');   
  
  
   if( is_page( array( 'about') ) ){
        //wp_enqueue_script('splide' ,get_stylesheet_directory_uri().'/assets/js/splide.min.js');
        
        wp_enqueue_style('splide-css' ,'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_script('splide' ,'https://code.jquery.com/jquery-1.11.0.min.js');
        // wp_enqueue_script('splide' ,'https://code.jquery.com/jquery-migrate-1.2.1.min.js');
        wp_enqueue_script('slick' ,'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');

        wp_enqueue_script('about' ,get_stylesheet_directory_uri().'/assets/js/about.js') ;
   }
}
add_action('wp_enqueue_scripts' , 'sa_custom_theme');



function naunce_widgets_init(){
    register_sidebar( array(
        'name' => esc_html__( 'Primary Widget Area' , 'wphierarchy'),
'id' => 'main-sidebar',
'description' => esc_html__( 'add some widgets here', 'wphierarchyy' ),
'before_widget' => '<div  class="widget-container">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>' ,

      )
    );
}
add_action('widgets_init' ,'naunce_widgets_init');


?>

