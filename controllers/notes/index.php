<?php

use Core\Database;
use Core\App;

const BASE_PATHs = __DIR__.'/../../';





$query = "select * from notes where user_id=:id";
// $query = "select * from posts where id = :id";

$db = App::resolve(Database::class);
$notes = $db->query($query,['id'=>1])->findAll(PDO::FETCH_ASSOC);


           

view("notes/notes.view.php",['heading'=>'Notes','notes'=> $notes]);