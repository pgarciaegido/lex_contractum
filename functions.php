<?php

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

