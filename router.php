<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/addNote' => 'controllers/notes/create.php'
];

function abort($code=404){
    http_response_code($code);
    $heading = "Unknown";
    require "views/{$code}.php";
    die();
}

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
       abort(404);
    }
}

routeToController($uri,$routes);