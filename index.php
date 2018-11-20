$path = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'index.html',
    '/menu' => 'menu/index.html'
];

if(!isset($routes[$path])) {