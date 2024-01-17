<?php

require 'functions.php';

// require 'router.php';


$dsn = "mysql:host=localhost;port=3306;user=root;dbname=ecommerce;charset=utf8";

$pdo = new PDO($dsn,'root');
// $pdo = new PDO($dsn,'root');

$statement = $pdo->prepare("select * from brands");

$statement->execute();

$brands = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($brands);


