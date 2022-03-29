<?php
//ici je crée ma connexion avec PDO ce qui sera simple pour exporter et changer ma base de donnée a souhait.
try{
    $db = new PDO('mysql:host=localhost;dbname=exosql', 'root', '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}