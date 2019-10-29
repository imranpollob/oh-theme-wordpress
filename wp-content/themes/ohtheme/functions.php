<?php

function ohtheme_script_enqueue() {
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/ohtheme.css', [], '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/ohtheme,js', [], '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'ohtheme_script_enqueue' );
