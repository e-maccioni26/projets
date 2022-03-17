<?php

function getAllUser(): array {
    global $database;

    $sql = 'SELECT * FROM `user`';
    $query = $database->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}


function getUserById(int $id): array {
    global $database;

    $sql = 'SELECT * FROM `user` WHERE `id`=:id';
    $query = $database->prepare($sql);
    $query->execute(['id'=>$id]);

    return $query->fetchAll();
}