<?php

function getAllGames($connexiondb){
    $sql = "SELECT jv.id , jv.nom , jv.possesseur , jv.console, jv.prix, jv.nbre_joueurs_max, jv.commentaires , p.pathimg 
    FROM jeux_video jv 
    LEFT JOIN pictures p ON jv.ID = p.games_id; ";
    $result = $connexiondb->query($sql);
    $jeux = $result->fetchAll();
    return $jeux;
};

function deleteGame($connexiondb){
    if (isset($_GET['ID'])) {
        $currentId = $_GET['ID'];
        $sql = "DELETE FROM jeux_video WHERE ID = $currentId";
        $delete = $connexiondb->query($sql);
        echo '<p>"' . $jeu['nom'] . '"supprimé avec succès </p>' ;
    }};

function showPicture($db, $currentId){
    $sql = "SELECT * FROM pictures WHERE ID = $currentId ";
    $result = $db->query($sql);
    $path = $result->fetchAll();
    return $path;
};