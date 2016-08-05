<?php
/*
Plugin Name:		Setup
Plugin URI:         http://jstn.ch/ck
Description:        A WordPress plugin containing a collection of front-end theme agnostic setup modules
Version:            0.0.2
Author:             Justin Chick
Author URI:         http://jstn.ch/ck
License:            MIT
License URI:        http://opensource.org/licenses/MIT
*/

namespace basswp\setup;

/*
	Global URL's
*/
define( 'IMG', plugin_dir_url( '/dest/img' ) );


/*
	Include functions from /modules directory
*/
foreach ( glob( __DIR__ . '/modules/*.php' ) as $file ){
	require_once $file;
}


/*
	Include custom post types
*/
foreach ( glob( __DIR__ . '/cpt/*.php' ) as $cpt ){
	require_once $cpt;
}