<?php

namespace Core;

class Session{
    public static function has($key){
        return (bool)  static::get($key);
    }

    public static function put($key,$value){
        if(isset($_SESSION['_flash'][$key])){
            return $_SESSION['_flash'][$key];
        }
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default=null){
        return $_SESSION['_flash'][$key] ?? $default;
    }

    public static function flash($key,$value){
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash(){
        unset($_SESSION['_flash']);
    }
}