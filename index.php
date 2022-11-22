<?php

$heading = 'Home';

// $root = $_SERVER['DOCUMENT_ROOT'];
// include $root ."/small-php-project/views/index.view.php";

// require("views/index.view.php"); 
 require("functions.php"); 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


if( $uri === '/small-php-project/about'){
    var_dump(44444444444);
}

// var_dump($uri);