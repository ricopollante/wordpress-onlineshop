<?php

function styles()
{
wp_register_style( 'style', get_template_directory_uri() . '/style.css' , array(), false, 'all');
wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'styles');

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


//function scripts(){
//wp_deregister_script('jquery');
    //wp_enqueue_script('jquery', '/js/script.js', array(), null, true);

//}
//add_action('wp_enqueue_scripts', 'scripts');



//Add Menu

?>