<?php
use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Http\Forms\LoginForm;



$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm;


if($form->validate($email,$password)){
    $auth = new Authenticator();

    if($auth->attempt($email,$password)){
        redirect("/");
    }
    $form->add_error("email","No Valid User Found with email and password!");
    
}

// $_SESSION['_flash']['errors'] = $form->get_errors();

Session::flash('errors', $form->get_errors());

return redirect("/login");
// return view('sessions/create.view.php',['errors'=>$form->get_errors()]);







