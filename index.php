<?php

require "functions.php";

require "task.php";

$pdo = connection::make();

$tasks = allTasks($pdo);

require "index.template.php";
