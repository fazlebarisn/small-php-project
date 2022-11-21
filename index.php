<?php
require("functions.php"); 
$uri = $_SERVER['REQUEST_URI'];
// require("controllers/index.php"); 
// require("controllers/about.php"); 
// require("controllers/contact.php"); 

//  dd($_SERVER['REQUEST_URI']);
// if( $uri === '/small-php-project/'){
//     require("controllers/index.php"); 
// }
// dd($_SERVER['REQUEST_URI']);

if( ($uri === '/small-php-project/index.php') || ($uri === '/small-php-project/') ){
    require("controllers/index.php"); 
} else if( $uri === '/small-php-project/about.php' ){
    require("controllers/about.php"); 
}else if($uri === '/small-php-project/contact.php'){
    require("controllers/contact.php"); 
}


