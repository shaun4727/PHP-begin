<?php
use Core\Database;
use Core\App;
use Core\Validator;

$query = "select * from notes where id=:id";

$db = App::resolve(Database::class);

$currentUserID = "5";
$note = $db->query($query,['id'=>$_POST['id']])->findOrFail(PDO::FETCH_ASSOC);

authorize($note['user_id'] === $currentUserID);
$error = [];


if(!Validator::string($_POST['body'],1,1000)){
    $error['body'] = 'Body is required';
}
$query = "UPDATE notes SET body=:body where id=:id";
if(empty($error)){
    $db->query($query,['body'=>$_POST['body'],'id'=>$note['id']]);
    header('location: /notes');
    exit();
}





