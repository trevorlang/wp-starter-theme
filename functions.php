<?php

// Remove emojicon junk

function disable_emojicons_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

add_action( 'init', 'disable_wp_emojicons' );



// Import Google Font

function google_fonts() {
	$query_args = array(
		'family' => 'Cabin:400,400italic,500,500italic,700,700italic',
		'subset' => 'latin,latin-ext',
	);
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}

add_action('wp_enqueue_scripts', 'google_fonts');


// Import CSS and JS

function wpStarterTheme_enqueue_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() ); 
}

function wpStarterTheme_enqueue_script() {
	wp_enqueue_script( 'footer-js', get_template_directory_uri().'/js/main.min.js', false, false, true );
}

add_action( 'wp_enqueue_scripts', 'wpStarterTheme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wpStarterTheme_enqueue_script' );