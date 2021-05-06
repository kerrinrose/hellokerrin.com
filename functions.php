<?php function enqueue_javascript() { 
    wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/node_modules/scrollreveal/dist/scrollreveal.js', true ); 
}

add_action( 'wp_enqueue_scripts', 'enqueue_javascript' ); 
add_theme_support( 'post-thumbnails' ); 

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

?>