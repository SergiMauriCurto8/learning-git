<?php

require "functions.php";

require "task.php";

$connection = new connection();
$pdo = $connection->make();

$pdo = connection::make();

$pdo = connect();

$tasks = allTasks($pdo);

require "index.template.php";
