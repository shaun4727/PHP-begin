<?php


use Core\Authenticator;

use Http\Forms\LoginForm;





$form = LoginForm::validate($attributes = ['email' => $_POST['email'], 'password' => $_POST['password']]);




if (!(new Authenticator)->attempt($attributes['email'], $attributes['password'])) {
    $form->add_error("email", "No Valid User Found with email and password!")->throw();
}

    
redirect("/");

