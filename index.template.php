<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
    foreach ($names as $name) {
        echo "name";
    }
    ?>

    <ul>

         <?php foreach ($person as $key => featureValue) ;?>
            <li><strong><?= $feature?> </li></strong>
         <?php endforeach; ?>

    </ul>
</h1>
</body>
</html>