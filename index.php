<?php

require "functions.php";

require "task.php";


try {
    $pdo = new PDO('mysql:HOST=127.0.0.1;dbname=prova', 'root','');

    }
    catch (PDOException $a){
        die("Ha hagut un error durant la connexió. Missatge: " . $a->getMessage());

    }
$query = $pdo->prepare('SELECT * FROM todos');

$query->execute();

//var_dump($query->fetchAll(PDO::FETCH_OBJ));

//var_dump($query->fetchAll(PDO::FETCH_OBJ)[0]->description);

var_dump($query->fetchAll(PDO::FETCH_CLASS,task::class));






//require "index.template.php";