<?php

namespace jchck\admin_pages;

function admin_pages(){

	/*
		Turn off the Admin Bar for user role >= admin
		@link https://codex.wordpress.org/Function_Reference/show_admin_bar
	*/

	if ( current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}

	/*
		Turn off the ACF admin page if < admin
		@link https://www.advancedcustomfields.com/resources/how-to-hide-acf-menu-from-clients/
	*/
	
	if ( ! current_user_can( 'manage_options' ) ) {
		add_filter('acf/settings/show_admin', '__return_false');
	}
	
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\admin_pages' );



function remove_pages(){

	/* 
		Turn off Plugins if < admin
		https://codex.wordpress.org/Function_Reference/remove_menu_page
	*/
	
	if ( ! current_user_can( 'manage_options' ) ) {
		remove_menu_page( 'plugins.php' );
	}
}

add_action( 'admin_menu', __NAMESPACE__ . '\\remove_pages' );