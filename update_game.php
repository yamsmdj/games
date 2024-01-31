<?php 
require_once 'utilities/header.php';

$currentId = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

$nom = $_POST['nom'];
$possesseur = $_POST['possesseur'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$joueurs = $_POST['nbre_joueurs_max'];
$com = $_POST['commentaires'];


$sql = "UPDATE jeux_video SET nom = '$nom' ,possesseur = '$possesseur',
console= '$console' ,prix = $prix, nbre_joueurs_max= $joueurs ,commentaires = '$com' 
WHERE ID = $currentId";

$db->query($sql);
}else{
    $sql = "SELECT * FROM jeux_video WHERE ID = $currentId";
   $result = $db->query($sql);
   $jeu = $result->fetch();
}
?>

<form action="" method="POST">
    <label for="nom">nom</label>
    <input type="text" name="nom" value="<?= $jeu['nom'] ?>">

    <label for="possesseur">possesseur</label>
    <input type="text" name="possesseur" value="<?= $jeu['possesseur'] ?>">

    <label for="console">console</label>
    <input type="text" name="console"value="<?= $jeu['console'] ?>">

    <label for="prix">prix</label>
    <input type="number" name="prix" value="<?= $jeu['prix'] ?>">

    <label for="nbre_joueurs_max">nbre_joueurs_max</label>
    <input type="number" name="nbre_joueurs_max" value="<?= $jeu['nbre_joueurs_max'] ?>">

    <label for="commentaires">commentaires</label>
    <textarea name="commentaires"><?= $jeu['commentaires'] ?> </textarea>

    <button type="submit">Modifier</button>
</form>
