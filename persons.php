<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = connection::make($config,$message);

$query = new QueryBuilder($pdo);
$tasks = $query->all('persons');

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE
