<?php

$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist))
	define("SITE_PATH", "https://allegretto-restaurant.herokuapp.com/"); 
else 
	define("SITE_PATH", "http://localhost/allegretto-restaurant/demos.hogash.com/dannys/"); 
?>