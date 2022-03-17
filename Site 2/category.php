<?php

function getAllCategory(): array {
    global $database;

    $sql = 'SELECT * FROM `category`';
    $query = $database->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}


function getCategoryById(int $id): array {
    global $database;

    $sql = 'SELECT * FROM `category` WHERE `id`=:id';
    $query = $database->prepare($sql);
    $query->execute(['id'=>$id]);

    return $query->fetchAll();
}