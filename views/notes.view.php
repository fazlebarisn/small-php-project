<?php

    require("views/partials/head.php"); 
    require("views/partials/nav.php"); 
    require("views/partials/banner.php"); 
    // dd($notes);
?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach( $notes as $note ) : ?>
        <li>
            <a href="note.php?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= $note['body'] ?>
            </a>
            
        </li>
      <?php endforeach ?>
    </div>
  </main>

<?php require("views/partials/footer.php");  ?>