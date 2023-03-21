<?php

$hora =date("h");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green"><?= date("d/m/y") ?></h1>
    <h2 style="color:red"><?=date("h:i:s") ?></h2>
    <p style="color:pink"><?php if($hora >=00 && $hora<12) {
        echo "BOM DIA!";
    } elseif($hora >=12 && $hora<18) {
        echo "BOA TARDE!";
    } elseif($hora>=18 && $hora<00) {
        echo "BOA NOITE!";
    }

    ?></p>
</body>
</html>