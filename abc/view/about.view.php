<?php

    $root = $_SERVER['DOCUMENT_ROOT'];
    include $root ."/small-php-project/abc/view/part/header.view.php";
    include $root ."/small-php-project/abc/view/part/nav.view.php";
    
    // include("view/part/header.view.php");
    // include("view/part/nav.view.php");

?>

    <h1><?= $title ?></h1>

<?php include $root ."/small-php-project/abc/view/part/footer.view.php"; ?>