<?php
use Core\Database;
use Core\App;


$query = "select * from notes where id=:id";
// $query = "select * from posts where id = :id";

$db = App::resolve(Database::class);

$currentUserID = "5";

$note = $db->query($query,['id'=>$_GET['id']])->findOrFail(PDO::FETCH_ASSOC);
authorize($note['user_id'] === $currentUserID);


           

view("notes/note.view.php",['heading'=>'Note','note'=> $note]);