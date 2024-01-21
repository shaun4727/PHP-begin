<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/phpBegin/' => 'controllers/index.php',
    '/phpBegin/about' => 'controllers/about.php',
    '/phpBegin/contact' => 'controllers/contact.php',
    '/phpBegin/notes' => 'controllers/notes.php',
    '/phpBegin/note' => 'controllers/note.php',
    '/phpBegin/addNote' => 'controllers/addNote.php'
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