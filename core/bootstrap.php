<?php

require "core/functions.php";

require "models/task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$config = require 'config/database.php';

$message = require 'config/message.php';

$pdo = connection::make($config,$message);

$query = new QueryBuilder($pdo);