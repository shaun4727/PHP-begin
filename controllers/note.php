<?php

$heading = "Notes";

$config = require('config.php');


$query = "select * from notes where id=:id";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$note = $db->query($query,['id'=>$_GET['id']])->findOrFail(PDO::FETCH_ASSOC);

           

require "views/note.view.php";