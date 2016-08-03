<?php

namespace basswp\setup\favicon;

function favicon(){
	echo '<link rel="shortcut icon" href="' . IMG . 'favicon.png" />';
}

add_action( 'wp_head', __NAMESPACE__ . '\\favicon' );
add_action( 'admin_head', __NAMESPACE__ . '\\favicon' );
add_action( 'login_head', __NAMESPACE__ . '\\favicon' );