<?php

require 'functions.php';

// require 'router.php';


require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);
$brands = $db->query("select * from brands")->fetchAll(PDO::FETCH_ASSOC);

var_dump($brands);


