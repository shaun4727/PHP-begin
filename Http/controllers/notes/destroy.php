<?php
use Core\Database;
use Core\App;

// const BASE_PATHs = __DIR__.'/../../';

// $config = require(BASE_PATHs."/config.php");

$db = App::resolve(Database::class);

$query = "select * from notes where id=:id";

// $db = new Database($config['database']);

$currentUserID = "1";
$note = [];

$note = $db->query($query,['id'=>$_POST['id']])->findOrFail(PDO::FETCH_ASSOC);
authorize($note['user_id'] === $currentUserID);

$db->query('delete from notes where id=:id',['id'=>$_POST['id']]);
header('location: /notes');
exit();



           

view("notes/note.view.php",['heading'=>'Note','note'=> $note]);