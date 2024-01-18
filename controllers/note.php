<?php

$heading = "Notes";

$config = require('config.php');


$query = "select * from notes where id=:id";
// $query = "select * from posts where id = :id";

$db = new Database($config['database']);
$note = $db->query($query,['id'=>$_GET['id']])->fetch(PDO::FETCH_ASSOC);

if(!$note){
    abort(Response::NOT_FOUND);
}
           

require "views/note.view.php";