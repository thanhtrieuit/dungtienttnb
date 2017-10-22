<?php
/* Global stylesheet */
function theme_global_stylesheet() {
	wp_enqueue_style( 'icons-css', get_template_directory_uri() . '/assets/css/icons/icomoon/styles.css' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'core-css', get_template_directory_uri() . '/assets/css/core.css' );
	wp_enqueue_style( 'components-css', get_template_directory_uri() . '/assets/css/components.css' );
    wp_enqueue_style( 'colors-css', get_template_directory_uri() . '/assets/css/colors.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_global_stylesheet' );

/* Global stylesheet */
function theme_global_js() {
	wp_enqueue_script( 'pace-js', get_template_directory_uri() . '/assets/js/plugins/loaders/pace.min.js' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/core/libraries/bootstrap.min.js' );
	wp_enqueue_script( 'blockui-js', get_template_directory_uri() . 'assets/js/plugins/loaders/blockui.min.js' );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'theme_global_js' );

/* Google font */
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );
