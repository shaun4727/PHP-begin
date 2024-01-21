<?php

const BASE_PATHs = __DIR__.'/../../';
require BASE_PATHs.'Validator.php';
$heading = "Add Note";


$config = require(BASE_PATHs."/config.php");

$query = "INSERT INTO notes (body,user_id) VALUES(:body,:user_id)";

$db = new Database($config['database']);

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