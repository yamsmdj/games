<?php 
$title = "Accueil";
require "utilities/header.php";
require "function/games.fn.php";
$jeux = getAllGames($db); 

?>

<div class="container mt-4">
  <div class="row">
    <?php foreach ($jeux as $jeu) : ?>
      <div class="col-md-4 mb-4">
        <?php include "utilities/card.php"; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php require "utilities/footer.php"; ?>

