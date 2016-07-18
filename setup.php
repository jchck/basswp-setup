<?php
/*
Plugin Name:		Setup
Plugin URI:         http://jstn.ch/ck
Description:        Collection of theme agnostic setup modules 
Version:            0.0.0
Author:             Justin Chick
Author URI:         http://jstn.ch/ck
License:            MIT
License URI:        http://opensource.org/licenses/MIT
*/

namespace jchck\setup;

foreach ( glob( __DIR__ . '/modules/*.php' ) as $file ){
	require_once $file;
}