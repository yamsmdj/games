<?php
function getAllGames($connexiondb){
    $result = $connexiondb->query("SELECT * FROM jeux_video");
    $jeux = $result->fetchAll();
    return $jeux;
}

function deleteGame($connexiondb){
    $result = $connexiondb->query('DELETE FROM jeux_video WHERE id = :id');
}

