<?php

try{

$dbh = new PDO('mysql:host=localhost;dbname=coursphp2', 'root', 'root');

}

catch (Exception $e) {
    echo "Erreur de la BDD : ". $e->getMessage();
}


