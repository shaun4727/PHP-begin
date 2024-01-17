<?php

require 'functions.php';

// require 'router.php';


require 'Database.php';

$config = require('config.php');

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$db = new Database($config['database']);
$brands = $db->query($query,['id'=>$id])->fetchAll(PDO::FETCH_ASSOC);

var_dump($brands);


