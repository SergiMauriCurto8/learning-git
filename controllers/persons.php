
<?php

$persons = $query->all('persons');

require 'views/persons.template.php';

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE
