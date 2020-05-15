<?php

	add_action('after_setup_theme', 'aos_setup');

	function aos_setup(){
		add_theme_support('title-tag');
		add_theme_support('custom-header', array(
			'default-image' => get_template_directory_uri().'/images/anoceanofsky.jpg'
		));
		add_theme_support('custom-background', array(
			'default-image' => get_template_directory_uri().'/images/background.png'
		));

		register_nav_menu('main-menu', 'Main Menu');
	}

	add_action('wp_enqueue_scripts', 'aos_styles');
	function aos_styles(){
		wp_enqueue_style('styleseet', get_stylesheet_uri());
		wp_enqueue_style('anoceanofsky', get_template_directory_uri().'/assets/css/anoceanofsky.css', '', '0.1.0');
	}

	function add_classes_on_li($classes) {
	  $classes[] = 'topNaviagationLink';
	  return $classes;
	}
	add_filter('nav_menu_css_class','add_classes_on_li',1,3);

?>