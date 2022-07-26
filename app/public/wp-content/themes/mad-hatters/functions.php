<?php

function theme_files() {
    wp_enqueue_style( 'main_theme_styles', get_theme_file_uri( '/css/output.css' ) );
    wp_enqueue_style( 'normalize_theme_styles', get_theme_file_uri( '/dev/normalize.css' ) );
    wp_enqueue_script( 'main_theme_js', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'custom_google_fonts', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins&display=swap' );
}

function theme_features() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    register_nav_menu( 'footerAdditionalLocation', 'Footer Additional Location' );

}

add_action( 'wp_enqueue_scripts', 'theme_files' );
add_action( 'after_setup_theme', 'theme_features' );

// stackoverflow

function add_menu_link_class( $atts, $item, $args ) {
    if ( property_exists( $args, 'link_class' ) ) {
        $atts[ 'class' ] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

?>