<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- <div id="page">
        <div class="topNaviagationLink"><a href="index.html">Home</a></div>
        <div class="topNaviagationLink"><a href="index.html">About</a></div>
        <div class="topNaviagationLink"><a href="index.html">Portfolio</a></div>
        <div class="topNaviagationLink"><a href="index.html">Services</a></div>
	    <div class="topNaviagationLink"><a href="index.html">Contact</a></div>
	</div> -->

    <?php

        wp_nav_menu(array(
            'theme_location'    => 'main-menu',
            'container'         => '',
            'items_wrap'        => '<ul id="page">%3$s</ul>'
        ))

    ?>