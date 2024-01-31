

<div class="card" style="width: 18rem;">
  <img src="assets/img/jeux_video" class="card-img-top" alt="<?= $jeu['nom'] ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $jeu['nom'] ?></h5>
    <p class="card-text"><?= $jeu['possesseur'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $jeu['console'] ?></li>
    <li class="list-group-item"><?= $jeu['prix'] ?></li>
  </ul>
  <?php echo "<div class='m-auto py-2'>
        <a href='update_game.php?id=" . $jeu['ID'] . "' >Modifier</a>
        <a href='delete_game.php?id=" . $jeu['ID'] . "' >Supprimer</a>
    </div>
    "; ?>
</div>