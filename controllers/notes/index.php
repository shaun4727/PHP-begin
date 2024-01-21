<?php

$heading = "Notes";

$config = require('config.php');


$query = "select * from notes";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$notes = $db->query($query)->findAll(PDO::FETCH_ASSOC);


           

require "views/notes/notes.view.php";