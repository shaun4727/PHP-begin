<?php

use Core\Database;
use Core\App;


$query = "SELECT * FROM notes WHERE id=:id";
// $query = "select * from posts where id = :id";

$db = App::resolve(Database::class);

$currentUserID = "5";
$note = $db->query($query,['id'=>$_GET['id']])->findOrFail(PDO::FETCH_ASSOC);
authorize($note['user_id'] === $currentUserID);

$note = $db->query($query,['id'=>$_GET['id']])->findOrFail(PDO::FETCH_ASSOC);

$error = [];
view("notes/editNote.view.php",[
    'heading'=>'Edit Note',
    'error'=> $error,
    'note'=> $note
]);