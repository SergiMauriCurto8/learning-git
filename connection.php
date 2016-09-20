<?php

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 20/09/16
 * Time: 21:23
 */
class connection
{

    public static function make() {
        try {
            $pdo = new PDO('mysql:HOST=127.0.0.1;dbname=prova', 'root','');
            return $pdo;
        }
        catch (PDOException $a){
            die("Ha hagut un error durant la connexió. Missatge: " . $a->getMessage());

        }

    }

    //public function make() {


    }
}