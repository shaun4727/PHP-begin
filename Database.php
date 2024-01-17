<?php

class Database{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=ecommerce;charset=utf8";

        $this->connection = new PDO($dsn,'root');
    }

    public function query($query){
        
        // $pdo = new PDO($dsn,'root');
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;
    }
}