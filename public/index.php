<?php
use Core\Session;
use Core\ValidationException;

session_start();

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'core/functions.php';


require BASE_PATH.'vendor/autoload.php';

require base_path_sec('bootstrap.php');
// base_path('core/Router.php');
$router = new \Core\Router();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = require base_path_sec('routes.php');
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


try{
    $router->route($uri,$method);
}catch(ValidationException $exception){
    Session::flash('errors', $exception->errors());
    Session::flash('old', ['email' => $attributes['email']]);

    return redirect($_SERVER['HTTP_REFERER']);
}

Session::unflash();




