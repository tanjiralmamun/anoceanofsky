<?php

	add_action('after_setup_theme', 'aos_setup');

	function aos_setup(){
		add_theme_support('title-tag');
	}

	add_action('wp_enqueue_scripts', 'aos_styles');
	function aos_styles(){
		wp_enqueue_style('styleseet', get_stylesheet_uri());
		wp_enqueue_style('anoceanofsky', get_template_directory_uri().'/assets/css/anoceanofsky.css');
	}

?>