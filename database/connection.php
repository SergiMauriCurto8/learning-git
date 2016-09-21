<?php


class connection
{

    public static function make($config)
    {
        try {
            //$pdo = new PDO('mysql:HOST=127.0.0.1;dbname=prova', 'root', '');
            $pdo = new PDO(
                $config['dbtype'] . ':host=',
                $config['dbhost'] . ':dbname=',
                $config['dbtype'],
                $config['dbtype'],
                $config['dbtype']);

            return $pdo;
        } catch (PDOException $a) {
            die("Ha hagut un error durant la connexió. Missatge: " . $a->getMessage());

        }

    }

    //public function make() {
}