<?php

include ('config.php');

var_dump($_POST);
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];

$requete = $dbh ->prepare('INSERT INTO
utilisateurs(nom, email, password) VALUES (:nom, :email, :password)');

try {
    $requete->execute(array(
       'nom' => $nom,
       'email' => $email,
       'password' => $password,
    ));

} catch (Exception $e) {
  die('Erreur : ' . $e ->getMessage());
}

