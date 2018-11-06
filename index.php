<?php

$path = $_SERVER['REQUEST_URI'];

$routes = [
    '/danny/' => 'index.html',
    '/danny/menu/' => 'menu/index.html'
];

if(!isset($routes[$path])) {
    throw new RuntimeException('ROUTE: ' . $path . ' not found');
}

$file = $routes[$path];

if( file_exists($file)) {
    echo file_get_contents($file);
} else {
    throw new RuntimeException('FILE: ' . $file . ' not found');
}
