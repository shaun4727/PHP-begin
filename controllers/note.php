<?php

$heading = "Notes";

$config = require('config.php');

$id = $_GET['id'];

$query = "select * from notes where id=:id";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$note = $db->query($query,['id'=>$id])->fetch(PDO::FETCH_ASSOC);


           

require "views/note.view.php";