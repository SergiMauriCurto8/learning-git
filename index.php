<?php

require 'core/bootstrap.php';

//$tasks = $query->all('todos');

$routes = [

    ''               => 'controllers/tasks.php',
    'persons'        => 'controllers/persons.php',
    'about'          => 'controllers/about.php',
    'contact'        => 'controllers/contact.php',

];

$uri = trim($_SERVER('REQUEST_URL'), '/')) ;

if (array_key)


//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE


