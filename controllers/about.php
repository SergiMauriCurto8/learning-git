<?php

require 'core/bootstrap.php'

$about = $query->all('about');

require "index.template.php";

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE
