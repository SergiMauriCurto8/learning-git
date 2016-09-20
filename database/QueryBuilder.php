<?php

class QueryBuilder {

    public $pdo;

    public function __construct(PDO $pdo) {

        $this->pdo = $pdo;
    }

function all($table) {

    $query = $this->pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(
        PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
        Task::class);
}


}