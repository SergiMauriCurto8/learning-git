<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$pdo = connection::make();

$query = new QueryBuilder();
$tasks = $query->all($pdo,'todos');


require "index.template.php";
