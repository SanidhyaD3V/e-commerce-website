<?php 

if ( ! function_exists( 'enqueue_my_theme_styles' ) ) {
	function enqueue_my_theme_styles() {
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/style.css');
}
	add_action( 'wp_enqueue_scripts', 'enqueue_my_theme_styles');
}

?>