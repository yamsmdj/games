<?php $result = $conn->query("SELECT * FROM jeux_video");
$jeux = $result->fetchAll();

foreach ($jeux as $jeu) {
    echo "
    <div>
    <h3>Nom du jeu :" . $jeu['nom'] . "</h3> <br>
    <a href='' >Modifier</a>
    <a href='' >Supprimer</a>
    </div>
    ";
}
?>