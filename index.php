<?php

require "functions.php";

require "task.php";

$pdo = connect();

$tasks = allTasks($pdo);


require "index.template.php";