<?php

add_theme_support('post-thumbnails'); //Añade imagen destacada


function wpdocs_theme_setup() {
    add_image_size( 'feed-thumb', 303, 202, true ); 
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

//Esta es la función que añade un SIDEBAR

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar del footer',
		'id'            => 'sidebar_footer',
		'before_widget' => '<div class="tus muertos">',
		'after_widget'  => '</div>'

	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_filter( 'rwmb_meta_boxes', 'lexcontractum_register_meta_boxes' );
function lexcontractum_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => __( 'Personal Information', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', 'textdomain' ),
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );
    // 2nd meta box
    $meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );
    return $meta_boxes;
}

?>

