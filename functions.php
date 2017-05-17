<?php
     
/*
Theme Name: Web170
Author:Liliane Haas
Author URI: http://lilihaas.com/
Description: This is the demo theme for the WEB170 class for the Spring 2017
Version:42.0
*/
     


//Register Navigation Menus (it wll show the "menus" in the dashboard just like in the others themes)
register_nav_menus(array('main-menu' => __('Main Menu')));
//

register_nav_menus(array('footer-menu' => __('Footer Menu')));
//

//Create Post Thumbnails
add_theme_support( 'post-thumbnails' );

//create page excerpts
add_post_type_support('page', 'excerpt');

?>






