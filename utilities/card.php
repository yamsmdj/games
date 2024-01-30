

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $jeu['nom'] ?></h5>
    <p class="card-text"><?= $jeu['possesseur'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $jeu['console'] ?></li>
    <li class="list-group-item"><?= $jeu['prix'] ?></li>
  </ul>
  <?php echo "<div>
        <a href='modifier_jeu.php?id=" . $jeu['ID'] . "' >Modifier</a>
        <a href='supprimer_jeu.php?id=" . $jeu['ID'] . "' >Supprimer</a>
    </div>
    "; ?>
</div>