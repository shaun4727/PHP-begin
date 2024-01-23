<?php


use Core\Validator;
use Core\Database;
use Core\App;


$email = $_POST['email'];
$password = $_POST['password'];



$errors = [];

if(!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}

if(!Validator::string($password,7,255)){
    $errors['password'] = 'Please provide a password of seven characters';
}
if(!empty($errors)){
    return view('registration/create.view.php',['errors'=>$errors]);
}

// check if the user exits
$db = App::resolve(Database::class);
$result = $db->query("select * from users where email = :email",['email'=>$email])->find();

if($result){
    header('location: /');
    exit();
}else{
    $db->query('INSERT INTO users (email,password) VALUES (:email,:password)',[
        'email'=> $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];
    header('location: /');
    exit();
}