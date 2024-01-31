<?php
function getAllGames($connexiondb){
    $sql = "SELECT * FROM jeux_video";
    $result = $connexiondb->query($sql);
    $jeux = $result->fetchAll();
    return $jeux;
}

function deleteGame($connexiondb){
    if (isset($_GET['ID'])) {
        $currentId = $_GET['ID'];
        $sql = "DELETE FROM jeux_video WHERE ID = $currentId";
        $delete = $connexiondb->query($sql);
        echo '<p>"' . $jeu['nom'] . '"supprimé avec succès </p>' ;
    }

}

