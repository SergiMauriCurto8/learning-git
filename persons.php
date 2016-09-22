<?php

require 'bootstrap.php'

$tasks = $query->all('persons');

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

