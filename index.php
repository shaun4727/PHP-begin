<?php

require 'functions.php';

// require 'router.php';


require 'Database.php';

$db = new Database;
$brands = $db->query("select * from brands")->fetchAll(PDO::FETCH_ASSOC);

var_dump($brands);


