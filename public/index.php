<?php

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'functions.php';


spl_autoload_register(function($class){
    base_path("core/{$class}.php");
});

base_path('router.php');








