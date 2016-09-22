<?php

require 'core/bootstrap.php'

$contact = $query->all('contact');

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE
