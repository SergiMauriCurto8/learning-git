<?php

require 'core/bootstrap.php'

$tasks = $query->all('tasks');

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE
