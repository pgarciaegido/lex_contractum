<?php

//Loads styles and js

function startwordpress_scripts(){
    wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('menu', get_template_directory_uri() . '/index.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

//Loads google fonts.

function startwordpress_google_fonts(){

    wp_register_style('Fonts', 'https://fonts.googleapis.com/css?family=Asap:400,400i,700,700i|Merriweather:400,400i,700');
    wp_enqueue_style('Fonts');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );



add_theme_support('post-thumbnails'); //Añade imagen destacada


function wpdocs_theme_setup() {
    add_image_size( 'feed-thumb', 303, 202, true );
    add_image_size( 'article', 770);

}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

function register_my_menus(){
	// register_nav_menu('header-nav', __('Header Navigation'));
	register_nav_menus( 
		array(
			'menu-header' => __('Menú del encabezado'),
			'menu-footer' => __('Menú del footer')
		)
	);
}
add_action('init', 'register_my_menus');



?>

