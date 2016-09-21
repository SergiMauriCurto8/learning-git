<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$pdo = connection::make();

$query = new QueryBuilder($pdo);
$tasks = $query->all('todos');


require "index.template.php";


