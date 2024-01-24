<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;


class LoginForm{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if(!Validator::email($attributes['email'])){
            $this->errors['email'] = 'Please provide a valid email address';
        }
        
        if(!Validator::string($attributes['password'],7,255)){
            $this->errors['password'] = 'Please provide a valid password';
        }
    }

    public static function validate($attributes){

        $instance = new static($attributes);
        if($instance->failed()){
            $instance->throw();
        }
        return $instance;
    }

    public function throw(){
        ValidationException::throw($this->get_errors(),$this->attributes);
    }

    public function failed(){
        return count($this->errors);
    }

    public function get_errors(){
        return $this->errors;
    }

    public function add_error($field,$message){
        $this->errors[$field] = $message;
        return $this;
    }

}