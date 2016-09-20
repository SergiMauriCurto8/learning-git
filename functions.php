<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 16/09/16
 * Time: 17:16
 */

function hello($name, $sn1){
    echo "Hola" . $name . " " . $sn1 . "!";

}

function hellotortosino($name, $sn1){
    echo "Hola" . $name . " " . $sn1 . "Curto";

}

function suma($args) {

    $numbers = func_get_arg();

    return array_sum($numbers);
    
}

function connect()
{
    try {
        $pdo = new PDO('mysql:HOST=127.0.0.1;dbname=prova', 'root','');
        return $pdo;
    }
    catch (PDOException $a){
        die("Ha hagut un error durant la connexió. Missatge: " . $a->getMessage());

    }

}

function allTasks($pdo)
{

    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
}

