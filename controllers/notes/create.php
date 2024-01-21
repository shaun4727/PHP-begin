<?php

require 'Validator.php';
$heading = "Add Note";
$config = require('config.php');

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


require "views/notes/addNote.view.php";