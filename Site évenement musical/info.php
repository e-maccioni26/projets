<?php

include ('config.php');

var_dump($_POST);
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$telephone = $_POST['tel'];
$codepostal = $_POST['cp'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];

$requete = $dbh ->prepare('INSERT INTO
donnee(nom, prenom, mail, tel, adresse, ville, cp) VALUES (:nom, :prenom, :mail, :tel, :adresse, :ville, :cp)');

try {
    $requete->execute(array(
       'nom' => $nom,
       'mail' => $mail,
       'prenom' => $prenom,
       'tel' => $telephone,
       'cp' => $codepostal,
       'ville' => $ville,
       'adresse' => $adresse,
    ));


} catch (Exception $e) {
  die('Erreur : ' . $e ->getMessage());
}

?>