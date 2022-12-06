<?php
require("functions.php"); 
require "Database.php";
$config = require "config.php";

$heading = 'My Notes';

$db = new Database($config['database']);

$notes = $db->query("select * from notes where user_id=1")->get();

require("views/notes.view.php"); 