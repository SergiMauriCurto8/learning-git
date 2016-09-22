<?php

require "core/functions.php";

require "core/models/task.php";

require 'core/database/connection.php';

require 'core/database/QueryBuilder.php';

$config = require 'core/config/database.php';

$message = require 'core/config/message.php';

$pdo = connection::make($config,$message);

$query = new QueryBuilder($pdo);