<?php

$heading = "Notes";

$config = require('config.php');


$query = "select * from notes";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$notes = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);


           

require "views/notes.view.php";