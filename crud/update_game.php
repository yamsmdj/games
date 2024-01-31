<?php 
require_once dirname(__DIR__) . '/utilities/header.php';


$currentId = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {

$nom = $_POST['nom'];
$possesseur = $_POST['possesseur'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$joueurs = $_POST['nbre_joueurs_max'];
$com = $_POST['commentaires'];

$sql = "UPDATE jeux_video SET nom = '$nom', possesseur = '$possesseur',
console= '$console' ,prix = $prix, nbre_joueurs_max= $joueurs ,commentaires = '$com' 
WHERE ID = $currentId";

$db->query($sql);}
//  }else{
//      $sql = "SELECT * FROM jeux_video WHERE ID = $currentId";
//     $result = $db->query($sql);
//     $jeu = $result->fetch();
// }
?>

<form action="../index.php" method="POST" class="d-flex flex-column w-25 m-auto py-5">
    <label for="nom">nom</label>
    <input class="py-2" type="text" name="nom" value="">

    <label for="possesseur">possesseur</label>
    <input class="py-2" type="text" name="possesseur" value="">

    <label for="console">console</label>
    <input class="py-2" type="text" name="console"value="">

    <label for="prix">prix</label>
    <input class="py-2" type="number" name="prix" value="">

    <label for="nbre_joueurs_max">nbre_joueurs_max</label>
    <input class="py-2" type="number" name="nbre_joueurs_max" value="">

    <label for="commentaires">commentaires</label>
    <textarea name="commentaires"></textarea>

    <button type="submit">Modifier</button>
</form>
