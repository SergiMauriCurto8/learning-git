<?php

require 'core/bootstrap.php';

//$tasks = $query->all('todos');

$routes = [

    ''               => 'controllers/tasks.php',
    'persons'        => 'controllers/persons.php',
    'about'          => 'controllers/about.php',
    'contact'        => 'controllers/contact.php',

];

var_dump( trim($_SERVER('REQUEST_URL'), '/')) ;

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE


