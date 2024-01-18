<?php

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition){
    if(!$condition){
        abort(Response::FORBIDDEN);
    }
}