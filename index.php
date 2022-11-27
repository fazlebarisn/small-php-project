<?php
require("functions.php"); 

$heading = 'Home';

//require("views/index.view.php"); 

// connect to the database
class Database{

    public $connection;

    public function __construct()
    {
        $dsn = ("mysql:host=localhost; dbname=small_php_project; user=root");
        $this->connection = new PDO($dsn);
    }

    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        return $statement;
    }

}

$db = new Database();
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);


foreach( $posts as $post ){
    echo "<li>" . $post['title'] . "</li>";
}