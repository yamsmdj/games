<?php
require_once dirname(__DIR__) . '/utilities/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])){
        $nom = $_POST['nom'];
        $console = $_POST['console'];
        $possesseur = $_POST['possesseur'];
        $prix = $_POST['prix'];
        $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
        $commentaires = $_POST['commentaires'];
        
        $sql = "INSERT INTO jeux_video (nom,console,possesseur,prix,nbre_joueurs_max,commentaires) VALUES ('$nom','$console','$possesseur',$prix,'$nbre_joueurs_max','$commentaires')";
        $add = $db->query($sql);
        if ($add) {
            echo '<p> Le jeu a bien été ajouté </p>';
            echo '<a href=/index.php > Retour au menu principale</a>';
        }
}
?>

<form action="" method="POST" class="d-flex flex-column w-25 m-auto">

<label for="nom">Ajouter un titre</label>
<input type="text" name="nom">

<label for="console">Ajouter une console</label>
<input type="text" name="console">

<label for="possesseur">Ajouter un possesseur</label>
<input type="text" name="possesseur">

<label for="prix">Ajouter un prix</label>
<input type="number" name="prix">

<label for="nbre_joueurs_max">Ajouter un nombre de joueur maximum</label>
<input type="number" name="nbre_joueurs_max">

<label for="commentaires">Ajouter un commentaire</label>
<textarea name="commentaires"> </textarea>

<button type="submit" name="ajouter">Ajouter le jeu</button>
</form>


<?php
require_once dirname(__DIR__) . '/utilities/footer.php' ?>