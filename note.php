<?php
require("functions.php"); 
require "Database.php";
$config = require "config.php";

$heading = 'My Notes';
$db = new Database($config['database']);

$note = $db->query("select * from notes where id=:id", ['id'=>$_GET['id'] ])->fetch();

require("views/note.view.php"); 