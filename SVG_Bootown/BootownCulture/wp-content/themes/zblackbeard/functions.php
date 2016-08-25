<?php
add_action( 'wp_enqueue_scripts', 'zblackbeard_enqueue_styles' );

function zblackbeard_enqueue_styles() {
	wp_enqueue_style( 'zblackbeard-style', get_template_directory_uri() . '/style.css', array('zerif_bootstrap_style') );
}

function zblackbeard_remove_style_child(){
	remove_action('wp_print_scripts','zerif_php_style');	
}

add_action( 'wp_enqueue_scripts', 'zblackbeard_remove_style_child', 100 );

/**
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function zblackbeard_theme_setup() {
    load_child_theme_textdomain( 'zblackbeard', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'zblackbeard_theme_setup' );

/*
Plugin Name: Custom Widget Title Links
Plugin URI: http://www.playforward.net/
Description: Allows you to define a link that is wrapped around widget titles.
Version: 1.0
Author: Playforward | Dustin Dempsey
Author URI: http://www.playforward.net/
*/

function custom_widget_link( $title ) {

	// assume there's a link attached to the title because it starts with ww, http, or /
	if ( ( substr( $title, 0, 4) == "www." ) || ( substr( $title, 0, 4) == "http" ) || ( substr( $title, 0, 1) == "/" ) ) {

		// split our title in half
		$title_pieces = explode( "|", $title );

		// if there's two pieces
		if ( count( $title_pieces ) == 2 ) {

			// add http if it's just www
			if ( substr( $title, 0, 4) == "www." ) {
				$title_pieces[0] = str_replace( "www.", "http://www.", $title_pieces[0] );
			}

			// create new title from url and extracted title
			$title = '<a href="' . $title_pieces[0] . '" title="' . $title_pieces[1] . '">' . $title_pieces[1] . '</a>';
		}
	}

	return $title;
}
add_filter( "widget_title", "custom_widget_link" );

function add_search_box($items) {

        ob_start();
        get_search_form();
        $searchform = '
			<aside id="search" class="widget widget_search">

				<form role="search" method="get" class="search-form" action="http://www.bootownculture.philiweb.net/">
				<label>
					<span class="screen-reader-text">Rechercher&nbsp;:</span>
					<input type="search" class="search-field" placeholder="Recherche&hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Rechercher" />
				</form>
			</aside>';
        ob_end_clean();

        $items .= '<li>' . $searchform . '</li>'; 
        return $items;
}
add_filter('wp_nav_menu_items','add_search_box');

// enqueue javascript

function theme_js(){
	wp_enqueue_script( 'event',
		get_template_directory_uri() . '/../zblackbeard/js/event.js',
		array() );

}
add_action( 'wp_footer', 'theme_js' );

