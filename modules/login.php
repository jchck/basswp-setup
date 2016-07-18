<?php

namespace jchck\login;

function login_style()  {
    wp_enqueue_style( 'styles',  plugins_url()  . '/setup/dest/css/setup.css');
}
add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\\login_style');