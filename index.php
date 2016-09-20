<?php

require "functions.php";

require "task.php";

require 'database/connection.php';

require 'database/QueryBuilder.php';

$pdo = connection::make();


require "index.template.php";
