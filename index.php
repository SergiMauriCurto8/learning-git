<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

$pdo = connection::make();

$tasks = allTasks($pdo);

require "index.template.php";
