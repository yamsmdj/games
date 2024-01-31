<?php 

?>
<div class="card" style="width: 19rem;">
  <img src="<?= empty($jeu['pathimg']) ? 'assets/img/jeux_video.png' : $jeu['pathimg'] ?>" class="card-img-top" style="height:300px;" alt="<?= $jeu['nom'] ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $jeu['nom'] ?></h5>
    <p class="card-text"><?= $jeu['possesseur'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $jeu['console'] ?></li>
    <li class="list-group-item"><?= $jeu['prix'] ?></li>
  </ul>
  <?php echo "<div class='m-auto py-2'>
        <a href='/crud/update_game.php?id=" . $jeu['id'] . "' >Modifier</a>
        <a href='/crud/delete_game.php?id=" . $jeu['id'] . "' >Supprimer</a>
    </div>
    "; ?>
</div>