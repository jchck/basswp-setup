<?php

namespace jchck\login;

function logo()  {
    echo '
    <style type="text/css">
    	body { background: #0F2942; }
    	#nav a, #backtoblog a { color: white !important; transition: all 0.2s linear 0.0s; }
    	#nav a:hover, #backtoblog a:hover { color: #F3A000 !important; }
        .login h1 a {background-image: url(/logo.png) !important; width:100% !important; height:40px !important; background-size: auto !important; }
    </style>
    ';
}
add_action('login_head', __NAMESPACE__ . '\\logo');