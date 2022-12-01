<?php
require("functions.php"); 

$heading = 'Home';

if('/small-php-project/' == $url || '/small-php-project/index.php' == $url ){
    require("views/index.view.php"); 
}else{
    abort();
}