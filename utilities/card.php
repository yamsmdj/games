<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php $jeu['nom'] ?></h5>
    <p class="card-text"><?php $jeu['possesseur'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php $jeu['console'] ?></li>
    <li class="list-group-item"><?php $jeu['prix'] ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">MODIFIER</a>
    <a href="#" class="card-link">SUPPRIMER</a>
  </div>
</div>