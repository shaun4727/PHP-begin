<?php

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition){
    if(!$condition){
        abort(Response::FORBIDDEN);
    }
}

function base_path($path,$attributes=[]){
    extract($attributes);
    require BASE_PATH . $path;
}

function view($path,$attributes=[]){
    return base_path('views/'.$path,$attributes);
}