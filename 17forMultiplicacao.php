


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

for ($i = 0; $i<11; $i++) {
    //print "Incremento: {$i} \n";


?>
    <ul>
        <li>8 x <?= $i ?> =  <?= 8 * $i; ?> </li>
    </ul>
    <?php
}
?>
</body>
</html>