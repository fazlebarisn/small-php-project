<?php
require("functions.php"); 
require "Database.php";
$config = require "config.php";

$heading = 'My Notes';

// $id = $_GET['id'] ?? 1;

// $query = "select * from posts where id=:id";

 $db = new Database($config['database']);
// $posts = $db->query($query, [':id'=>$id] )->fetchAll();
$id = $_GET['id'];
// dd($id);
$notes = $db->query("select * from notes where user_id=:id", ['id'=>$id])->fetchAll();

require("views/notes.view.php"); 