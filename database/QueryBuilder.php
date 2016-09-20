<?php

class QueryBuilder {

function all(connection $pdo,$table) {

    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(
        PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
        Task::class);
}


}