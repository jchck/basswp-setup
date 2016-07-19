<?php

namespace jchck\login;

/*
	Add CSS to the wp-login.php
*/

function style()  {
    wp_enqueue_style( 'styles',  plugins_url()  . '/setup/dest/css/setup.css');
}
add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\\style');