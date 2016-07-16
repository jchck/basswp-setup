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

function setup(){
	/*
	Enable Soil plugin modules
	@link https://github.com/roots/soil
	*/

	add_theme_support('soil-clean-up');
	add_theme_support('soil-nav-walker');
	add_theme_support('soil-nice-search');
	add_theme_support('soil-jquery-cdn');
	add_theme_support('soil-relative-urls');
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');