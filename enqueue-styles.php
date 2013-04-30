<?php
/**
* Enqueue new nav styles 
* Checking which BP dirs are in use in theme
*/

/*
* Uncomment stylesheet to use - test layouts / effects
*/
//$style_selection = 'bp-new-nav-menu-hover-show.css';
$style_selection = 'bp-new-nav-menu-vert.css';

define(STYLE_SELECTION, $style_selection);

if( !  function_exists( 'bp_new_user_nav_enqueue_styling' ) ) {
	function bp_new_user_nav_enqueue_styling() {
			
		add_action( 'wp_enqueue_scripts', 'bp_new_nav_styles' );
	
	}
	add_action('after_setup_theme', 'bp_new_user_nav_enqueue_styling');
}
if( ! function_exists( 'bp_new_nav_styles' ) ) {
	function bp_new_nav_styles() {
		
		$style_selection = STYLE_SELECTION;
		
		// file name: from user selection define or default to...
		$file_name = ( !empty($style_selection) )? $style_selection : 'bp-new-nav-menu-user.css' ;
		// version file suffix
		$ver = bp_get_version();
		
		// We only check stylesheet_directory as this will always be overloaded 
		$path = trailingslashit( get_stylesheet_directory() ) ;
		$path_uri =  trailingslashit( get_stylesheet_directory_uri() ) ;
		
		// Check for 'buddypress/' in theme root
		if ( file_exists( $path . 'buddypress/css/' . $file_name ) ) {
			$location = $path_uri . 'buddypress/css/';
			$handle =  'bp-new-nav' ;
		
		// Check for 'community/' in theme root
		} elseif ( file_exists( $path . 'community/css/' . $file_name ) ) {
			$location = $path_uri . 'community/css/';
			$handle =  'bp-new-nav' ;

		}

		// Enqueue the BuddyPress styling
		wp_enqueue_style( $handle, $location . $file_name, array(), $ver, 'screen' );
	}	
}
?>