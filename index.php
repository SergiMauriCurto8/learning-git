<?php

require "functions.php";

require "task.php";



try {
    $pdo = new PDO('mysql:HOST=127.0.0.1;dbname=prova', 'root','');
    return $pdo;
    }
    catch (PDOException $a){
        die("Ha hagut un error durant la connexió. Missatge: " . $a->getMessage());

    }


$query = $pdo->prepare('SELECT * FROM todos');

$query->execute();

$tasks = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,task::class);


require "index.template.php";