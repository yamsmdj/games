<?php

try {
   $db = new PDO("mysql:host=localhost; dbname=liste_jeux;charset=utf8", "root", "");
   $db->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Connecting to database successfully";
} catch (PDOException $e) {
    var_dump($e -> getMessage());
};


?>