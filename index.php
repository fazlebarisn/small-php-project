<?php
require("functions.php"); 
require "Database.php";
$config = require "config.php";

$heading = 'Home';

// require("views/index.view.php"); 

$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();


foreach( $posts as $post ){
    echo "<li>" . $post['title'] . "</li>";
}