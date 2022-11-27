<?php

// connect to the database
class Database{

    public $connection;

    public function __construct($config, $username='root', $password='')
    {
        // $dsn = ("mysql:host={$config['host']}; dbname={$config['dbname']};");
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // sort version 

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        return $statement;
    }

}