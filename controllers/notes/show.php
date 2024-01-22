<?php
use Core\Database;

const BASE_PATHs = __DIR__.'/../../';

$config = require(BASE_PATHs."/config.php");


$query = "select * from notes where id=:id";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);

$currentUserID = "1";
$note = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $note = $db->query($query,['id'=>$_POST['id']])->findOrFail(PDO::FETCH_ASSOC);
    authorize($note['user_id'] === $currentUserID);

    $db->query('delete from notes where id=:id',['id'=>$_POST['id']]);
    header('location: /notes');
    exit();
}else{
    
    $note = $db->query($query,['id'=>$_GET['id']])->findOrFail(PDO::FETCH_ASSOC);
    authorize($note['user_id'] === $currentUserID);
}


           

view("notes/note.view.php",['heading'=>'Note','note'=> $note]);