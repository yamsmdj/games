<?php
// ajouter un element, supprimer un element, modifier un element // 
try {
   $conn = new PDO("mysql:host=localhost; dbname=liste_jeux;charset=utf8", "root", "");
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
    echo "Connecting to database successfully";
} catch (PDOException $e) {
    var_dump($e -> getMessage());
};


?>