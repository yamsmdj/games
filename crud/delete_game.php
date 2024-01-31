<?php
require_once dirname(__DIR__) . '/utilities/header.php';

if(isset($_POST['confirmation'])){
    if (isset($_GET['id'])) {
        $currentId = $_GET['id'];
        $sql = "DELETE FROM jeux_video WHERE ID = $currentId";
        $delete = $db->query($sql);
        echo '<p class="alert alert-success"> Le jeu a bien été supprimer</p>';
        echo '<a href="/index.php"> Retour </a>';
    }
    }else{
            echo '<form method="POST" action="">
            <label for="confirmation">Confirmez vous la suppression ? </label>
            <input type="submit" name="confirmation" value="oui"> 
            <a href="/index.php">Non</a>
            </form>';
        }
?>