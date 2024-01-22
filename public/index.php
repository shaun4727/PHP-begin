<?php



const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'core/functions.php';



spl_autoload_register(function($class){
    $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
    base_path("{$class}.php");
});

// base_path('core/Router.php');
$router = new \Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = require base_path_sec('routes.php');
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);





