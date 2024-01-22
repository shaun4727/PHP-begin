<?php

use Core\Database;

const BASE_PATHs = __DIR__.'/../../';

$config = require(BASE_PATHs."/config.php");



$query = "select * from notes";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$notes = $db->query($query)->findAll(PDO::FETCH_ASSOC);


           

view("notes/notes.view.php",['heading'=>'Notes','notes'=> $notes]);