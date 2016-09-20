<?php

require "functions.php";

require "task.php";



$task = new Task("Aprendre PHP",false);
var_dump($task);
$task.>completed = true;
var_dump($task);

//$task1 = new Task("Aprendre PHP2",true);
//$task2 = new Task("Aprendre PHP3",false);
//$task3 = new Task("Aprendre PHP4",true);
   // $Task = new Task;
    //$Task2 = new Task;
   // $Task3 = new Task;
//    $Task = new Task();


//require "index.template.php";