<?php

try{

$dbh = new PDO('mysql:host=localhost;dbname=partiel', 'root', 'root');

}

catch (Exception $e) {
    echo "Erreur de la BDD : ". $e->getMessage();
}

