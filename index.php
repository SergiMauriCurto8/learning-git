<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$config = (
'type' => 'mysql',
    'name' => 'prova',
    'username' => 'root',
    'password' => '',
    'host' => '127.0.0.1'
);

$pdo = connection::make();

$query = new QueryBuilder($pdo);
$tasks = $query->all('todos');


require "index.template.php";


