<?php
require("functions.php"); 
require "Database.php";
$config = require "config.php";

$heading = 'My Notes';

// $id = $_GET['id'] ?? 1;
// dd( $_GET['id'] );
// $query = "select * from posts where id=:id";

 $db = new Database($config['database']);
// $posts = $db->query($query, [':id'=>$id] )->fetchAll();

$notes = $db->query("select * from notes where user_id=1")->fetchAll();

require("views/notes.view.php"); 