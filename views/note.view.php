<?php
    require("views/partials/head.php"); 
    require("views/partials/nav.php"); 
    require("views/partials/banner.php"); 
?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
       <li><?= $note['body'] ?></li>
    </div>
  </main>

<?php require("views/partials/footer.php");  ?>