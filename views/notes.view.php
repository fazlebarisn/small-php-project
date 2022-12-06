<?php

    require("views/partials/head.php"); 
    require("views/partials/nav.php"); 
    require("views/partials/banner.php"); 
    //  dd($notes);
?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach( $notes as $note ) : ?>
          <li>
              <a href="note.php?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                  <?= $note['body'] ?>
              </a>
              
          </li>
        <?php endforeach ?>
      </ul>
      <p class="mt-6">
        <a href="#" class="text-blue-500 hover:underline">Add New Note</a>
      </p>
    </div>
  </main>

<?php require("views/partials/footer.php");  ?>