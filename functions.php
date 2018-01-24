<?php
//======================================================
//=================   Chargement des scripts   =========
//======================================================
define('LGMAC_VERSION', '1.0.1');

// Chargement dans le front-end
function lgmac_scripts() {

	// Chargement des styles
	wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/css/jquery.fullpage.min.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	// Chargement des scripts
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/jquery.js');		wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/assets/js/jquery.fullpage.min.js');
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js'); 
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js'); 		
	wp_enqueue_script( 'lgmac_admin_script', get_template_directory_uri() . '/assets/js/script.js'); 
	

}// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'lgmac_scripts');



//======================================================
//======================  Utilitaires   ================
//======================================================
function lgmac_setup(){

	//support des vignettes image à la une
	add_theme_support('post-thumbnails');

	//enlève générateur de version wordpress
	remove_action('wp_head', 'wp_generator');

	//Register custom navigation walker
	require_once('includes/class-wp-bootstrap-navwalker.php');

	//active la gestion des menus
	register_nav_menus(array('primary' => 'principal'));



}// fin function lgmac_setup

add_action('after_setup_theme', 'lgmac_setup');



