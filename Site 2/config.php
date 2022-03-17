<?php

$dsn  = "mysql:host=localhost;dbname=site_cuisine";
$user = "root";
$pass = "root";
$char = "utf8";

try {
    $database = new PDO($dsn, $user, $pass);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $database->exec("SET CHARACTER SET $char");
} catch (PDOException $e) {
    die();
}