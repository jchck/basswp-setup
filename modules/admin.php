<?php

namespace basswp\setup\admin;

function remove_options(){

	/*
		Turn off options pages
	*/

	/* Posts */
	//remove_menu_page( 'edit.php' );
	/* Categories */
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );
	/* Tags */
	remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );
	/* Pages */
	remove_menu_page( 'edit.php?post_type=page' );
	/* Plugins */
	//remove_menu_page( 'plugins.php' );
	/* Themes */
	//remove_menu_page( 'themes.php' );
	remove_menu_page( 'edit-comments.php' );
	/* Tools */
	remove_menu_page( 'tools.php' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\remove_options' );


function admin(){

	/*
		Turn off the Admin Bar
		@link https://codex.wordpress.org/Function_Reference/show_admin_bar
	*/

	show_admin_bar( false );

	/*
		Turn off the ACF admin page
		@link https://www.advancedcustomfields.com/resources/how-to-hide-acf-menu-from-clients/
	*/
	
	add_filter('acf/settings/show_admin', '__return_false');
	
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\admin' );


function admin_bar(){

	/*
		Remove items from admin bar
	*/

	global $wp_admin_bar;

	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('about');
	$wp_admin_bar->remove_menu('wporg');
	$wp_admin_bar->remove_menu('documentation');
	$wp_admin_bar->remove_menu('support-forums');
	$wp_admin_bar->remove_menu('feedback');
	$wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', __NAMESPACE__ . '\\admin_bar' );


function widgets(){

	/*
		Turn off dashboard widgets
	*/

	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}
add_action( 'wp_dashboard_setup', __NAMESPACE__ . '\\widgets' );


