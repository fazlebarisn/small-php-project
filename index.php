<?php
require("functions.php"); 
$uri = $_SERVER['REQUEST_URI'];
// require("controllers/index.php"); 
// require("controllers/about.php"); 
// require("controllers/contact.php"); 

 dd($_SERVER['REQUEST_URI']);
if( $uri == '/small-php-project/'){
    require("controllers/index.php"); 
}