<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'post-thumbnails' );

	function register_theme_menus(){
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu')
				)
		);
	}
	add_action('init', 'register_theme_menus');

	function fierroles_theme_styles(){
		wp_enqueue_style( 'ebm_css', get_template_directory_uri() . '/assets/css/ebm.css');
		wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style( 'libel_fonts', 'http://cloud.webtype.com/css/d883e44d-f980-46cb-8446-8467fdcf96f4.css');
	}
	add_action('wp_enqueue_scripts', 'fierroles_theme_styles');

	function fierroles_theme_js(){
		wp_enqueue_script('lintel_js', get_template_directory_uri() . '/assets/js/lintel-font.js', '', '', false);
		wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/jquery.min.js', '', '', true);
		wp_enqueue_script('scripts_js', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'fierroles_theme_js');

?>