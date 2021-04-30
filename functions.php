<?php

include TEMPLATEPATH . '/inc/salvarPost.php';

function mustache_css() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.2', false );
	wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.5', false );
	wp_enqueue_style( 'slick' );

	wp_register_style( 'geral-style', get_template_directory_uri() . '/style.css', array(), '1.3', false );
	wp_enqueue_style( 'geral-style' );
}
add_action( 'wp_enqueue_scripts', 'mustache_css' );

function mustache_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	wp_register_script( 'jquer', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), "3.6.0", true );
	wp_enqueue_script( 'jquer' );

    wp_register_script( 'slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquer'), "1.0", true );
	wp_enqueue_script( 'slickjs' );

	wp_register_script( 'geraljs', get_template_directory_uri() . '/assets/js/geral.js', array('jquer'), '1.0', true );
	wp_enqueue_script( 'geraljs' );

	wp_register_script( 'mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array('jquer'), '1', true );
	wp_enqueue_script( 'mask' );

	wp_register_script( 'cep', get_template_directory_uri() . '/assets/js/cep.js', array('jquer'), '1', true );
	wp_enqueue_script( 'cep' );

	$wpVars = [
		'ajaxUrl' => admin_url('admin-ajax.php')
	];
	wp_localize_script('geraljs','wp', $wpVars);

}
add_action( 'wp_enqueue_scripts', 'mustache_scripts' );

// Habilitar suporte
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

// registrar Menu
function menu_principal() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
  add_action( 'init', 'menu_principal' );


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// add nova tabela


?>