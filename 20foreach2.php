<?php

$arrayFrutas = [

    1 => "Abacaxi",
    2 => "Banana",
    3 => "Goiaba",
    4 => "Manga",
    5 => "Uva"
];

#foreach($arrayFrutas as $key => $value) { # as qual variavel contem a key e o valor do array
 #   echo $key . $value . "\n";
#}

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

<ul>
    <?php
        foreach($arrayFrutas as $value) {

        ?>


  
    <li><?= $value ?></li>
    <?php
}

?>
</ul>
    
</body>
</html>