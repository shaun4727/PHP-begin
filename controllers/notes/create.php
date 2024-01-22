<?php
use Core\Database;
use Core\Validator;
use Core\App;


const BASE_PATHs = __DIR__.'/../../';
require BASE_PATHs.'core/Validator.php';
$heading = "Add Note";




$query = "INSERT INTO notes (body,user_id) VALUES(:body,:user_id)";

$db = App::resolve(Database::class);

$error = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!Validator::string($_POST['body'],1,1000)){
        $error['body'] = 'Body is required';
    }
    if(empty($error)){
        $db->query($query,['body'=>$_POST['body'],'user_id'=>1]);
    }
}


view("notes/addNote.view.php",['heading'=>'Add Note','error'=> $error]);