<?php

	add_theme_support( 'menus' );
	load_theme_textdomain( 'silk-lite', get_template_directory() . '/languages' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-width-thumbnail', 210, 9999, false );
	function custom_in_post_images( $args ) { $custom_images = array('full-width-thumbnail' => 'Full Width Ratio'); return array_merge( $args, $custom_images ); } add_filter( 'image_size_names_choose', 'custom_in_post_images' );

	function register_theme_menus(){
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu'),
				'main-menu-es' => __('Main Menu Spanish0')
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

	add_filter('query_vars', 'add_my_var');

	function add_my_var($public_query_vars) {
		$public_query_vars[] = 'lang';
		return $public_query_vars;
	}
	add_action('after_setup_theme', 'filerroles_setup');
	function filerroles_setup(){
	    load_theme_textdomain('carlosfierroworks', get_template_directory() . '/languages');
	}

	load_theme_textdomain('carlosfierroworks', get_template_directory() . '/languages');

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";


	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
	
	add_filter( 'locale', 'change_locale');
	function change_locale(){
		$locale = 'en';
		$lang = explode('/', $_SERVER['REQUEST_URI']);
	        if(array_pop($lang) === '?lang=es'){
	          $locale = 'es_PE';
	        }else{
	          $locale = 'en_EN';
	        }
	    return $locale;
	}
	load_default_textdomain();

	add_filter( 'wp_get_nav_menu_items','nav_items', 11, 3 );

	function nav_items( $items, $menu, $args ) 
	{
	    if(get_locale()==='es_PE'){
	    	foreach ($items as $item) {
	    		$item->url.="?lang=es";
	    	}
	    }
	    return $items;
	}
?>